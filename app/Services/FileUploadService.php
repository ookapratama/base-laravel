<?php

namespace App\Services;

use App\Models\Media;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class FileUploadService
{
    protected ImageManager $imageManager;

    public function __construct()
    {
        $this->imageManager = new ImageManager(new Driver);
    }

    /**
     * Upload a file and record it in database
     *
     * @param  string  $folder  Folder in disk (e.g. 'avatars')
     * @param  string  $disk  Disk name (default: 'public')
     * @param  array  $options  Extra options (resize_width, resize_height, etc)
     */
    public function upload(UploadedFile $file, string $folder = 'uploads', string $disk = 'public', array $options = []): Media
    {
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = $this->generateFilename($originalName, $extension);
        $mimeType = $file->getMimeType();
        $size = $file->getSize();
        $path = "{$folder}/{$filename}";

        // Read meta BEFORE the file is moved (putFileAs invalidates the temp path)
        $meta = $this->getMeta($file, $options);

        // Process Image if needed
        if (str_starts_with($mimeType, 'image/') && ! empty($options)) {
            $this->processImage($file, $path, $disk, $options);
        } else {
            // Standard upload
            Storage::disk($disk)->putFileAs($folder, $file, $filename);
        }

        // Record to DB
        return Media::create([
            'user_id' => auth()->id(),
            'filename' => $filename,
            'original_name' => $originalName,
            'mime_type' => $mimeType,
            'size' => $size,
            'disk' => $disk,
            'path' => $path,
            'collection' => $options['collection'] ?? $folder,
            'meta' => $meta,
        ]);
    }

    /**
     * Replace an existing upload: delete the previous file + its Media row,
     * then upload the new file. Use this on update paths to avoid orphans.
     *
     * @param  string|null  $oldPath  Path of the file currently stored (e.g. users.avatar)
     */
    public function replace(?string $oldPath, UploadedFile $file, string $folder = 'uploads', string $disk = 'public', array $options = []): Media
    {
        if ($oldPath) {
            $oldMedia = Media::where('path', $oldPath)->first();

            if ($oldMedia) {
                $this->delete($oldMedia);
            } elseif (Storage::disk($disk)->exists($oldPath)) {
                // No Media row, but a stray file exists — clean it up anyway
                Storage::disk($disk)->delete($oldPath);
            }
        }

        return $this->upload($file, $folder, $disk, $options);
    }

    /**
     * Delete media and its file
     */
    public function delete(Media $media): bool
    {
        if (Storage::disk($media->disk)->exists($media->path)) {
            Storage::disk($media->disk)->delete($media->path);
        }

        return $media->delete();
    }

    /**
     * Generate unique filename
     */
    protected function generateFilename(string $originalName, string $extension): string
    {
        $name = pathinfo($originalName, PATHINFO_FILENAME);

        return Str::slug($name).'-'.time().'.'.$extension;
    }

    /**
     * Process image (resize, crop, etc) using Intervention Image
     */
    protected function processImage(UploadedFile $file, string $path, string $disk, array $options): void
    {
        $image = $this->imageManager->read($file);

        // Resize
        if (isset($options['width']) || isset($options['height'])) {
            $width = $options['width'] ?? null;
            $height = $options['height'] ?? null;

            if (isset($options['crop']) && $options['crop']) {
                $image->cover($width, $height);
            } else {
                $image->scale(width: $width, height: $height);
            }
        }

        // Quality optimization
        $encoded = $image->toJpeg($options['quality'] ?? 80);

        Storage::disk($disk)->put($path, (string) $encoded);
    }

    /**
     * Get image meta-data
     */
    protected function getMeta(UploadedFile $file, array $options): array
    {
        $meta = $options['meta'] ?? [];

        if (str_starts_with($file->getMimeType(), 'image/')) {
            try {
                $size = getimagesize($file);
                $meta['width'] = $size[0] ?? null;
                $meta['height'] = $size[1] ?? null;
            } catch (\Exception $e) {
                // Ignore if not a valid image
            }
        }

        return $meta;
    }
}

<?php

namespace App\Http\Controllers;

use App\Services\SettingService;
use App\Services\FileUploadService;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct(
        protected SettingService $service,
        protected FileUploadService $fileUploadService
    ) {}

    /**
     * Display settings page
     */
    public function index()
    {
        $groupedSettings = $this->service->getAllGrouped();
        $settings = SettingService::class; // For class access in view if needed
        return view('pages.settings.index', compact('groupedSettings'));
    }

    /**
     * Update settings
     */
    public function update(Request $request)
    {
        $data = $request->except(['_token', 'app_logo', 'app_favicon']);
        
        // Handle image uploads
        if ($request->hasFile('app_logo')) {
            $media = $this->fileUploadService->upload($request->file('app_logo'), 'settings', 'public');
            $data['app_logo'] = $media->path;
        }

        if ($request->hasFile('app_favicon')) {
            $media = $this->fileUploadService->upload($request->file('app_favicon'), 'settings', 'public');
            $data['app_favicon'] = $media->path;
        }

        $this->service->updateMany($data);

        return redirect()->back()->with('success', 'Pengaturan berhasil diperbarui!');
    }

    /**
     * Clear settings cache
     */
    public function clearCache()
    {
        $this->service->clearCache();
        return redirect()->back()->with('success', 'Cache pengaturan berhasil dibersihkan!');
    }
}

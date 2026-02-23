<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Services\FileUploadService;

class ProfileController extends Controller
{
    public function __construct(
        protected FileUploadService $fileUploadService
    ) {}

    /**
     * Show personal profile
     */
    public function index()
    {
        $user = auth()->user();
        return view('pages.profile.index', compact('user'));
    }

    /**
     * Update profile info
     */
    public function update(\App\Http\Requests\ProfileRequest $request)
    {
        $user = auth()->user();
        
        $data = $request->validated();

        if ($request->hasFile('avatar')) {
            $media = $this->fileUploadService->upload($request->file('avatar'), 'avatars', options: [
                'width' => 300,
                'height' => 300,
                'crop' => true
            ]);
            $data['avatar'] = $media->path;
        }

        $user->update($data);

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }

    /**
     * Update password
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        auth()->user()->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Password berhasil diubah!');
    }
}

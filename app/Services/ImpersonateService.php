<?php

namespace App\Services;

use App\Interfaces\Repositories\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ImpersonateService
{
    /**
     * Nama session key untuk menyimpan ID Admin asli
     */
    protected const SESSION_KEY = 'impersonate_admin_id';

    public function __construct(
        protected UserRepositoryInterface $userRepository
    ) {}

    /**
     * Mulai proses penyamaran (Impersonate)
     */
    public function start(int $userId): bool
    {
        $admin = Auth::user();
        
        // Use Repository instead of direct Model access
        $userToImpersonate = $this->userRepository->find($userId);

        // Validasi: Pastikan Admin tidak meniru dirinya sendiri
        if ($admin->id === $userToImpersonate->id) {
            return false;
        }

        // Simpan ID Admin asli ke session
        Session::put(self::SESSION_KEY, $admin->id);

        // Login sebagai user target
        Auth::login($userToImpersonate);

        return true;
    }

    /**
     * Berhenti dari proses penyamaran dan kembali ke Admin asli
     */
    public function stop(): bool
    {
        if (!$this->isImpersonating()) {
            return false;
        }

        $adminId = Session::get(self::SESSION_KEY);
        
        // Use Repository instead of direct Model access
        $admin = $this->userRepository->find($adminId);

        // Logout user samaran & bersihkan session
        Auth::logout();
        Session::forget(self::SESSION_KEY);

        // Login kembali sebagai Admin asli
        Auth::login($admin);

        return true;
    }

    /**
     * Cek apakah user sedang dalam mode penyamaran
     */
    public function isImpersonating(): bool
    {
        return Session::has(self::SESSION_KEY);
    }

    /**
     * Ambil data Admin asli saat dalam mode penyamaran
     */
    public function getOriginalAdmin()
    {
        if (!$this->isImpersonating()) {
            return null;
        }

        return $this->userRepository->find(Session::get(self::SESSION_KEY));
    }
}

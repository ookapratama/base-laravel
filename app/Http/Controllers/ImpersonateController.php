<?php

namespace App\Http\Controllers;

use App\Services\ImpersonateService;
use App\Services\ActivityLogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ImpersonateController extends Controller
{
    public function __construct(
        protected ImpersonateService $impersonateService,
        protected ActivityLogService $activityLogService
    ) {}

    /**
     * Start impersonating a user
     */
    public function start(int $id)
    {
        // Security check: Only Super Admin and Admin can impersonate
        if (!auth()->user()->role || !in_array(auth()->user()->role->slug, ['super-admin'])) {
            abort(403, 'Akses ditolak.');
        }

        $userToImpersonate = \App\Models\User::findOrFail($id);
        $admin = auth()->user();

        if ($this->impersonateService->start($id)) {
            // Log the action
            $this->activityLogService->log(
                'impersonate_start',
                "Admin '{$admin->name}' mulai login sebagai '{$userToImpersonate->name}'",
                $userToImpersonate
            );

            return redirect()->route('dashboard')->with('success', "Anda sekarang login sebagai {$userToImpersonate->name}");
        }

        return redirect()->back()->with('error', 'Gagal melakukan impersonate.');
    }

    /**
     * Stop impersonating and return to original admin
     */
    public function stop()
    {
        $impersonatedUser = auth()->user();
        $admin = $this->impersonateService->getOriginalAdmin();

        if ($this->impersonateService->stop()) {
            // Log the action
            $this->activityLogService->log(
                'impersonate_stop',
                "Admin '{$admin->name}' berhenti login sebagai '{$impersonatedUser->name}'",
                $impersonatedUser
            );

            return redirect()->route('user.index')->with('success', 'Berhasil kembali ke akun Admin.');
        }

        return redirect()->back()->with('error', 'Gagal kembali ke akun Admin.');
    }
}

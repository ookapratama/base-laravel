<?php

namespace App\Http\Controllers;

use App\Services\ActivityLogService;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct(
        protected ActivityLogService $activityLogService
    ) {}

    public function showLogin()
    {
        return view('pages.authentications.auth-login-basic');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Log aktivitas login
            $this->activityLogService->logLogin();
            
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function showRegister()
    {
        // Check if registration is allowed
        if (get_setting('allow_registration', '1') !== '1') {
            return redirect()->route('login')->with('error', 'Registrasi saat ini sedang dinonaktifkan.');
        }

        return view('pages.authentications.auth-register-basic');
    }

    public function register(Request $request)
    {
        if (get_setting('allow_registration', '1') !== '1') {
            return redirect()->route('login')->with('error', 'Registrasi saat ini sedang dinonaktifkan.');
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'terms' => ['accepted'],
        ]);

        // Find Visitor Role
        $visitorRole = Role::where('slug', 'visitor')->first();
        if (!$visitorRole) {
            // Fallback to User role if visitor doesn't exist
            $visitorRole = Role::where('slug', 'user')->first();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $visitorRole ? $visitorRole->id : null,
        ]);

        Auth::login($user);

        // Log aktivitas register
        $this->activityLogService->log('register', 'User baru terdaftar sebagai Visitor', $user);

        return redirect()->intended('/')->with('success', 'Registrasi berhasil! Selamat datang di dashboard pengunjung.');
    }

    public function logout(Request $request)
    {
        // Log aktivitas logout sebelum logout
        $this->activityLogService->logLogout();
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}


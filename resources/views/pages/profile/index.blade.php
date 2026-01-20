@extends('layouts/layoutMaster')

@section('title', 'My Profile')

@section('content')
   <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4">
         <span class="text-muted fw-light">Sistem /</span> Profil Saya
      </h4>

      <div class="row">
         {{-- Profile Info --}}
         <div class="col-md-6">
            <div class="card mb-4">
               <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Informasi Pribadi</h5>
                  <i class="ri-user-settings-line ri-24px text-primary"></i>
               </div>
               <div class="card-body">
                  <form action="{{ route('profile.update') }}" method="POST">
                     @csrf
                     <div class="mb-4">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                     </div>
                     <div class="mb-4">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                     </div>
                     <div class="mb-4">
                        <label class="form-label">Role</label>
                        <input type="text" class="form-control" value="{{ $user->role->name ?? 'User' }}" disabled>
                        <small class="text-muted">Role tidak dapat diubah oleh user sendiri.</small>
                     </div>
                     <button type="submit" class="btn btn-primary">Simpan Profil</button>
                  </form>
               </div>
            </div>
         </div>

         {{-- Security / Password --}}
         <div class="col-md-6">
            <div class="card mb-4">
               <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Keamanan Akun</h5>
                  <i class="ri-lock-password-line ri-24px text-warning"></i>
               </div>
               <div class="card-body">
                  <form action="{{ route('profile.password.update') }}" method="POST">
                     @csrf
                     <div class="mb-4">
                        <label class="form-label">Password Saat Ini</label>
                        <input type="password" name="current_password" class="form-control" required>
                     </div>
                     <div class="mb-4">
                        <label class="form-label">Password Baru</label>
                        <input type="password" name="password" class="form-control" required>
                     </div>
                     <div class="mb-4">
                        <label class="form-label">Konfirmasi Password Baru</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                     </div>
                     <button type="submit" class="btn btn-warning">Ganti Password</button>
                  </form>
               </div>
            </div>

            <div class="card border-0 bg-label-secondary">
               <div class="card-body">
                  <div class="d-flex align-items-center mb-3">
                     <i class="ri-shield-check-line ri-32px text-success me-2"></i>
                     <h6 class="mb-0 fw-bold">Tips Keamanan</h6>
                  </div>
                  <p class="small mb-0">Pastikan password Anda minimal 8 karakter dengan kombinasi angka dan simbol untuk
                     perlindungan maksimal.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection

@extends('layouts/layoutMaster')

@section('title', 'Profil Saya')

@section('page-script')
   <script>
      document.addEventListener('DOMContentLoaded', function(e) {
         (function() {
            // Update/Reset user image of account page
            let accountUserImage = document.getElementById('uploadedAvatar');
            const fileInput = document.querySelector('.account-file-input'),
               resetFileInput = document.querySelector('.account-image-reset');

            if (accountUserImage) {
               const resetImage = accountUserImage.src;
               fileInput.onchange = () => {
                  if (fileInput.files[0]) {
                     accountUserImage.src = window.URL.createObjectURL(fileInput.files[0]);
                  }
               };
               resetFileInput.onclick = () => {
                  fileInput.value = '';
                  accountUserImage.src = resetImage;
               };
            }
         })();
      });
   </script>
@endsection

@section('content')
   <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4">
         <span class="text-muted fw-light">Pengaturan /</span> Akun
      </h4>

      <div class="row">
         <div class="col-md-12">
            <div class="card mb-4">
               <h5 class="card-header">Profil Detail</h5>
               <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <!-- Account -->
                  <div class="card-body">
                     <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                           src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('assets/img/avatars/1.png') }}"
                           alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                           <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                              <span class="d-none d-sm-block">Upload foto baru</span>
                              <i class="ri-upload-2-line d-block d-sm-none"></i>
                              <input type="file" id="upload" name="avatar" class="account-file-input" hidden
                                 accept="image/png, image/jpeg" />
                           </label>
                           <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                              <i class="ri-refresh-line d-block d-sm-none"></i>
                              <span class="d-none d-sm-block">Reset</span>
                           </button>

                           <p class="text-muted mb-0">Diizinkan JPG, GIF atau PNG. Ukuran maksimal 2MB</p>
                        </div>
                     </div>
                  </div>
                  <hr class="my-0">
                  <div class="card-body">
                     <div class="row">
                        <div class="mb-3 col-md-6">
                           <label for="name" class="form-label">Nama Lengkap</label>
                           <input class="form-control" type="text" id="name" name="name"
                              value="{{ old('name', $user->name) }}" autofocus />
                           @error('name')
                              <span class="text-danger small">{{ $message }}</span>
                           @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                           <label for="email" class="form-label">E-mail</label>
                           <input class="form-control" type="text" id="email" name="email"
                              value="{{ old('email', $user->email) }}" placeholder="john.doe@example.com" />
                           @error('email')
                              <span class="text-danger small">{{ $message }}</span>
                           @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                           <label class="form-label">Role</label>
                           <input class="form-control" type="text" value="{{ $user->role->name ?? 'User' }}" disabled />
                        </div>
                     </div>
                     <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
                        <button type="reset" class="btn btn-outline-secondary">Batal</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>

         <!-- Password Change Card -->
         <div class="col-md-12">
            <div class="card mb-4">
               <h5 class="card-header">Ganti Password</h5>
               <div class="card-body">
                  <form action="{{ route('profile.password.update') }}" method="POST">
                     @csrf
                     <div class="row">
                        <div class="mb-3 col-md-6 form-password-toggle">
                           <label class="form-label" for="current_password">Password Saat Ini</label>
                           <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                 <input class="form-control" type="password" name="current_password" id="current_password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                 <label for="current_password">Password Saat Ini</label>
                              </div>
                              <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line"></i></span>
                           </div>
                           @error('current_password')
                              <span class="text-danger small">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row">
                        <div class="mb-3 col-md-6 form-password-toggle">
                           <label class="form-label" for="password">Password Baru</label>
                           <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                 <input class="form-control" type="password" id="password" name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                 <label for="password">Password Baru</label>
                              </div>
                              <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line"></i></span>
                           </div>
                           @error('password')
                              <span class="text-danger small">{{ $message }}</span>
                           @enderror
                        </div>
                        <div class="mb-3 col-md-6 form-password-toggle">
                           <label class="form-label" for="password_confirmation">Konfirmasi Password Baru</label>
                           <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                 <input class="form-control" type="password" name="password_confirmation"
                                    id="password_confirmation"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                 <label for="password_confirmation">Konfirmasi Password Baru</label>
                              </div>
                              <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line"></i></span>
                           </div>
                        </div>
                     </div>
                     <div class="mt-2">
                        <button type="submit" class="btn btn-warning me-2">Update Password</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection

@php
   $configData = Helper::appClasses();
   $customizerHidden = 'customizer-hide';
   $pageConfigs = ['myLayout' => 'blank'];
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Register Basic - Pages')

@section('vendor-style')
   @vite(['resources/assets/vendor/libs/@form-validation/form-validation.scss'])
@endsection

@section('page-style')
   @vite(['resources/assets/vendor/scss/pages/page-auth.scss'])
@endsection

@section('vendor-script')
   @vite(['resources/assets/vendor/libs/@form-validation/popular.js', 'resources/assets/vendor/libs/@form-validation/bootstrap5.js', 'resources/assets/vendor/libs/@form-validation/auto-focus.js'])
@endsection

@section('page-script')
   @vite(['resources/assets/js/pages-auth.js'])
@endsection

@section('content')
   <div class="position-relative">
      <div class="authentication-wrapper authentication-basic container-p-y p-4 p-sm-0">
         <div class="authentication-inner py-6">

            <!-- Register Card -->
            <div class="card p-md-7 p-1">
               <!-- Logo -->
               <div class="app-brand justify-content-center mt-5">
                  <a href="{{ url('/') }}" class="app-brand-link gap-2">
                     <span class="app-brand-logo demo">
                        @if (get_setting('app_logo'))
                           <img src="{{ asset('storage/' . get_setting('app_logo')) }}" alt="Logo" height="30">
                        @else
                           @include('_partials.macros', ['width' => 25, 'withbg' => 'var(--bs-primary)'])
                        @endif
                     </span>
                     <span
                        class="app-brand-text demo text-heading fw-semibold">{{ get_setting('app_name', config('variables.templateName')) }}</span>
                  </a>
               </div>
               <!-- /Logo -->
               <div class="card-body mt-1">
                  <h4 class="mb-1">Adventure starts here 🚀</h4>
                  <p class="mb-5">Daftar sekarang untuk melihat demo fitur secara langsung!</p>

                  <form id="formAuthentication" class="mb-5" action="{{ route('register') }}" method="POST">
                     @csrf
                     <div class="form-floating form-floating-outline mb-5">
                        <input type="text" class="form-control" id="name" name="name"
                           value="{{ old('name') }}" placeholder="Masukkan nama lengkap" autofocus>
                        <label for="name">Nama Lengkap</label>
                        @error('name')
                           <span class="text-danger small">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-floating form-floating-outline mb-5">
                        <input type="text" class="form-control" id="email" name="email"
                           value="{{ old('email') }}" placeholder="nama@email.com">
                        <label for="email">Email</label>
                        @error('email')
                           <span class="text-danger small">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="mb-5 form-password-toggle">
                        <div class="input-group input-group-merge">
                           <div class="form-floating form-floating-outline">
                              <input type="password" id="password" class="form-control" name="password"
                                 placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                 aria-describedby="password" />
                              <label for="password">Password</label>
                           </div>
                           <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line"></i></span>
                        </div>
                        @error('password')
                           <span class="text-danger small">{{ $message }}</span>
                        @enderror
                     </div>

                     <div class="mb-5 form-password-toggle">
                        <div class="input-group input-group-merge">
                           <div class="form-floating form-floating-outline">
                              <input type="password" id="password_confirmation" class="form-control"
                                 name="password_confirmation"
                                 placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                              <label for="password_confirmation">Konfirmasi Password</label>
                           </div>
                           <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line"></i></span>
                        </div>
                     </div>

                     <div class="mb-5">
                        <div class="form-check mt-2">
                           <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                           <label class="form-check-label" for="terms-conditions">
                              Saya setuju dengan
                              <a href="javascript:void(0);">kebijakan privasi & ketentuan</a>
                           </label>
                        </div>
                        @error('terms')
                           <span class="text-danger small">{{ $message }}</span>
                        @enderror
                     </div>
                     <button class="btn btn-primary d-grid w-100">
                        Daftar Sebagai Pengunjung
                     </button>
                  </form>

                  <p class="text-center">
                     <span>Sudah memiliki akun?</span>
                     <a href="{{ route('login') }}">
                        <span>Masuk Sekarang</span>
                     </a>
                  </p>

                  <div class="divider my-5">
                     <div class="divider-text">atau daftar via</div>
                  </div>

                  <div class="d-flex justify-content-center gap-2">
                     <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-facebook">
                        <i class="tf-icons ri-facebook-fill"></i>
                     </a>

                     <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-twitter">
                        <i class="tf-icons ri-twitter-fill"></i>
                     </a>

                     <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-github">
                        <i class="tf-icons ri-github-fill"></i>
                     </a>

                     <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-google-plus">
                        <i class="tf-icons ri-google-fill"></i>
                     </a>
                  </div>
               </div>
            </div>
            <!-- Register Card -->
            <img alt="mask"
               src="{{ asset('assets/img/illustrations/auth-basic-register-mask-' . $configData['style'] . '.png') }}"
               class="authentication-image d-none d-lg-block"
               data-app-light-img="illustrations/auth-basic-register-mask-light.png"
               data-app-dark-img="illustrations/auth-basic-register-mask-dark.png" />
         </div>
      </div>
   </div>
@endsection

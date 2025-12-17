@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Login Basic - Pages')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/@form-validation/form-validation.scss'
])
@endsection

@section('page-style')
@vite([
  'resources/assets/vendor/scss/pages/page-auth.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/pages-auth.js'
])
@endsection

@section('content')
<div class="position-relative">
  <div class="authentication-wrapper authentication-basic container-p-y p-4 p-sm-0">
    <div class="authentication-inner py-6">

      <!-- Login -->
      <div class="card p-md-7 p-1">
        <!-- Logo -->
        <div class="app-brand justify-content-center mt-5">
          <a href="{{url('/')}}" class="app-brand-link gap-2">
            <span class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'var(--bs-primary)'])</span>
            <span class="app-brand-text demo text-heading fw-semibold">{{config('variables.templateName')}}</span>
          </a>
        </div>
        <!-- /Logo -->

        <div class="card-body mt-1">
          <h4 class="mb-1">Welcome to {{config('variables.templateName')}}! 👋</h4>
          <p class="mb-5">Please sign-in to your account and start the adventure</p>

          <form id="formAuthentication" class="mb-5" action="{{url('/')}}" method="GET">
            <div class="form-floating form-floating-outline mb-5">
              <input type="text" class="form-control" id="email" name="email-username" placeholder="Enter your email or username" autofocus>
              <label for="email">Email or Username</label>
            </div>
            <div class="mb-5">
              <div class="form-password-toggle">
                <div class="input-group input-group-merge">
                  <div class="form-floating form-floating-outline">
                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                    <label for="password">Password</label>
                  </div>
                  <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line"></i></span>
                </div>
              </div>
            </div>
            <div class="mb-5 d-flex justify-content-between mt-5">
              <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">
                  Remember Me
                </label>
              </div>
              <a href="{{url('auth/forgot-password-basic')}}" class="float-end mb-1 mt-2">
                <span>Forgot Password?</span>
              </a>
            </div>
            <div class="mb-5">
              <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
            </div>
          </form>

          <p class="text-center">
            <span>New on our platform?</span>
            <a href="{{url('auth/register-basic')}}">
              <span>Create an account</span>
            </a>
          </p>

          <div class="divider my-5">
            <div class="divider-text">or</div>
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
      <!-- /Login -->
      <img alt="mask" src="{{asset('assets/img/illustrations/auth-basic-login-mask-'.$configData['style'].'.png') }}" class="authentication-image d-none d-lg-block" data-app-light-img="illustrations/auth-basic-login-mask-light.png" data-app-dark-img="illustrations/auth-basic-login-mask-dark.png" />
    </div>
  </div>
</div>
@endsection

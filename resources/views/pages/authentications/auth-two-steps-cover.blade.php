@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Two Steps Verifications Cover - Pages')

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
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/pages-auth.js',
  'resources/assets/js/pages-auth-two-steps.js'
])
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover">
  <!-- Logo -->
  <a href="{{url('/')}}" class="auth-cover-brand d-flex align-items-center gap-2">
    <span class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'var(--bs-primary)'])</span>
    <span class="app-brand-text demo text-heading fw-semibold">{{config('variables.templateName')}}</span>
  </a>
  <!-- /Logo -->
  <div class="authentication-inner row m-0">

    <!-- /Left Section -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center p-12 pb-2">
      <img src="{{asset('assets/img/illustrations/auth-two-steps-illustration-'.$configData['style'].'.png') }}" class="auth-cover-illustration w-100" alt="auth-illustration" data-app-light-img="illustrations/auth-two-steps-illustration-light.png" data-app-dark-img="illustrations/auth-two-steps-illustration-dark.png" />
      <img src="{{asset('assets/img/illustrations/auth-cover-register-mask-'.$configData['style'].'.png') }}" class="authentication-image" alt="mask" data-app-light-img="illustrations/auth-cover-register-mask-light.png" data-app-dark-img="illustrations/auth-cover-register-mask-dark.png" />
    </div>
    <!-- /Left Section -->

    <!-- Two Steps Verification -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-12 px-12 py-6">
      <div class="w-px-400 mx-auto pt-5 pt-lg-0">

        <h4 class="mb-1">Two Step Verification 💬</h4>
        <p class="text-start mb-6">
          We sent a verification code to your mobile. Enter the code from the mobile in the field below.
          <span class="fw-medium d-block mt-1 h6">******1234</span>
        </p>
        <p class="mb-0 fw-medium">Type your 6 digit security code</p>
        <form id="twoStepsForm" action="{{url('/')}}" method="GET">
          <div class="mb-3">
            <div class="auth-input-wrapper d-flex align-items-center justify-content-between numeral-mask-wrapper">
              <input type="tel" class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 my-2" maxlength="1" autofocus>
              <input type="tel" class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 my-2" maxlength="1">
              <input type="tel" class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 my-2" maxlength="1">
              <input type="tel" class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 my-2" maxlength="1">
              <input type="tel" class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 my-2" maxlength="1">
              <input type="tel" class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 my-2" maxlength="1">
            </div>
            <!-- Create a hidden field which is combined by 3 fields above -->
            <input type="hidden" name="otp" />
          </div>
          <button class="btn btn-primary d-grid w-100 mb-5">
            Verify my account
          </button>
          <div class="text-center">Didn't get the code?
            <a href="javascript:void(0);">
              Resend
            </a>
          </div>
        </form>
      </div>
    </div>
    <!-- /Two Steps Verification -->
  </div>
</div>
@endsection

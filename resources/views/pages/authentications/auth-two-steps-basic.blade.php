@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Two Steps Verifications Basic - Pages')

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
<div class="positive-relative">
  <div class="authentication-wrapper authentication-basic p-4 p-sm-0">
    <div class="authentication-inner py-6">

      <!--  Two Steps Verification -->
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
          <h4 class="mb-1">Two Step Verification 💬</h4>
          <p class="text-start mb-5">
            We sent a verification code to your mobile. Enter the code from the mobile in the field below.
            <span class="d-block mt-1 h6">******1234</span>
          </p>
          <p class="mb-0">Type your 6 digit security code</p>
          <form id="twoStepsForm" action="{{url('/')}}" method="GET">
            <div class="mb-3">
              <div class="auth-input-wrapper d-flex align-items-center justify-content-between numeral-mask-wrapper">
                <input type="tel" class="form-control auth-input text-center numeral-mask h-px-50 mx-sm-1 my-2" maxlength="1" autofocus>
                <input type="tel" class="form-control auth-input text-center numeral-mask h-px-50 mx-sm-1 my-2" maxlength="1">
                <input type="tel" class="form-control auth-input text-center numeral-mask h-px-50 mx-sm-1 my-2" maxlength="1">
                <input type="tel" class="form-control auth-input text-center numeral-mask h-px-50 mx-sm-1 my-2" maxlength="1">
                <input type="tel" class="form-control auth-input text-center numeral-mask h-px-50 mx-sm-1 my-2" maxlength="1">
                <input type="tel" class="form-control auth-input text-center numeral-mask h-px-50 mx-sm-1 my-2" maxlength="1">
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
      <!-- / Two Steps Verification -->
      <img alt="mask" src="{{asset('assets/img/illustrations/auth-basic-register-mask-'.$configData['style'].'.png') }}" class="authentication-image d-none d-lg-block" data-app-light-img="illustrations/auth-basic-register-mask-light.png" data-app-dark-img="illustrations/auth-basic-register-mask-dark.png" />
    </div>
  </div>
</div>
@endsection

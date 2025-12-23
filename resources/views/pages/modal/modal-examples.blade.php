@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Modals - UI elements')

<!-- Vendor Styles -->
@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/tagify/tagify.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  'resources/assets/vendor/libs/bs-stepper/bs-stepper.scss'
])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/cleavejs/cleave-phone.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/tagify/tagify.js',
  'resources/assets/vendor/libs/bs-stepper/bs-stepper.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js'
])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite([
  'resources/assets/js/pages-pricing.js',
  'resources/assets/js/modal-create-app.js',
  'resources/assets/js/modal-add-new-cc.js',
  'resources/assets/js/modal-add-new-address.js',
  'resources/assets/js/modal-edit-user.js',
  'resources/assets/js/modal-enable-otp.js',
  'resources/assets/js/modal-share-project.js',
  'resources/assets/js/modal-two-factor-auth.js'
])
@endsection

@section('content')
<div class="row">
  <!--  Pricing -->
  <div class="col-12 col-sm-6 col-lg-4 mb-6">
    <div class="card">
      <div class="card-body text-center">
        <i class='ri-36px ri-money-dollar-circle-line text-heading'></i>
        <h5 class="mt-4 fw-medium">Pricing</h5>
        <p> Elegant pricing options modal popup example, easy to use in any page.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricingModal"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Pricing -->

  <!--  Add New Credit Card -->
  <div class="col-12 col-sm-6 col-lg-4 mb-6">
    <div class="card">
      <div class="card-body text-center">
        <i class='ri-36px ri-bank-card-line text-heading'></i>
        <h5 class="mt-4 fw-medium">Add New Credit Card</h5>
        <p> Quickly collect the credit card details, built in input mask and form validation support.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Add New Credit Card -->

  <!--  Add New Address -->
  <div class="col-12 col-sm-6 col-lg-4 mb-6">
    <div class="card">
      <div class="card-body text-center">
        <i class='ri-36px ri-home-3-line text-heading'></i>
        <h5 class="mt-4 fw-medium">Add New Address</h5>
        <p> Ready to use form to collect user address data with validation and custom input support.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewAddress"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Add New Address -->

  <!--  Refer & Earn -->
  <div class="col-12 col-sm-6 col-lg-4 mb-6">
    <div class="card">
      <div class="card-body text-center">
        <i class='ri-36px ri-gift-line text-heading'></i>
        <h5 class="mt-4 fw-medium">Refer & Earn</h5>
        <p>Use Refer & Earn modal to encourage your exiting customers refer their friends & colleague.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#referAndEarn"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Refer & Earn -->

  <!--  Edit User -->
  <div class="col-12 col-sm-6 col-lg-4 mb-6">
    <div class="card">
      <div class="card-body text-center">
        <i class='ri-36px ri-user-line text-heading'></i>
        <h5 class="mt-4 fw-medium">Edit User</h5>
        <p>Easily update the user data on the go, built in form validation and custom controls.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Edit User -->

  <!--  Enable OTP -->
  <div class="col-12 col-sm-6 col-lg-4 mb-6">
    <div class="card">
      <div class="card-body text-center">
        <i class='ri-36px ri-smartphone-line text-heading'></i>
        <h5 class="mt-4 fw-medium">Enable OTP</h5>
        <p>Use this modal to enhance your application security by enabling authentication with OTP.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enableOTP"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Enable OTP -->

  <!--  Share Project -->
  <div class="col-12 col-sm-6 col-lg-4 mb-6">
    <div class="card">
      <div class="card-body text-center">
        <i class='ri-36px ri-file-pdf-line text-heading'></i>
        <h5 class="mt-4 fw-medium">Share Project</h5>
        <p>Elegant Share Project options modal popup example, easy to use in any page.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shareProject"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Share Project -->

  <!--  Create App -->
  <div class="col-12 col-sm-6 col-lg-4 mb-6">
    <div class="card">
      <div class="card-body text-center">
        <i class='ri-36px ri-box-3-line text-heading'></i>
        <h5 class="mt-4 fw-medium">Create App</h5>
        <p>Provide application data with this form to create your app, easy to use in page.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createApp"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Create App -->

  <!--  Two Factor Auth -->
  <div class="col-12 col-sm-6 col-lg-4 mb-6">
    <div class="card">
      <div class="card-body text-center">
        <i class="ri-lock-line ri-36px text-heading"></i>
        <h5 class="mt-4 fw-medium">Two Factor Auth</h5>
        <p>Enhance your application security by enabling two factor authentication.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#twoFactorAuth"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Two Factor Auth -->

  <!--  Payment providers -->
  <div class="col-12 col-sm-6 col-lg-4 mb-6 mb-sm-0">
    <div class="card">
      <div class="card-body text-center">
        <i class="mb-4 ri-bank-card-line ri-36px text-heading"></i>
        <h5>Payment providers</h5>
        <p>Elegant payment options modal popup example, easy to use in any page.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentProvider"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Payment providers -->

  <!--  Payment methods -->
  <div class="col-12 col-sm-6 col-lg-4">
    <div class="card">
      <div class="card-body text-center">
        <i class="mb-4 ri-bank-card-2-line ri-36px text-heading"></i>
        <h5>Add Payment Method</h5>
        <p>Elegant payment methods modal popup example, easy to use in any page.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentMethods"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Payment methods -->
</div>

<!-- All Modals -->
@include('_partials/_modals/modal-pricing')
@include('_partials/_modals/modal-add-new-cc')
@include('_partials/_modals/modal-add-new-address')
@include('_partials/_modals/modal-refer-earn')
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-enable-otp')
@include('_partials/_modals/modal-share-project')
@include('_partials/_modals/modal-create-app')
@include('_partials/_modals/modal-two-factor-auth')
@include('_partials/_modals/modal-select-payment-providers')
@include('_partials/_modals/modal-select-payment-methods')
@endsection

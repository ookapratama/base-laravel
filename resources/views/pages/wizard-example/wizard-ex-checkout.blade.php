@extends('layouts/layoutMaster')

@section('title', 'Checkout - Wizard Examples')

<!-- Vendor Style -->
@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/bs-stepper/bs-stepper.scss',
  'resources/assets/vendor/libs/rateyo/rateyo.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss'
])
@endsection

<!-- Vendor Script -->
@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/bs-stepper/bs-stepper.js',
  'resources/assets/vendor/libs/rateyo/rateyo.js',
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/cleavejs/cleave-phone.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js'
])
@endsection

<!-- Page Style -->
@section('page-style')
@vite([
  'resources/assets/vendor/scss/pages/wizard-ex-checkout.scss'
])
@endsection

<!-- Page Script -->
@section('page-script')
@vite([
  'resources/assets/js/modal-add-new-address.js',
  'resources/assets/js/wizard-ex-checkout.js'
])
@endsection

@section('content')

@include('_partials/wizard-ex-checkout')

<!-- Add new address modal -->
@include('_partials/_modals/modal-add-new-address')
@endsection

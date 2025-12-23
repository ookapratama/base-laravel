@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Not Authorized - Pages')

@section('page-style')
<!-- Page -->
@vite(['resources/assets/vendor/scss/pages/page-misc.scss'])
@endsection


@section('content')
<!-- Not Authorized -->
<div class="misc-wrapper">
  <h1 class="mb-2 mx-2" style="font-size: 6rem;line-height: 6rem;">401</h1>
  <h4 class="mb-2">You are not authorized! 🔐</h4>
  <p class="mb-3 mx-2">You don’t have permission to access this page. Go Home!</p>
  <div class="d-flex justify-content-center mt-12">
    <img src="{{ asset('assets/img/illustrations/misc-not-authorized-object.png')}}" alt="misc-not-authorized" class="img-fluid misc-object d-none d-lg-inline-block" width="190">
    <img src="{{ asset('assets/img/illustrations/misc-bg-'.$configData['style'].'.png') }}" alt="misc-not-authorized" class="misc-bg d-none d-lg-inline-block" data-app-light-img="illustrations/misc-bg-light.png" data-app-dark-img="illustrations/misc-bg-dark.png">
    <div class="d-flex flex-column align-items-center">
      <img src="{{ asset('assets/img/illustrations/misc-not-authorized-illustration.png')}}" alt="misc-not-authorized" class="img-fluid z-1" width="160">
      <div>
        <a href="{{url('/')}}" class="btn btn-primary text-center my-10">Back to home</a>
      </div>
    </div>
  </div>
</div>
<!-- /Not Authorized -->
@endsection

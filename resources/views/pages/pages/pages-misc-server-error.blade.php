@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Server Error - Pages')

@section('page-style')
<!-- Page -->
@vite(['resources/assets/vendor/scss/pages/page-misc.scss'])
@endsection


@section('content')
<!-- Server Error -->
<div class="misc-wrapper">
  <h1 class="mb-2 mx-2" style="font-size: 6rem;line-height: 6rem;">500</h1>
  <h4 class="mb-2">Internal server error 🔐</h4>
  <p class="mb-3 mx-2">Oops somthing went wrong.</p>
  <div class="d-flex justify-content-center mt-12">
    <img src="{{ asset('assets/img/illustrations/misc-error-object.png')}}" alt="misc-server-error" class="img-fluid misc-object d-none d-lg-inline-block" width="160">
    <img src="{{ asset('assets/img/illustrations/misc-bg-'.$configData['style'].'.png') }}" alt="misc-server-error" class="misc-bg d-none d-lg-inline-block z-n1" data-app-light-img="illustrations/misc-bg-light.png" data-app-dark-img="illustrations/misc-bg-dark.png">
    <div class="d-flex flex-column align-items-center">
      <img src="{{ asset('assets/img/illustrations/misc-server-error-illustration.png')}}" alt="misc-server-error" class="img-fluid z-1" width="230">
      <div>
        <a href="{{url('/')}}" class="btn btn-primary text-center my-10">Back to home</a>
      </div>
    </div>
  </div>
</div>
<!-- /Server Error -->
@endsection

@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Under Maintenance - Pages')

@section('page-style')
<!-- Page -->
@vite(['resources/assets/vendor/scss/pages/page-misc.scss'])
@endsection

@section('content')
<!--Under Maintenance -->
<div class="misc-wrapper">
  <h4 class="mb-2 mx-2">Under Maintenance! 🚧</h4>
  <p class="mb-6 mx-sm-2 text-center">Sorry for the inconvenience but we're performing some maintenance at the moment</p>
  <div class="d-flex justify-content-center mt-9">
    <img src="{{ asset('assets/img/illustrations/misc-under-maintenance-object.png') }}" alt="misc-under-maintenance" class="img-fluid misc-object d-none d-lg-inline-block" width="170">
    <img src="{{ asset('assets/img/illustrations/misc-bg-'.$configData['style'].'.png') }}" alt="misc-under-maintenance" class="misc-bg d-none d-lg-inline-block" data-app-light-img="illustrations/misc-bg-light.png" data-app-dark-img="illustrations/misc-bg-dark.png">
    <div class="d-flex flex-column align-items-center">
      <img src="{{ asset('assets/img/illustrations/misc-under-maintenance-illustration.png') }}" alt="misc-under-maintenance" class="img-fluid z-1" width="290">
      <div>
        <a href="{{url('/')}}" class="btn btn-primary text-center my-10">Back to home</a>
      </div>
    </div>
  </div>
</div>
<!-- /Under Maintenance -->
@endsection

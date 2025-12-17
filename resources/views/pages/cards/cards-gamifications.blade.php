@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Cards Gamifications- UI elements')

@section('content')
<div class="row g-6">
  <div class="col-md-12 col-lg-4">
    <div class="card">
      <div class="card-body text-nowrap">
        <h5 class="card-title mb-1">Congratulations <span class="fw-bold">Norris!</span> 🎉</h5>
        <p class="card-subtitle mb-3">Best seller of the month</p>
        <h4 class="text-primary mb-1">$42.8k</h4>
        <p class="mb-3">78% of target 🚀</p>
        <a href="javascript:;" class="btn btn-sm btn-primary">View Sales</a>
      </div>
      <img src="{{asset('assets/img/illustrations/trophy.png')}}" class="position-absolute bottom-0 end-0 me-4" height="140" alt="view sales">
    </div>
  </div>

  <div class="col-md-12 col-lg-8">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-md-6 order-2 order-md-1">
          <div class="card-body">
            <h4 class="card-title mb-4">Congratulations <span class="fw-bold">John!</span> 🎉</h4>
            <p class="mb-0">You have done 68% 😎 more sales today.</p>
            <p>Check your new badge in your profile.</p>
            <a href="javascript:;" class="btn btn-primary">View Profile</a>
          </div>
        </div>
        <div class="col-md-6 text-center text-md-end order-1 order-md-2">
          <div class="card-body pb-0 px-0 pt-1_5">
            <img src="{{asset('assets/img/illustrations/illustration-john-'.$configData['style'].'.png')}}" height="186" class="scaleX-n1-rtl" alt="View Profile" data-app-light-img="illustrations/illustration-john-light.png" data-app-dark-img="illustrations/illustration-john-dark.png">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-8 col-12">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-md-6">
          <div class="card-body">
            <h4 class="card-title mb-4">Congratulations <span class="fw-bold">Daisy!</span> 🎉</h4>
            <p class="mb-0">You have done 84% 😍 more task today.</p>
            <p>Check your new badge in your profile.</p>
            <a href="javascript:;" class="btn btn-primary">View Profile</a>
          </div>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <div class="card-body pb-0 px-0 pt-1_5">
            <img src="{{asset('assets/img/illustrations/illustration-daisy-'.$configData['style'].'.png')}}" height="186" alt="View Profile" data-app-light-img="illustrations/illustration-daisy-light.png" data-app-dark-img="illustrations/illustration-daisy-dark.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title mb-1">Upgrade Account 😀</h5>
        <p class="card-subtitle mb-3">Add 15 team members</p>
        <h4 class="text-primary mb-0">$199</h4>
        <p class="mb-3">40% OFF 😍</p>
        <a href="javascript:;" class="btn btn-sm btn-primary">Upgrade Plan</a>
      </div>
      <img src="{{asset('assets/img/illustrations/illustration-upgrade-account.png')}}" class="scaleX-n1-rtl position-absolute bottom-0 end-0 me-4 mb-4" height="162" alt="Upgrade Account">
    </div>
  </div>
</div>
@endsection

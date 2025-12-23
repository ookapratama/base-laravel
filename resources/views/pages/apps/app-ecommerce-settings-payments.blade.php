@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'eCommerce Settings Store Payments - Apps')

@section('page-script')
@vite('resources/assets/js/app-ecommerce-settings.js')
@endsection

@section('content')
<div class="row gx-6">
  <!-- Navigation -->
  <div class="col-12 col-lg-4">
    <div class="d-flex justify-content-between flex-column mb-4 mb-md-0">
      <h5 class="mb-4">Getting Started</h5>
      <ul class="nav nav-align-left nav-pills flex-column">
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/details')}}">
            <i class="ri-store-2-line me-2"></i>
            <span class="align-middle">Store details</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link active" href="javascript:void(0);">
            <i class="ri-bank-card-line me-2"></i>
            <span class="align-middle">Payments</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/checkout')}}">
            <i class="ri-shopping-cart-line me-2"></i>
            <span class="align-middle">Checkout</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/shipping')}}">
            <i class="ri-car-line me-2"></i>
            <span class="align-middle">Shipping & delivery</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/locations')}}">
            <i class="ri-map-pin-2-line me-2"></i>
            <span class="align-middle">Locations</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/notifications')}}">
            <i class="ri-notification-4-line me-2"></i>
            <span class="align-middle">Notifications</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- /Navigation -->
  <!-- Options -->
  <div class="col-12 col-lg-8 pt-6 pt-lg-0">
    <div class="tab-content p-0">
      <!-- Payments Tab -->
      <div class="tab-pane fade show active" id="payments" role="tabpanel">
        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-title m-0">Payment providers</h5>
          </div>
          <div class="card-body">
            <p class="mb-5">Providers that enable you to accept payment methods at a rate set by the third-party.<br>
              An additional fee will apply to new orders once you select a plan</p>
            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#paymentProvider">Choose a provider</button>
          </div>
        </div>
        <div class="card mb-6">
          <div class="card-header">
            <div class="card-title m-0">
              <h5 class="m-0">Supported payment methods</h5>
              <p class="card-subtitle mt-0">Payment methods that are available with one of Vuexy's approved payment providers.</p>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-5">Default</h6>
            <div class="bg-lighter p-5 rounded-4 mb-5">
              <div class="d-flex justify-content-between align-items-center">
                <img src="{{asset('assets/img/icons/payments/paypal.png')}}" alt="Paypal" width="57" height="37">
                <span class="fw-medium"><a href="javascript:void(0);">Activate Paypal</a></span>
              </div>
              <hr class="my-6">
              <div class="d-flex justify-content-between align-items-center">
                <div class="text-left w-25">
                  <p class="mb-2 small">Provider</p>
                  <h6 class="mb-0">Paypal</h6>
                </div>
                <div class="text-left w-25">
                  <p class="mb-2 small">Status</p>
                  <small class="badge bg-label-warning rounded-pill fw-normal">Inactive</small>
                </div>
                <div class="text-left w-25">
                  <p class="mb-2 small">Transaction Fee</p>
                  <h6 class="mb-0">2.99%</h6>
                </div>
              </div>
            </div>
            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#paymentMethods">Add payment methods</button>
          </div>
        </div>
        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-title m-0">Manual payment methods</h5>
          </div>
          <div class="card-body">
            <p class="mb-5">Payments that are made outside your online store. When a customer selects a manual payment method such as cash on delivery. You'll need to approve their order before it can be fulfilled.</p>
            <div class="btn-group">
              <button type="button" class="btn btn-outline-primary">Add manual payment method</button>
              <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:void(0);">Create custom payment method</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Bank deposit</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Money order</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Cash on delivery (COD)</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-end gap-4">
          <button type="reset" class="btn btn-outline-secondary">Discard</button>
          <a class="btn btn-primary" href="checkout">Save Changes</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /Options-->
</div>

@include('_partials/_modals/modal-select-payment-providers')
@include('_partials/_modals/modal-select-payment-methods')

@endsection

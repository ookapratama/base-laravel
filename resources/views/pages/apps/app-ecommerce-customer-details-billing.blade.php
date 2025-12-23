@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'eCommerce Customer Details Address & Billing - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/tagify/tagify.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.js',
  'resources/assets/vendor/libs/tagify/tagify.js',
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/cleavejs/cleave-phone.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/modal-edit-user.js',
  'resources/assets/js/modal-edit-cc.js',
  'resources/assets/js/modal-add-new-cc.js',
  'resources/assets/js/modal-add-new-address.js',
  'resources/assets/js/app-ecommerce-customer-detail.js',
])
@endsection

@section('content')
<div class="d-flex flex-column flex-sm-row align-items-center justify-content-sm-between mb-6 text-center text-sm-start gap-2">
  <div class="mb-2 mb-sm-0">
    <h4 class="mb-1">
      Customer ID #634759
    </h4>
    <p class="mb-0">
      Aug 17, 2020, 5:48 (ET)
    </p>
  </div>
  <button type="button" class="btn btn-outline-danger delete-customer">Delete Customer</button>
</div>


<div class="row">
  <!-- Customer-detail Sidebar -->
  <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- Customer-detail Card -->
    <div class="card mb-6">
      <div class="card-body pt-12">
        <div class="customer-avatar-section">
          <div class="d-flex align-items-center flex-column">
            <img class="img-fluid rounded-3 mb-4" src="{{asset('assets/img/avatars/1.png')}}" height="120" width="120" alt="User avatar" />
            <div class="customer-info text-center mb-6">
              <h5 class="mb-0">Lorine Hischke</h5>
              <span>Customer ID #634759</span>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-around flex-wrap mb-6 gap-4 gap-md-3 gap-lg-4">
          <div class="d-flex align-items-center gap-4 me-5">
            <div class="avatar">
              <div class="avatar-initial rounded-3 bg-label-primary"><i class='ri-shopping-cart-line ri-24px'></i>
              </div>
            </div>
            <div>
              <h5 class="mb-0">184</h5>
              <span>Orders</span>
            </div>
          </div>
          <div class="d-flex align-items-center gap-4">
            <div class="avatar">
              <div class="avatar-initial rounded-3 bg-label-primary"><i class='ri-money-dollar-circle-line ri-24px'></i>
              </div>
            </div>
            <div>
              <h5 class="mb-0">$12,378</h5>
              <span>Spent</span>
            </div>
          </div>
        </div>

        <div class="info-container">
          <h5 class="border-bottom text-capitalize pb-4 mt-6 mb-4">Details</h5>
          <ul class="list-unstyled mb-6">
            <li class="mb-2">
              <span class="h6 me-1">Username:</span>
              <span>lorine.hischke</span>
            </li>
            <li class="mb-2">
              <span class="h6 me-1">Email:</span>
              <span>vafgot@vultukir.org</span>
            </li>
            <li class="mb-2">
              <span class="h6 me-1">Status:</span>
              <span class="badge bg-label-success rounded-pill">Active</span>
            </li>
            <li class="mb-2">
              <span class="h6 me-1">Contact:</span>
              <span>(123) 456-7890</span>
            </li>

            <li class="mb-2">
              <span class="h6 me-1">Country:</span>
              <span>USA</span>
            </li>
          </ul>
          <div class="d-flex justify-content-center">
            <a href="javascript:;" class="btn btn-primary w-100" data-bs-target="#editUser" data-bs-toggle="modal">Edit Details</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Customer-detail Card -->
    <!-- Plan Card -->

    <div class="card bg-primary">
      <div class="card-body">
        <div class="row justify-content-between mb-4">
          <div class="col-md-12 col-lg-7 col-xl-12 col-xxl-7 text-center text-lg-start text-xl-center text-xxl-start order-1  order-lg-0 order-xl-1 order-xxl-0">
            <h5 class="card-title text-white text-nowrap mb-4">Upgrade to premium</h5>
            <p class="card-text text-white">Upgrade customer to premium membership to access pro features.</p>
          </div>
          <span class="col-md-12 col-lg-5 col-xl-12 col-xxl-5 text-center text-lg-end text-xl-center text-xxl-end mx-auto mx-md-0 mb-2"><img src="{{asset('assets/img/illustrations/rocket.png')}}" class="w-px-75 m-2" alt="3dRocket"></span>
        </div>
        <button class="btn btn-white text-primary w-100 fw-medium shadow-sm" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade to premium</button>
      </div>
    </div>

    <!-- /Plan Card -->
  </div>
  <!--/ Customer Sidebar -->


  <!-- Customer Content -->
  <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
    <!-- Customer Pills -->
    <div class="nav-align-top">
      <ul class="nav nav-pills flex-column flex-md-row mb-6 row-gap-2">
        <li class="nav-item"><a class="nav-link" href="{{url('app/ecommerce/customer/details/overview')}}"><i class="ri-group-line me-2"></i>Overview</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/ecommerce/customer/details/security')}}"><i class="ri-lock-2-line me-2"></i>Security</a></li>
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="ri-map-pin-line me-2"></i>Address & Billing</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/ecommerce/customer/details/notifications')}}"><i class="ri-notification-4-line me-2"></i>Notifications</a></li>
      </ul>
    </div>
    <!--/ Customer Pills -->

    <!-- Address accordion -->

    <div class="card card-action mb-6">
      <div class="card-header align-items-center flex-wrap gap-2">
        <h5 class="card-action-title mb-0">Address Book</h5>
        <div class="card-action-element">
          <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#addNewAddress">Add new address</button>
        </div>
      </div>
      <div class="card-body">
        <div class="accordion accordion-arrow-left" id="ecommerceBillingAccordionAddress">

          <div class="accordion-item">
            <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap row-gap-4" id="headingHome">
              <a class="accordion-button collapsed px-2" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingAddressHome" aria-expanded="false" aria-controls="headingHome" role="button">
                <span>
                  <span class="d-flex gap-2 mb-1 align-items-baseline">
                    <span class="h6 mb-0">Home</span>
                    <span class="badge bg-label-success rounded-pill">Default Address</span>
                  </span>
                  <span class="mb-0 text-body fw-normal">23 Shatinon Mekalan</span>
                </span>
              </a>
              <div class="d-flex gap-4 p-4 p-sm-2 py-sm-0 pt-0 ms-4 ms-sm-0">
                <a href="javascript:void(0);"><i class="ri-edit-box-line ri-22px text-body"></i></a>
                <a href="javascript:void(0);"><i class="ri-delete-bin-7-line ri-22px text-body"></i></a>
                <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="ri-more-2-line ri-22px text-body"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:void(0);">Set as default address</a></li>
                </ul>
              </div>
            </div>
            <div id="ecommerceBillingAddressHome" class="accordion-collapse collapse" data-bs-parent="#ecommerceBillingAccordionAddress">
              <div class="accordion-body ps-6 ms-6">
                <h6 class="mb-1">Violet Mendoza</h6>
                <p class="mb-1">23 Shatinon Mekalan,</p>
                <p class="mb-1">Melbourne, VIC 3000,</p>
                <p class="mb-1">LondonUK</p>
              </div>
            </div>
          </div>

          <div class="accordion-item active">
            <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap row-gap-4" id="headingOffice">
              <a class="accordion-button px-2" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingAddressOffice" aria-expanded="true" aria-controls="headingOffice" role="button">
                <span class="d-flex flex-column">
                  <span class="h6 mb-1">Office</span>
                  <span class="mb-0 text-body fw-normal">45 Roker Terrace</span>
                </span>
              </a>
              <div class="d-flex gap-4 p-4 p-sm-2 py-sm-0 pt-0 ms-4 ms-sm-0">
                <a href="javascript:void(0);"><i class="ri-edit-box-line ri-22px text-body"></i></a>
                <a href="javascript:void(0);"><i class="ri-delete-bin-7-line ri-22px text-body"></i></a>
                <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="ri-more-2-line ri-22px text-body"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:void(0);">Set as default address</a></li>
                </ul>
              </div>
            </div>
            <div id="ecommerceBillingAddressOffice" class="accordion-collapse collapse show" aria-labelledby="headingOffice" data-bs-parent="#ecommerceBillingAccordionAddress">
              <div class="accordion-body ps-6 ms-6">
                <h6 class="mb-1">Violet Mendoza</h6>
                <p class="mb-1">45 Roker Terrace,</p>
                <p class="mb-1">Latheronwheel,</p>
                <p class="mb-1">KW5 8NW</p>
                <p class="mb-1">LondonUK</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap row-gap-4" id="headingFamily">
              <a class="accordion-button collapsed px-2" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingAddressFamily" aria-expanded="false" aria-controls="headingFamily" role="button">
                <span class="d-flex flex-column">
                  <span class="h6 mb-1">Family</span>
                  <span class="mb-0 text-body fw-normal">512 Water Plant</span>
                </span>
              </a>
              <div class="d-flex gap-4 p-4 p-sm-2 py-sm-0 pt-0 ms-4 ms-sm-0">
                <a href="javascript:void(0);"><i class="ri-edit-box-line ri-22px text-body"></i></a>
                <a href="javascript:void(0);"><i class="ri-delete-bin-7-line ri-22px text-body"></i></a>
                <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="ri-more-2-line ri-22px text-body"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:void(0);">Set as default address</a></li>
                </ul>
              </div>
            </div>
            <div id="ecommerceBillingAddressFamily" class="accordion-collapse collapse" aria-labelledby="headingFamily" data-bs-parent="#ecommerceBillingAccordionAddress">
              <div class="accordion-body ps-6 ms-6">
                <h6 class="mb-1">Violet Mendoza</h6>
                <p class="mb-1">512 Water Plant,</p>
                <p class="mb-1">Melbourne, NY 10036,</p>
                <p class="mb-1">New York,</p>
                <p class="mb-1">United States</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Address accordion -->

    <!-- Payment accordion -->
    <div class="card card-action mb-6">
      <div class="card-header align-items-center flex-wrap gap-2">
        <h5 class="card-action-title mb-0">Payment Methods</h5>
        <div class="card-action-element">
          <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#addNewCCModal">Add payment methods</button>
        </div>
      </div>
      <div class="card-body">
        <div class="accordion accordion-arrow-left" id="ecommerceBillingAccordionPayment">

          <div class="accordion-item">
            <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap row-gap-4" id="headingPaymentMaster">
              <a class="accordion-button collapsed px-2" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingPaymentMaster" aria-expanded="false" aria-controls="headingPaymentMaster" role="button">
                <span class="accordion-button-information d-flex align-items-center gap-4">
                  <span class="accordion-button-image">
                    <img src="{{asset('assets/img/icons/payments/master-'.$configData['style'].'.png') }}" class="img-fluid w-px-50 h-px-30" alt="master-card" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png" />
                  </span>
                  <span class="d-flex flex-column">
                    <span class="h6 mb-1">Mastercard</span>
                    <span class="mb-0 text-body fw-normal">Expires Apr 2028</span>
                  </span>
                </span>
              </a>
              <div class="d-flex gap-4 p-4 p-sm-2 py-sm-0 pt-0 ms-4 ms-sm-0">
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editCCModal"><i class="ri-edit-box-line ri-22px text-body"></i></a>
                <a href="javascript:void(0);"><i class="ri-delete-bin-7-line ri-22px text-body"></i></a>
                <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="ri-more-2-line ri-22px text-body"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:void(0);">Set as Primary</a></li>
                </ul>
              </div>
            </div>
            <div id="ecommerceBillingPaymentMaster" class="accordion-collapse collapse" data-bs-parent="#ecommerceBillingAccordionPayment">
              <div class="accordion-body d-flex align-items-baseline flex-wrap flex-xl-nowrap flex-sm-nowrap flex-md-wrap ms-6 ps-4 table-responsive">
                <table class="table table-sm table-borderless text-nowrap small">
                  <tr>
                    <td class="w-50">Name</td>
                    <td class="text-heading fw-medium small">Violet Mendoza</td>
                  </tr>
                  <tr>
                    <td>Number</td>
                    <td class="text-heading fw-medium small">**** 5155</td>
                  </tr>
                  <tr>
                    <td>Expires</td>
                    <td class="text-heading fw-medium small">02/2022</td>
                  </tr>
                  <tr>
                    <td>Type</td>
                    <td class="text-heading fw-medium small">Visa credit card</td>
                  </tr>
                  <tr>
                    <td>Issuer</td>
                    <td class="text-heading fw-medium small">VICBANK</td>
                  </tr>
                  <tr>
                    <td>ID</td>
                    <td class="text-heading fw-medium small">id_w2r84jdy723</td>
                  </tr>
                </table>
                <table class="table table-sm table-borderless text-nowrap">
                  <tr>
                    <td class="w-50">Billing Phone</td>
                    <td class="text-heading fw-medium small">USA</td>
                  </tr>
                  <tr>
                    <td>Number</td>
                    <td class="text-heading fw-medium small">+7634 983 637</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td class="text-heading fw-medium small">vafgot@vultukir.org</td>
                  </tr>
                  <tr>
                    <td>Origin</td>
                    <td class="text-heading fw-medium small">United States <i class="fis fi fi-us rounded-circle me-2 fs-5"></i></td>
                  </tr>
                  <tr>
                    <td>CVC check</td>
                    <td class="text-heading fw-medium small">Passed <span class="badge bg-label-success rounded-circle p-0"><i class='ri-check-line'></i></span></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          <div class="accordion-item active">
            <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap row-gap-4" id="headingPaymentExpress">
              <a class="accordion-button px-2" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingPaymentExpress" aria-expanded="true" aria-controls="headingPaymentExpress" role="button">
                <span class="accordion-button-information d-flex align-items-center gap-4">
                  <span class="accordion-button-image">
                    <img src="{{asset('assets/img/icons/payments/ae-'.$configData['style'].'.png') }}" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
                  </span>
                  <span>
                    <span class="d-flex column-gap-2 flex-wrap align-items-baseline mb-1 row-gap-1">
                      <span class="h6 mb-0 text-nowrap">American Express</span>
                      <span class="badge bg-label-success rounded-pill">Primary</span>
                    </span>
                    <span class="mb-0 text-body fw-normal">45 Roker Terrace</span>
                  </span>
                </span>
              </a>
              <div class="d-flex gap-4 p-4 p-sm-2 py-sm-0 pt-0 ms-4 ms-sm-0">
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editCCModal"><i class="ri-edit-box-line ri-22px text-body"></i></a>
                <a href="javascript:void(0);"><i class="ri-delete-bin-7-line ri-22px text-body"></i></a>
                <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="ri-more-2-line ri-22px text-body"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:void(0);">Set as Primary</a></li>
                </ul>
              </div>
            </div>
            <div id="ecommerceBillingPaymentExpress" class="accordion-collapse collapse show" aria-labelledby="headingPaymentExpress" data-bs-parent="#ecommerceBillingAccordionPayment">
              <div class="accordion-body d-flex align-items-baseline flex-wrap flex-xl-nowrap flex-sm-nowrap flex-md-wrap ms-6 ps-4 table-responsive">
                <table class="table table-sm table-borderless text-nowrap small">
                  <tr>
                    <td class="w-50">Name</td>
                    <td class="text-heading fw-medium small">Violet Mendoza</td>
                  </tr>
                  <tr>
                    <td>Number</td>
                    <td class="text-heading fw-medium small">**** 5155</td>
                  </tr>
                  <tr>
                    <td>Expires</td>
                    <td class="text-heading fw-medium small">02/2022</td>
                  </tr>
                  <tr>
                    <td>Type</td>
                    <td class="text-heading fw-medium small">Visa credit card</td>
                  </tr>
                  <tr>
                    <td>Issuer</td>
                    <td class="text-heading fw-medium small">VICBANK</td>
                  </tr>
                  <tr>
                    <td>ID</td>
                    <td class="text-heading fw-medium small">id_w2r84jdy723</td>
                  </tr>
                </table>
                <table class="table table-sm table-borderless text-nowrap">
                  <tr>
                    <td class="w-50">Billing Phone</td>
                    <td class="text-heading fw-medium small">USA</td>
                  </tr>
                  <tr>
                    <td>Number</td>
                    <td class="text-heading fw-medium small">+7634 983 637</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td class="text-heading fw-medium small">vafgot@vultukir.org</td>
                  </tr>
                  <tr>
                    <td>Origin</td>
                    <td class="text-heading fw-medium small">United States <i class="fis fi fi-us rounded-circle me-2 fs-5"></i></td>
                  </tr>
                  <tr>
                    <td>CVC check</td>
                    <td class="text-heading fw-medium small">Passed <span class="badge bg-label-success rounded-circle p-0"><i class='ri-check-line'></i></span></td>
                  </tr>
                </table>
              </div>

            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap row-gap-4" id="headingPaymentVisa">
              <a class="accordion-button collapsed px-2" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingPaymentVisa" aria-expanded="false" aria-controls="headingPaymentVisa" role="button">
                <span class="accordion-button-information d-flex align-items-center gap-4">
                  <span class="accordion-button-image">
                    <img src="{{asset('assets/img/icons/payments/visa-'.$configData['style'].'.png') }}" class="img-fluid w-px-50 h-px-30" alt="visa-card" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png" />
                  </span>
                  <span class="d-flex flex-column">
                    <span class="h6 mb-1">Visa</span>
                    <span class="mb-0 text-body fw-normal">512 Water Plant</span>
                  </span>
                </span>
              </a>
              <div class="d-flex gap-4 p-4 p-sm-2 py-sm-0 pt-0 ms-4 ms-sm-0">
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editCCModal"><i class="ri-edit-box-line ri-22px text-body"></i></a>
                <a href="javascript:void(0);"><i class="ri-delete-bin-7-line ri-22px text-body"></i></a>
                <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="ri-more-2-line ri-22px text-body"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:void(0);">Set as Primary</a></li>
                </ul>
              </div>
            </div>
            <div id="ecommerceBillingPaymentVisa" class="accordion-collapse collapse" aria-labelledby="headingPaymentVisa" data-bs-parent="#ecommerceBillingAccordionPayment">
              <div class="accordion-body d-flex align-items-baseline flex-wrap flex-xl-nowrap flex-sm-nowrap flex-md-wrap ms-6 ps-4 table-responsive">
                <table class="table table-sm table-borderless text-nowrap small">
                  <tr>
                    <td class="w-50">Name</td>
                    <td class="text-heading fw-medium small">Violet Mendoza</td>
                  </tr>
                  <tr>
                    <td>Number</td>
                    <td class="text-heading fw-medium small">**** 5155</td>
                  </tr>
                  <tr>
                    <td>Expires</td>
                    <td class="text-heading fw-medium small">02/2022</td>
                  </tr>
                  <tr>
                    <td>Type</td>
                    <td class="text-heading fw-medium small">Visa credit card</td>
                  </tr>
                  <tr>
                    <td>Issuer</td>
                    <td class="text-heading fw-medium small">VICBANK</td>
                  </tr>
                  <tr>
                    <td>ID</td>
                    <td class="text-heading fw-medium small">id_w2r84jdy723</td>
                  </tr>
                </table>
                <table class="table table-sm table-borderless text-nowrap">
                  <tr>
                    <td class="w-50">Billing Phone</td>
                    <td class="text-heading fw-medium small">USA</td>
                  </tr>
                  <tr>
                    <td>Number</td>
                    <td class="text-heading fw-medium small">+7634 983 637</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td class="text-heading fw-medium small">vafgot@vultukir.org</td>
                  </tr>
                  <tr>
                    <td>Origin</td>
                    <td class="text-heading fw-medium small">United States <i class="fis fi fi-us rounded-circle me-2 fs-5"></i></td>
                  </tr>
                  <tr>
                    <td>CVC check</td>
                    <td class="text-heading fw-medium small">Passed <span class="badge bg-label-success rounded-circle p-0"><i class='ri-check-line'></i></span></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Payment accordion -->
  </div>
  <!--/ Customer Content -->
</div>

<!-- Modal -->
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-edit-cc')
@include('_partials/_modals/modal-add-new-address')
@include('_partials/_modals/modal-add-new-cc')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modal -->
@endsection

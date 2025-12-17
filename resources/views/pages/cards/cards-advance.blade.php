@extends('layouts/layoutMaster')

@section('title', 'Cards Advance- UI elements')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/apex-charts/apex-charts.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/cleavejs/cleave-phone.js',
  'resources/assets/vendor/libs/apex-charts/apexcharts.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/cards-advance.js',
  'resources/assets/js/modal-add-new-cc.js'
])
@endsection

@section('content')
<div class="row g-6">
  <!-- Transactions -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Transactions</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="me-4">
              <div class="avatar flex-shrink-0">
                <div class="avatar-initial bg-label-success rounded-3">
                  <div>
                    <img src="{{asset('assets/img/icons/payments/credit-card.png')}}" alt="credit-card" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Credit Card</h6>
                <p class="mb-0">Digital Ocean</p>
              </div>
              <div class="user-progress d-flex align-items-center gap-2">
                <h6 class="mb-0">-$850</h6>
                <i class='ri-arrow-up-s-line ri-24px text-success'></i>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="me-4">
              <div class="avatar flex-shrink-0">
                <div class="avatar-initial bg-label-primary rounded-3">
                  <div>
                    <img src="{{asset('assets/img/icons/payments/paypal-primary.png')}}" alt="paypal" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Paypal</h6>
                <p class="mb-0">Received Money</p>
              </div>
              <div class="user-progress d-flex align-items-center gap-2">
                <h6 class="mb-0">+$34,456</h6>
                <i class='ri-arrow-up-s-line ri-24px text-success'></i>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="me-4">
              <div class="avatar flex-shrink-0">
                <div class="avatar-initial bg-label-info rounded-3">
                  <div>
                    <img src="{{asset('assets/img/icons/payments/mastercard-info.png')}}" alt="mastercard" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Mastercard</h6>
                <p class="mb-0">Netflix</p>
              </div>
              <div class="user-progress d-flex align-items-center gap-2">
                <h6 class="mb-0">-$199</h6>
                <i class='ri-arrow-down-s-line ri-24px text-danger'></i>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="me-4">
              <div class="avatar flex-shrink-0">
                <div class="avatar-initial bg-label-danger rounded-3">
                  <div>
                    <img src="{{asset('assets/img/icons/payments/wallet.png')}}" alt="wallet" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Wallet</h6>
                <p class="mb-0">Mac'D</p>
              </div>
              <div class="user-progress d-flex align-items-center gap-2">
                <h6 class="mb-0">-$156</h6>
                <i class='ri-arrow-down-s-line ri-24px text-danger'></i>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="me-4">
              <div class="avatar flex-shrink-0">
                <div class="avatar-initial bg-label-primary rounded-3">
                  <div>
                    <img src="{{asset('assets/img/icons/payments/paypal-primary.png')}}" alt="paypal" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Paypal</h6>
                <p class="mb-0">Refund</p>
              </div>
              <div class="user-progress d-flex align-items-center gap-2">
                <h6 class="mb-0">+$12,872</h6>
                <i class='ri-arrow-up-s-line ri-24px text-success'></i>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="me-4">
              <div class="avatar flex-shrink-0">
                <div class="avatar-initial bg-label-warning rounded-3">
                  <div>
                    <img src="{{asset('assets/img/icons/payments/stripe.png')}}" alt="Stripe" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Stripe</h6>
                <p class="mb-0">Buy Apple Watch</p>
              </div>
              <div class="user-progress d-flex align-items-center gap-2">
                <h6 class="mb-0">-$299</h6>
                <i class='ri-arrow-down-s-line ri-24px text-danger'></i>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Transactions -->

  <!-- Upgrade Plan -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Upgrade Your Plan</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="upgradePlanCard" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="upgradePlanCard">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <small>Please make the payment to start enjoying all the features of our premium plan as soon as possible.</small>
        <div class="bg-label-primary p-4 rounded-4 my-3">
          <div class="d-flex">
            <div class="border border-1 border-primary rounded me-4 p-2 d-flex align-items-center justify-content-center w-px-40 h-px-40">
              <i class="ri-trophy-line ri-24px"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Platinum</h6>
                <a href="javascript:void(0)" class="small" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</a>
              </div>
              <div class="user-progress">
                <div class="d-flex justify-content-center">
                  <sup class="mt-5 mb-0 text-heading small">$</sup>
                  <h4 class="fw-medium mb-0">5,250</h4>
                  <sub class="mt-auto mb-4 text-heading small"> /Year</sub>
                </div>
              </div>
            </div>
          </div>
        </div>
        <form id="paymentDetailsForm" onsubmit="return false">
          <h6 class="mb-2">Payment Details</h6>
          <div class="d-flex align-items-center mb-2">
            <div class="me-3">
              <img src="{{asset('assets/img/icons/payments/logo-mastercard-small.png')}}" alt="credit card" height="30">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div>
                <h6 class="mb-0">Credit Card</h6>
                <small>5688 xxxx xxxx 2356</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control form-control-sm cvv-code-payment" maxlength="3" placeholder="CVV" />
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mb-2">
            <div class="me-3">
              <img src="{{asset('assets/img/icons/payments/logo-credit-card-2.png')}}" alt="credit card" height="30">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div>
                <h6 class="mb-0">Credit Card</h6>
                <small>8562 xxxx xxxx 4563</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control form-control-sm cvv-code-payment" maxlength="3" placeholder="CVV" />
              </div>
            </div>
          </div>
          <a href="javascript:;" class="d-block mb-3 small" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Add Payment Method </a>
          <div class="col-12 mb-3">
            <input id="addEmail" name="addEmail" class="form-control form-control-sm" type="text" placeholder="Email Address" />
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary w-100"><span class="me-1">Contact Now</span></button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--/ Upgrade Plan -->

  <!-- Meeting Schedule -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Meeting Schedule</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="meetingSchedule" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="meetingSchedule">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="avatar flex-shrink-0 me-4">
              <img src="{{asset('assets/img/avatars/4.png')}}" alt="avatar" class="rounded-3">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Call with Woods</h6>
                <small class="d-flex align-items-center">
                  <i class="ri-calendar-line ri-16px"></i>
                  <span class="ms-2">21 Jul | 08:20-10:30</span>
                </small>
              </div>
              <div class="badge bg-label-primary rounded-pill">Business</div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="avatar flex-shrink-0 me-4">
              <img src="{{asset('assets/img/avatars/5.png')}}" alt="avatar" class="rounded-3">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Conference call</h6>
                <small class="d-flex align-items-center">
                  <i class="ri-calendar-line ri-16px"></i>
                  <span class="ms-2">21 Jul | 08:20-10:30</span>
                </small>
              </div>
              <div class="badge bg-label-warning rounded-pill">Dinner</div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="avatar flex-shrink-0 me-4">
              <img src="{{asset('assets/img/avatars/3.png')}}" alt="avatar" class="rounded-3">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Meeting with Mark</h6>
                <small class="d-flex align-items-center">
                  <i class="ri-calendar-line ri-16px"></i>
                  <span class="ms-2">21 Jul | 08:20-10:30</span>
                </small>
              </div>
              <div class="badge bg-label-secondary rounded-pill">Meetup</div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="avatar flex-shrink-0 me-4">
              <img src="{{asset('assets/img/avatars/14.png')}}" alt="avatar" class="rounded-3">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Meeting in Oakland</h6>
                <small class="d-flex align-items-center">
                  <i class="ri-calendar-line ri-16px"></i>
                  <span class="ms-2">21 Jul | 08:20-10:30</span>
                </small>
              </div>
              <div class="badge bg-label-danger rounded-pill">Dinner</div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="avatar flex-shrink-0 me-4">
              <img src="{{asset('assets/img/avatars/8.png')}}" alt="avatar" class="rounded-3">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Call with hilda</h6>
                <small class="d-flex align-items-center">
                  <i class="ri-calendar-line ri-16px"></i>
                  <span class="ms-2">21 Jul | 08:20-10:30</span>
                </small>
              </div>
              <div class="badge bg-label-success rounded-pill">Meditation</div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <img src="{{asset('assets/img/avatars/1.png')}}" alt="avatar" class="rounded-3">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Meeting with Carl</h6>
                <small class="d-flex align-items-center">
                  <i class="ri-calendar-line ri-16px"></i>
                  <span class="ms-2">21 Jul | 08:20-10:30</span>
                </small>
              </div>
              <div class="badge bg-label-primary rounded-pill">Business</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Meeting Schedule -->

  <!-- Project Statistics -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Project Statistics</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="projectStatus" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectStatus">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between py-4 px-5 border-bottom">
        <p class="mb-0 fs-xsmall">NAME</p>
        <p class="mb-0 fs-xsmall">BUDGET</p>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex align-items-center mb-6">
            <div class="avatar avatar-md flex-shrink-0 me-4">
              <div class="avatar-initial bg-light-gray rounded-3">
                <div>
                  <img src="{{asset('assets/img/icons/misc/3d-illustration.png')}}" alt="User" class="h-25">
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">3D Illustration</h6>
                <small>Blender Illustration</small>
              </div>
              <div class="badge bg-label-primary rounded-pill">$6,500</div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-6">
            <div class="avatar avatar-md flex-shrink-0 me-4">
              <div class="avatar-initial bg-light-gray rounded-3">
                <div>
                  <img src="{{asset('assets/img/icons/misc/finance-app-design.png')}}" alt="User" class="h-25">
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Finance App Design</h6>
                <small>Figma UI Kit</small>
              </div>
              <div class="badge bg-label-primary rounded-pill">$4,290</div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-6">
            <div class="avatar avatar-md flex-shrink-0 me-4">
              <div class="avatar-initial bg-light-gray rounded-3">
                <div>
                  <img src="{{asset('assets/img/icons/misc/4-square.png')}}" alt="User" class="h-25">
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">4 Square</h6>
                <small>Android Application</small>
              </div>
              <div class="badge bg-label-primary rounded-pill">$44,500</div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-6">
            <div class="avatar avatar-md flex-shrink-0 me-4">
              <div class="avatar-initial bg-light-gray rounded-3">
                <div>
                  <img src="{{asset('assets/img/icons/misc/delta-web-app.png')}}" alt="User" class="h-25">
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Delta Web App</h6>
                <small>React Dashboard</small>
              </div>
              <div class="badge bg-label-primary rounded-pill">$12,690</div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="avatar avatar-md flex-shrink-0 me-4">
              <div class="avatar-initial bg-light-gray rounded-3">
                <div>
                  <img src="{{asset('assets/img/icons/misc/ecommerce-website.png')}}" alt="User" class="h-25">
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">eCommerce Website</h6>
                <small>Vue + Laravel</small>
              </div>
              <div class="badge bg-label-primary rounded-pill">$10,850</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Project Statistics -->

  <!-- Top Referral Source  -->
  <div class="col-xxl-8">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <div>
          <h5 class="card-title mb-1">Top Referral Sources</h5>
          <p class="card-subtitle mb-0">Number of Sales</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="earningReportsTabsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">
            <a class="dropdown-item" href="javascript:void(0);">View More</a>
            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
          </div>
        </div>
      </div>
      <div class="card-body pb-0">
        <ul class="nav nav-tabs nav-tabs-widget pb-6 gap-4 mx-1 d-flex flex-nowrap" role="tablist">
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link btn active d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-orders-id" aria-controls="navs-orders-id" aria-selected="true">
              <div class="avatar avatar-sm">
                <img src="{{asset('assets/img/icons/brands/google.png')}}" alt="User">
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-sales-id" aria-controls="navs-sales-id" aria-selected="false">
              <div class="avatar avatar-sm">
                <img src="{{asset('assets/img/icons/brands/facebook-rounded.png')}}" alt="User">
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-profit-id" aria-controls="navs-profit-id" aria-selected="false">
              <div class="avatar avatar-sm">
                <img src="{{asset('assets/img/icons/brands/instagram-rounded.png')}}" alt="User">
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-income-id" aria-controls="navs-income-id" aria-selected="false">
              <div class="avatar avatar-sm">
                <img src="{{asset('assets/img/icons/brands/reddit-rounded.png')}}" alt="User">
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link btn d-flex align-items-center justify-content-center disabled" role="tab" data-bs-toggle="tab" aria-selected="false">
              <div class="avatar avatar-sm">
                <div class="avatar-initial bg-label-secondary rounded">
                  <i class="ri-add-line ri-22px"></i>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <div class="tab-content p-0">
        <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
          <div class="table-responsive text-nowrap">
            <table class="table border-top">
              <thead>
                <tr>
                  <th class="bg-transparent border-bottom">Product Name</th>
                  <th class="bg-transparent border-bottom">STATUS</th>
                  <th class="text-end bg-transparent border-bottom">Profit</th>
                  <th class="text-end bg-transparent border-bottom">REVENUE</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <tr>
                  <td>Email Marketing Campaign</td>
                  <td>
                    <div class="badge bg-label-primary rounded-pill">Active</div>
                  </td>
                  <td class="text-success fw-medium text-end">+24%</td>
                  <td class="text-end fw-medium">$42,857</td>
                </tr>
                <tr>
                  <td>Google Workspace</td>
                  <td>
                    <div class="badge bg-label-success rounded-pill">Completed</div>
                  </td>
                  <td class="text-danger fw-medium text-end">-12%</td>
                  <td class="text-end fw-medium">$850</td>
                </tr>
                <tr>
                  <td>Affiliation Program</td>
                  <td>
                    <div class="badge bg-label-primary rounded-pill">Active</div>
                  </td>
                  <td class="text-success fw-medium text-end">+24%</td>
                  <td class="text-end fw-medium">$5,576</td>
                </tr>
                <tr>
                  <td>Google Adsense</td>
                  <td>
                    <div class="badge bg-label-info rounded-pill">In Draft</div>
                  </td>
                  <td class="text-success fw-medium text-end">+0%</td>
                  <td class="text-end fw-medium">0</td>
                </tr>
                <tr>
                  <td>Google Workspace</td>
                  <td>
                    <div class="badge bg-label-success rounded-pill">Completed</div>
                  </td>
                  <td class="text-danger fw-medium text-end">-18%</td>
                  <td class="text-end fw-medium">$680</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
          <div class="table-responsive text-nowrap">
            <table class="table border-top">
              <thead>
                <tr>
                  <th class="bg-transparent border-bottom">Product Name</th>
                  <th class="bg-transparent border-bottom">STATUS</th>
                  <th class="text-end bg-transparent border-bottom">Profit</th>
                  <th class="text-end bg-transparent border-bottom">REVENUE</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <tr>
                  <td>facebook Adsense</td>
                  <td>
                    <div class="badge bg-label-info rounded-pill">In Draft</div>
                  </td>
                  <td class="text-success fw-medium text-end">+5%</td>
                  <td class="text-end fw-medium">$5</td>
                </tr>
                <tr>
                  <td>Affiliation Program</td>
                  <td>
                    <div class="badge bg-label-primary rounded-pill">Active</div>
                  </td>
                  <td class="text-danger fw-medium text-end">-24%</td>
                  <td class="text-end fw-medium">$5,576</td>
                </tr>
                <tr>
                  <td>Email Marketing Campaign</td>
                  <td>
                    <div class="badge bg-label-warning rounded-pill">warning</div>
                  </td>
                  <td class="text-success fw-medium text-end">+5%</td>
                  <td class="text-end fw-medium">$2,857</td>
                </tr>
                <tr>
                  <td>facebook Workspace</td>
                  <td>
                    <div class="badge bg-label-success rounded-pill">Completed</div>
                  </td>
                  <td class="text-danger fw-medium text-end">-12%</td>
                  <td class="text-end fw-medium">$850</td>
                </tr>
                <tr>
                  <td>Affiliation Program</td>
                  <td>
                    <div class="badge bg-label-primary rounded-pill">Active</div>
                  </td>
                  <td class="text-success fw-medium text-end">+24%</td>
                  <td class="text-end fw-medium">$5,576</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-profit-id" role="tabpanel">
          <div class="table-responsive text-nowrap">
            <table class="table border-top">
              <thead>
                <tr>
                  <th class="bg-transparent border-bottom">Product Name</th>
                  <th class="bg-transparent border-bottom">STATUS</th>
                  <th class="text-end bg-transparent border-bottom">Profit</th>
                  <th class="text-end bg-transparent border-bottom">REVENUE</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <tr>
                  <td>Affiliation Program</td>
                  <td>
                    <div class="badge bg-label-primary rounded-pill">Active</div>
                  </td>
                  <td class="text-danger fw-medium text-end">-24%</td>
                  <td class="text-end fw-medium">$5,576</td>
                </tr>
                <tr>
                  <td>instagram Adsense</td>
                  <td>
                    <div class="badge bg-label-info rounded-pill">In Draft</div>
                  </td>
                  <td class="text-success fw-medium text-end">+5%</td>
                  <td class="text-end fw-medium">$5</td>
                </tr>
                <tr>
                  <td>instagram Workspace</td>
                  <td>
                    <div class="badge bg-label-success rounded-pill">Completed</div>
                  </td>
                  <td class="text-danger fw-medium text-end">-12%</td>
                  <td class="text-end fw-medium">$850</td>
                </tr>
                <tr>
                  <td>Email Marketing Campaign</td>
                  <td>
                    <div class="badge bg-label-danger rounded-pill">warning</div>
                  </td>
                  <td class="text-danger fw-medium text-end">-5%</td>
                  <td class="text-end fw-medium">$857</td>
                </tr>
                <tr>
                  <td>Marketing Program</td>
                  <td>
                    <div class="badge bg-label-primary rounded-pill">Active</div>
                  </td>
                  <td class="text-danger fw-medium text-end">-8%</td>
                  <td class="text-end fw-medium">$876</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-income-id" role="tabpanel">
          <div class="table-responsive text-nowrap">
            <table class="table border-top">
              <thead>
                <tr>
                  <th class="bg-transparent border-bottom">Product Name</th>
                  <th class="bg-transparent border-bottom">STATUS</th>
                  <th class="text-end bg-transparent border-bottom">Profit</th>
                  <th class="text-end bg-transparent border-bottom">REVENUE</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <tr>
                  <td>reddit Workspace</td>
                  <td>
                    <div class="badge bg-label-warning rounded-pill">process</div>
                  </td>
                  <td class="text-danger fw-medium text-end">-12%</td>
                  <td class="text-end fw-medium">$850</td>
                </tr>
                <tr>
                  <td>Affiliation Program</td>
                  <td>
                    <div class="badge bg-label-primary rounded-pill">Active</div>
                  </td>
                  <td class="text-danger fw-medium text-end">-24%</td>
                  <td class="text-end fw-medium">$5,576</td>
                </tr>
                <tr>
                  <td>reddit Adsense</td>
                  <td>
                    <div class="badge bg-label-info rounded-pill">In Draft</div>
                  </td>
                  <td class="text-success fw-medium text-end">+5%</td>
                  <td class="text-end fw-medium">$5</td>
                </tr>
                <tr>
                  <td>Email Marketing Campaign</td>
                  <td>
                    <div class="badge bg-label-success rounded-pill">Completed</div>
                  </td>
                  <td class="text-success fw-medium text-end">+50%</td>
                  <td class="text-end fw-medium">$857</td>
                </tr>
                <tr>
                  <td>reddit Marketing Campaign</td>
                  <td>
                    <div class="badge bg-label-primary rounded-pill">Completed</div>
                  </td>
                  <td class="text-success fw-medium text-end">+80%</td>
                  <td class="text-end fw-medium">$8,957</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Top Referral Source  -->

  <!-- Total Earnings -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Total Earnings</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="totalEarnings" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarnings">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="mb-6 mt-4 pb-2">
          <div class="d-flex align-items-center">
            <h2 class="mb-0">$42,880</h2>
            <span class="text-success ms-2 fw-medium">
              <i class="ri-arrow-up-s-line ri-24px"></i>
              <small>22%</small>
            </span>
          </div>
          <p class="mt-1">Compared to $84,725 last year</p>
        </div>
        <div class="mb-6 pb-1">
          <div class="d-flex justify-content-between gap-4">
            <h6 class="mb-2">Amazon</h6>
            <span class="text-heading fw-medium">$24,453</span>
          </div>
          <div class="progress w-100 rounded bg-label-primary" style="height: 6px;">
            <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-6 pb-1">
          <div class="d-flex justify-content-between gap-4">
            <h6 class="mb-2">Flipkart</h6>
            <span class="text-heading fw-medium">$12,763</span>
          </div>
          <div class="progress w-100 rounded bg-label-success" style="height: 6px;">
            <div class="progress-bar bg-success" style="width: 55%" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div>
          <div class="d-flex justify-content-between gap-4">
            <h6 class="mb-2">eBay</h6>
            <span class="text-heading fw-medium">$4,978</span>
          </div>
          <div class="progress w-100 rounded bg-label-danger" style="height: 6px;">
            <div class="progress-bar bg-danger" style="width: 35%" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Earnings -->

  <!-- Social Network Visits -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Social Network Visits</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="socialNetworkList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="socialNetworkList">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="mb-7">
          <div class="d-flex align-items-center">
            <h4 class="mb-0">$24,895</h4>
            <span class="text-success">
              <i class="ri-arrow-up-s-line ri-24px"></i>
              <span>62%</span>
            </span>
          </div>
          <p class="mb-0">Last 1 Year Visits</p>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex align-items-center mb-4">
            <div class="flex-shrink-0">
              <img src="{{asset('assets/img/icons/brands/facebook-rounded.png')}}" alt="facebook" class="me-3" height="34">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Facebook</h6>
                <p class="mb-0">Social Media</p>
              </div>
              <div class="d-flex align-items-center">
                <span class="h6 mb-0">12,348</span>
                <div class="ms-2 badge bg-label-success rounded-pill">+12%</div>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <div class="flex-shrink-0">
              <img src="{{asset('assets/img/icons/brands/dribbble-rounded.png')}}" alt="dribbble" class="me-3" height="34">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Dribbble</h6>
                <p class="mb-0">Community</p>
              </div>
              <div class="d-flex align-items-center">
                <span class="h6 mb-0">8,450</span>
                <div class="ms-2 badge bg-label-success rounded-pill">+32%</div>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <div class="flex-shrink-0">
              <img src="{{asset('assets/img/icons/brands/twitter-rounded.png')}}" alt="facebook" class="me-3" height="34">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Twitter</h6>
                <p class="mb-0">Social Media</p>
              </div>
              <div class="d-flex align-items-center">
                <span class="h6 mb-0">350</span>
                <div class="ms-2 badge bg-label-danger rounded-pill">-18%</div>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="flex-shrink-0">
              <img src="{{asset('assets/img/icons/brands/instagram-rounded.png')}}" alt="instagram" class="me-3" height="34">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Instagram</h6>
                <p class="mb-0">Social Media</p>
              </div>
              <div class="d-flex align-items-center">
                <span class="h6 mb-0">25,566</span>
                <div class="ms-2 badge bg-label-success rounded-pill">+42%</div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Social Network Visits -->

  <!-- General Statistics -->
  <div class="col-md-6 col-xxl-4 order-0 order-sm-3 order-xxl-0">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">General Statistics</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="generalStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="generalStatistics">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body pb-4">
        <div class="mb-9">
          <div class="d-flex align-items-center">
            <div class="avatar avatar-md">
              <div class="avatar-initial bg-label-primary rounded-3">
                <i class="ri-bank-card-line ri-24px"></i>
              </div>
            </div>
            <div class="ms-4">
              <h3 class="mb-0">$89,522</h3>
              <p class="mb-0">Last 6 Month Profit </p>
            </div>
          </div>
        </div>
        <div class="mb-5">
          <h6 class="mb-2">Current Activity</h6>
          <div class="progress w-100 rounded bg-label-primary" style="height: 6px;">
            <div class="progress-bar bg-primary" style="width: 24%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <tbody class="table-border-bottom-0">
              <tr>
                <td class="ps-0 pe-12 pb-4">
                  <i class="ri-circle-fill ri-14px text-primary me-3"></i>
                  <span class="text-heading align-middle">Profit</span>
                </td>
                <td class="text-end pb-4"><span class="text-heading fw-medium">$54,234</span></td>
                <td class="pe-0 pb-4">
                  <div class="d-flex align-items-center justify-content-end">
                    <span class="text-heading fw-medium me-2">+85%</span>
                    <i class="ri-arrow-up-s-line ri-24px text-success"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="ps-0 pe-12 py-4">
                  <i class="ri-circle-fill ri-14px text-warning me-3"></i>
                  <span class="text-heading align-middle">Sales</span>
                </td>
                <td class="text-end py-4"><span class="text-heading fw-medium">8,657</span></td>
                <td class="pe-0 py-4">
                  <div class="d-flex align-items-center justify-content-end">
                    <span class="text-heading fw-medium me-2">+42%</span>
                    <i class="ri-arrow-up-s-line ri-24px text-success"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="ps-0 pe-12 pt-4">
                  <i class="ri-circle-fill ri-14px text-info me-3"></i>
                  <span class="text-heading align-middle">User</span>
                </td>
                <td class="text-end pt-4"><span class="text-heading fw-medium">16,456</span></td>
                <td class="pe-0 pt-4">
                  <div class="d-flex align-items-center justify-content-end">
                    <span class="text-heading fw-medium me-2">-12%</span>
                    <i class="ri-arrow-down-s-line ri-24px text-danger"></i>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--/ General Statistics -->

  <!-- Most Sales in Countries -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Most Sales in Countries</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="mostSales" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="mostSales">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body pb-1 pt-0">
        <div class="mb-6 mt-1">
          <div class="d-flex align-items-center">
            <h1 class="mb-0 me-2">$24,895</h1>
            <div class="badge bg-label-success rounded-pill">+42%</div>
          </div>
          <p class="mt-0">Sales Last 90 Days</p>
        </div>
        <div class="table-responsive text-nowrap border-top">
          <table class="table">
            <tbody class="table-border-bottom-0">
              <tr>
                <td class="ps-0 pe-12 py-4"><span class="text-heading">Australia</span></td>
                <td class="text-end py-4"><span class="text-heading fw-medium">18,879</span></td>
                <td class="pe-0 py-4">
                  <div class="d-flex align-items-center justify-content-end">
                    <span class="text-heading fw-medium me-2">15%</span>
                    <i class="ri-arrow-down-s-line ri-24px text-danger"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="ps-0 pe-12 py-4"><span class="text-heading">Canada</span></td>
                <td class="text-end py-4"><span class="text-heading fw-medium">10,357</span></td>
                <td class="pe-0 py-4">
                  <div class="d-flex align-items-center justify-content-end">
                    <span class="text-heading fw-medium me-2">85%</span>
                    <i class="ri-arrow-up-s-line ri-24px text-success"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="ps-0 pe-12 py-4"><span class="text-heading">India</span></td>
                <td class="text-end py-4"><span class="text-heading fw-medium">4,860</span></td>
                <td class="pe-0 py-4">
                  <div class="d-flex align-items-center justify-content-end">
                    <span class="text-heading fw-medium me-2">48%</span>
                    <i class="ri-arrow-up-s-line ri-24px text-success"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="ps-0 pe-12 py-4"><span class="text-heading">France</span></td>
                <td class="text-end py-4"><span class="text-heading fw-medium">2,560</span></td>
                <td class="pe-0 py-4">
                  <div class="d-flex align-items-center justify-content-end">
                    <span class="text-heading fw-medium me-2">36%</span>
                    <i class="ri-arrow-up-s-line ri-24px text-success"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="ps-0 pe-12 py-4"><span class="text-heading">United State</span></td>
                <td class="text-end py-4"><span class="text-heading fw-medium">899</span></td>
                <td class="pe-0 py-4">
                  <div class="d-flex align-items-center justify-content-end">
                    <span class="text-heading fw-medium me-2">16%</span>
                    <i class="ri-arrow-down-s-line ri-24px text-danger"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="ps-0 pe-12 py-4"><span class="text-heading">Japan</span></td>
                <td class="text-end py-4"><span class="text-heading fw-medium">43</span></td>
                <td class="pe-0 py-4">
                  <div class="d-flex align-items-center justify-content-end">
                    <span class="text-heading fw-medium me-2">35%</span>
                    <i class="ri-arrow-up-s-line ri-24px text-success"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="ps-0 pe-12 py-4"><span class="text-heading">Brazil</span></td>
                <td class="text-end py-4"><span class="text-heading fw-medium">18</span></td>
                <td class="pe-0 py-4">
                  <div class="d-flex align-items-center justify-content-end">
                    <span class="text-heading fw-medium me-2">12%</span>
                    <i class="ri-arrow-up-s-line ri-24px text-success"></i>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
  <!--/ Most Sales in Countries -->

  <!-- Payment History -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Payment History</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="paymentHistory" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="paymentHistory">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-borderless">
          <thead>
            <tr>
              <th class="bg-transparent border-bottom py-4 fs-xsmall fw-normal">Card</th>
              <th class="text-center bg-transparent border-bottom py-4 fs-xsmall fw-normal">Date</th>
              <th class="text-end bg-transparent border-bottom py-4 fs-xsmall fw-normal">Spend</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="d-flex align-items-center pt-5">
                <div class="px-2 rounded-3 bg-light-gray d-flex align-items-center h-px-30">
                  <img src="{{asset('assets/img/icons/payments/logo-visa.png')}}" alt="credit-card" width="30">
                </div>
                <div class="ms-4">
                  <h6 class="mb-0">*4399</h6>
                  <small>Credit Card</small>
                </div>
              </td>
              <td class="small text-center pt-5">05/Jan</td>

              <td class="text-end pt-5">
                <div class="ms-2">
                  <h6 class="mb-0">-$2,820</h6>
                  <small>$10,450</small>
                </div>
              </td>
            </tr>
            <tr>
              <td class="d-flex align-items-center">
                <div class="px-2 rounded-3 bg-light-gray d-flex align-items-center h-px-30">
                  <img src="{{asset('assets/img/icons/payments/logo-mastercard.png')}}" alt="debit-card" width="30">
                </div>
                <div class="ms-4">
                  <h6 class="mb-0">*5545</h6>
                  <small>Debit Card</small>
                </div>
              </td>
              <td class="small text-center">12/Feb</td>

              <td class="text-end">
                <div class="ms-2">
                  <h6 class="mb-0">-$345</h6>
                  <small>$8,709</small>
                </div>
              </td>
            </tr>
            <tr>
              <td class="d-flex align-items-center">
                <div class="px-2 rounded-3 bg-light-gray d-flex align-items-center h-px-30">
                  <img src="{{asset('assets/img/icons/payments/logo-american-express.png')}}" alt="atm-card" width="30">
                </div>
                <div class="ms-4">
                  <h6 class="mb-0">*9860</h6>
                  <small>ATM Card</small>
                </div>
              </td>
              <td class="small text-center">24/Feb</td>

              <td class="text-end">
                <div class="ms-2">
                  <h6 class="mb-0">-$999</h6>
                  <small>$25,900</small>
                </div>
              </td>
            </tr>
            <tr>
              <td class="d-flex align-items-center">
                <div class="px-2 rounded-3 bg-light-gray d-flex align-items-center h-px-30">
                  <img src="{{asset('assets/img/icons/payments/logo-visa.png')}}" alt="debit-card" width="30">
                </div>
                <div class="ms-4">
                  <h6 class="mb-0">*4300</h6>
                  <small>Credit Card</small>
                </div>
              </td>
              <td class="small text-center">08/Mar</td>

              <td class="text-end">
                <div class="ms-2">
                  <h6 class="mb-0">-$8,453</h6>
                  <small>$9,233</small>
                </div>
              </td>
            </tr>
            <tr>
              <td class="d-flex align-items-center">
                <div class="px-2 rounded-3 bg-light-gray d-flex align-items-center h-px-30">
                  <img src="{{asset('assets/img/icons/payments/logo-mastercard.png')}}" alt="credit-card" width="30">
                </div>
                <div class="ms-4">
                  <h6 class="mb-0">*5545</h6>
                  <small>Debit Card</small>
                </div>
              </td>
              <td class="small text-center">15/Apr</td>

              <td class="text-end">
                <div class="ms-2">
                  <h6 class="mb-0">-$24</h6>
                  <small>$500</small>
                </div>
              </td>
            </tr>
            <tr>
              <td class="d-flex align-items-center">
                <div class="px-2 rounded-3 bg-light-gray d-flex align-items-center h-px-30">
                  <img src="{{asset('assets/img/icons/payments/logo-visa.png')}}" alt="credit-card" width="30">
                </div>
                <div class="ms-4">
                  <h6 class="mb-0">*4399</h6>
                  <small>Credit Card</small>
                </div>
              </td>
              <td class="small text-center">28/Apr</td>

              <td class="text-end">
                <div class="ms-2">
                  <h6 class="mb-0">-$299</h6>
                  <small>$1,380</small>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--/ Payment History -->

  <!-- Subscribers by Countries -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Subscribers by Countries</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="subscribers" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="subscribers">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-borderless">
          <thead>
            <tr>
              <th class="bg-transparent border-bottom py-4 fs-xsmall fw-normal">Countries</th>
              <th class="bg-transparent border-bottom py-4 fs-xsmall fw-normal">Subscriber</th>
              <th class="text-end bg-transparent border-bottom py-4 fs-xsmall fw-normal">Percent</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="d-flex align-items-center pt-5">
                <div class="avatar avatar-sm flex-shrink-0 me-4">
                  <i class="fis fi fi-us rounded-circle fs-3"></i>
                </div>
                <h6 class="mb-0">USA</h6>
              </td>
              <td class="fw-medium text-center pt-5">22,450</td>

              <td class="d-flex justify-content-end align-items-center pt-5">
                <h6 class="mb-0 text-success">+22.5%</h6>
                <i class="ri-arrow-up-s-line text-success ri-24px ms-1"></i>
              </td>
            </tr>
            <tr>
              <td class="d-flex align-items-center">
                <div class="avatar avatar-sm flex-shrink-0 me-4">
                  <i class="fis fi fi-in rounded-circle fs-3"></i>
                </div>
                <h6 class="mb-0">India</h6>
              </td>
              <td class="fw-medium text-center">18,568</td>

              <td class="d-flex justify-content-end align-items-center">
                <h6 class="mb-0 text-success">+18.5%</h6>
                <i class="ri-arrow-up-s-line text-success ri-24px ms-1"></i>
              </td>
            </tr>
            <tr>
              <td class="d-flex align-items-center">
                <div class="avatar avatar-sm flex-shrink-0 me-4">
                  <i class="fis fi fi-br rounded-circle fs-3"></i>
                </div>
                <h6 class="mb-0">Brazil</h6>
              </td>
              <td class="fw-medium text-center">8,457</td>

              <td class="d-flex justify-content-end align-items-center">
                <h6 class="mb-0 text-danger">-8.3%</h6>
                <i class="ri-arrow-down-s-line text-danger ri-24px ms-1"></i>
              </td>
            </tr>
            <tr>
              <td class="d-flex align-items-center">
                <div class="avatar avatar-sm flex-shrink-0 me-4">
                  <i class="fis fi fi-au rounded-circle fs-3"></i>
                </div>
                <h6 class="mb-0">Australia</h6>
              </td>
              <td class="fw-medium text-center">2,850</td>

              <td class="d-flex justify-content-end align-items-center">
                <h6 class="mb-0 text-success">+15.2%</h6>
                <i class="ri-arrow-up-s-line text-success ri-24px ms-1"></i>
              </td>
            </tr>
            <tr>
              <td class="d-flex align-items-center">
                <div class="avatar avatar-sm flex-shrink-0 me-4">
                  <i class="fis fi fi-fr rounded-circle fs-3"></i>
                </div>
                <h6 class="mb-0">France</h6>
              </td>
              <td class="fw-medium text-center">1,930</td>

              <td class="d-flex justify-content-end align-items-center">
                <h6 class="mb-0 text-danger">-12.6%</h6>
                <i class="ri-arrow-down-s-line text-danger ri-24px ms-1"></i>
              </td>
            </tr>
            <tr>
              <td class="d-flex align-items-center">
                <div class="avatar avatar-sm flex-shrink-0 me-4">
                  <i class="fis fi fi-cn rounded-circle fs-3"></i>
                </div>
                <h6 class="mb-0">China</h6>
              </td>
              <td class="fw-medium text-center">852</td>
              <td class="d-flex justify-content-end align-items-center">
                <h6 class="mb-0 text-danger">-2.4%</h6>
                <i class="ri-arrow-down-s-line text-danger ri-24px ms-1"></i>
              </td>
            </tr>
            <tr>
              <td class="d-flex align-items-center">
                <div class="avatar avatar-sm flex-shrink-0 me-4">
                  <i class="fis fi fi-pt rounded-circle fs-3"></i>
                </div>
                <h6 class="mb-0">Portugal</h6>
              </td>
              <td class="fw-medium text-center">633</td>
              <td class="d-flex justify-content-end align-items-center">
                <h6 class="mb-0 text-success">+12.4%</h6>
                <i class="ri-arrow-up-s-line text-success ri-24px ms-1"></i>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--/ Subscribers by Countries -->
  <!-- Delivery Performance -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div>
          <h5 class="card-title mb-1">Delivery Performance</h5>
          <p class="card-subtitle mb-0">12% increase in this month</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="deliveryPerformance" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryPerformance">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-6 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded-3 bg-label-primary"><i class="ri-gift-line ri-24px"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0 fw-normal">Packages in transit</h6>
                <small class="text-success fw-normal d-block">
                  <i class="ri-arrow-up-s-line ri-24px"></i>
                  25.8%
                </small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">10k</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded-3 bg-label-info"><i class="ri-car-line ri-24px"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0 fw-normal">Packages out for delivery</h6>
                <small class="text-success fw-normal d-block">
                  <i class="ri-arrow-up-s-line ri-24px"></i>
                  4.3%
                </small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">5k</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded-3 bg-label-success"><i class="ri-check-line text-success ri-24px"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0 fw-normal">Packages delivered</h6>
                <small class="text-danger fw-normal d-block">
                  <i class="ri-arrow-down-s-line ri-24px"></i>
                  12.5
                </small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">15k</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded-3 bg-label-warning"><i class="ri-home-line ri-24px"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0 fw-normal">Delivery success rate</h6>
                <small class="text-success fw-normal d-block">
                  <i class="ri-arrow-up-s-line ri-24px"></i>
                  35.6%
                </small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">95%</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded-3 bg-label-secondary"><i class="ri-timer-line ri-24px"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0 fw-normal">Average delivery time</h6>
                <small class="text-danger fw-normal d-block">
                  <i class="ri-arrow-down-s-line ri-24px"></i>
                  2.15
                </small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">2.5 Days</h6>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded-3 bg-label-danger"><i class="ri-user-line ri-24px"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0 fw-normal">Customer satisfaction</h6>
                <small class="text-success fw-normal d-block">
                  <i class="ri-arrow-up-s-line ri-24px"></i>
                  5.7%
                </small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">4.5/5</h6>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Delivery Performance -->
  <!-- Vehicles Condition -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Vehicles Condition</h5>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="vehiclesCondition" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="vehiclesCondition">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body pt-5">
        <ul class="p-0 m-0">
          <li class="d-flex mb-7">
            <div class="chart-progress me-4" data-color="success" data-series="83" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-8">
                <div class="me-2">
                  <h6 class="mb-2 text-success">Incorrect address</h6>
                  <small>all exceptions</small>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="badge bg-label-secondary rounded-pill">+10%</div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-7">
            <div class="chart-progress me-4" data-color="info" data-series="50" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-8">
                <div class="me-2">
                  <h6 class="mb-2 text-info">Good</h6>
                  <small>24 Vehicles</small>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="badge bg-label-secondary rounded-pill">+8.1</div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-7">
            <div class="chart-progress me-4" data-color="primary" data-series="35" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-8">
                <div class="me-2">
                  <h6 class="mb-2 text-primary">Average</h6>
                  <small class="14 Vehicles">182 Tasks</small>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="badge bg-label-secondary rounded-pill">-2.5%</div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-7">
            <div class="chart-progress me-4" data-color="warning" data-series="28" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-8">
                <div class="me-2">
                  <h6 class="mb-2 text-warning">Bad</h6>
                  <small>8 Vehicles</small>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="badge bg-label-secondary rounded-pill">-3.4%</div>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="chart-progress me-4" data-color="danger" data-series="15" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-8">
                <div class="me-2">
                  <h6 class="mb-2 text-danger">Not Working</h6>
                  <small>4 Vehicles</small>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="badge bg-label-secondary rounded-pill">+12.6%</div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Vehicles Condition -->
  <!-- Popular Instructors -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Popular Instructors</h5>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="popularInstructors" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="popularInstructors">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="px-5 py-4 border border-start-0 border-end-0">
        <div class="d-flex justify-content-between align-items-center">
          <h6 class="mb-0 fs-xsmall text-uppercase fw-normal">Instructors</h6>
          <h6 class="mb-0 fs-xsmall text-uppercase fw-normal">courses</h6>
        </div>
      </div>
      <div class="card-body pt-5">
        <div class="d-flex justify-content-between align-items-center mb-6">
          <div class="d-flex align-items-center">
            <div class="avatar avatar me-4">
              <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-0 text-truncate">Maven Analytics</h6>
                <small class="text-truncate">Business Intelligence</small>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">33</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-6">
          <div class="d-flex align-items-center">
            <div class="avatar avatar me-4">
              <img src="{{asset('assets/img/avatars/2.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-0 text-truncate">Bentlee Emblin</h6>
                <small class="text-truncate">Digital Marketing</small>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">52</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-6">
          <div class="d-flex align-items-center">
            <div class="avatar avatar me-4">
              <img src="{{asset('assets/img/avatars/3.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-0 text-truncate">Benedetto Rossiter</h6>
                <small class="text-truncate">UI/UX Design</small>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">12</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-6">
          <div class="d-flex align-items-center">
            <div class="avatar avatar me-4">
              <img src="{{asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-0 text-truncate">Beverlie Krabbe</h6>
                <small class="text-truncate">React Native</small>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">8</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-6">
          <div class="d-flex align-items-center">
            <div class="avatar avatar me-4">
              <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-0 text-truncate">Nathan Wagner</h6>
                <small class="text-truncate">iOS Developer</small>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">13</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center">
            <div class="avatar avatar me-4">
              <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-0 text-truncate">Alma Gonzalez</h6>
                <small class="text-truncate">Java Developer</small>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">9</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Popular Instructors -->
  <!-- Top Courses -->
  <div class="col-12 col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Top Courses</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="topCourses" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topCourses">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mb-0">
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded-3 bg-label-primary"><i class="ri-vidicon-line ri-24px"></i></span>
            </div>
            <div class="d-sm-flex w-100 align-items-center">
              <div class="w-100 mb-2 mb-sm-0 me-sm-4">
                <h6 class="mb-0">Videography Basic Design Course</h6>
              </div>
              <div class="badge bg-label-secondary rounded-pill">1.2k Views</div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded-3 bg-label-info"><i class="ri-code-fill ri-24px"></i></span>
            </div>
            <div class="d-sm-flex w-100 align-items-center">
              <div class="w-100 mb-2 mb-sm-0 me-sm-4">
                <h6 class="mb-0">Basic Front-end Development Course</h6>
              </div>
              <div class="badge bg-label-secondary rounded-pill">834 Views</div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded-3 bg-label-success"><i class="ri-camera-fill ri-24px"></i></span>
            </div>
            <div class="d-sm-flex w-100 align-items-center">
              <div class="w-100 mb-2 mb-sm-0 me-sm-4">
                <h6 class="mb-0">Basic Fundamentals of Photography</h6>
              </div>
              <div class="badge bg-label-secondary rounded-pill">3.7k Views</div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded-3 bg-label-warning"><i class="ri-palette-line ri-24px"></i></span>
            </div>
            <div class="d-sm-flex w-100 align-items-center">
              <div class="w-100 mb-2 mb-sm-0 me-sm-4">
                <h6 class="mb-0">Advance Dribble Base Visual Design</h6>
              </div>
              <div class="badge bg-label-secondary rounded-pill">2.5k Views</div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded-3 bg-label-danger"><i class="ri-mic-fill ri-24px"></i></span>
            </div>
            <div class="d-sm-flex w-100 align-items-center">
              <div class="w-100 mb-2 mb-sm-0 me-sm-4">
                <h6 class="mb-0">Your First Singing Lesson</h6>
              </div>
              <div class="badge bg-label-secondary rounded-pill">948 Views</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Top Courses -->
  <!-- Upcoming Webinar -->
  <div class="col-12 col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="bg-label-primary text-center mb-6 pt-2 rounded-3">
          <img class="img-fluid w-px-150" src="{{asset('assets/img/illustrations/faq-illustration.png')}}" alt="Boy card image" />
        </div>
        <h5 class="mb-1">Upcoming Webinar</h5>
        <p class="mb-6">Next Generation Frontend Architecture Using Layout Engine And React Native Web.</p>
        <div class="row mb-6 g-4">
          <div class="col-6">
            <div class="d-flex">
              <div class="avatar flex-shrink-0 me-4">
                <span class="avatar-initial rounded-3 bg-label-primary"><i class="ri-calendar-line ri-24px"></i></span>
              </div>
              <div>
                <h6 class="mb-0 text-nowrap fw-normal">17 Nov 23</h6>
                <small>Date</small>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="d-flex">
              <div class="avatar flex-shrink-0 me-4">
                <span class="avatar-initial rounded-3 bg-label-primary"><i class="ri-time-line ri-24px"></i></span>
              </div>
              <div>
                <h6 class="mb-0 text-nowrap fw-normal">32 minutes</h6>
                <small>Duration</small>
              </div>
            </div>
          </div>
        </div>
        <a href="javascript:void(0);" class="btn btn-primary w-100">Join the event</a>
      </div>
    </div>
  </div>
  <!--/ Upcoming Webinar -->
  <!-- Assignment Progress -->
  <div class="col-12 col-xxl-4 col-lg-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Assignment Progress</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="assignProgress" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="assignProgress">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body pt-5">
        <ul class="p-0 m-0">
          <li class="d-flex mb-8">
            <div class="chart-progress me-4" data-color="primary" data-series="72" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">User experience Design</h6>
                  <p class="mb-0 small">120 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon bg-label-secondary">
                  <i class="ri-arrow-right-s-line ri-20px scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
          <li class="d-flex mb-8">
            <div class="chart-progress me-4" data-color="success" data-series="48" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">Basic fundamentals</h6>
                  <p class="mb-0 small">32 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon bg-label-secondary">
                  <i class="ri-arrow-right-s-line ri-20px scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
          <li class="d-flex mb-8">
            <div class="chart-progress me-4" data-color="danger" data-series="15" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">React native components</h6>
                  <p class="mb-0 small">182 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon bg-label-secondary">
                  <i class="ri-arrow-right-s-line ri-20px scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="chart-progress me-4" data-color="info" data-series="24" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">Basic of music theory</h6>
                  <p class="mb-0 small">56 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon bg-label-secondary">
                  <i class="ri-arrow-right-s-line ri-20px scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Assignment Progress -->
  <!-- Timeline -->
  <div class="col-lg-6 col-xxl-8">
    <div class="card">
      <img src="{{asset('assets/img/elements/activity-timeline.png')}}" alt="timeline-image" class="card-img-top h-px-200" style="object-fit: cover;">
      <div class="card-header align-items-center">
        <h5 class="card-action-title mb-0"><i class='ri-bar-chart-2-line ri-24px text-body me-4'></i>Activity Timeline</h5>
      </div>
      <div class="card-body">
        <ul class="timeline mb-0">
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-3">
                <h6 class="mb-0">12 Invoices have been paid</h6>
                <small class="text-muted">12 min ago</small>
              </div>
              <p class="mb-2">
                Invoices have been paid to the company
              </p>
              <div class="d-flex align-items-center mb-1">
                <div class="badge bg-lighter rounded-3">
                  <img src="{{asset('assets/img/icons/misc/pdf.png')}}" alt="img" width="15" class="me-2">
                  <span class="h6 mb-0 text-body">invoices.pdf</span>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-success"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-3">
                <h6 class="mb-0">Client Meeting</h6>
                <small class="text-muted">45 min ago</small>
              </div>
              <p class="mb-2">
                Project meeting with john @10:15am
              </p>
              <div class="d-flex justify-content-between flex-wrap gap-2">
                <div class="d-flex flex-wrap align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <p class="mb-0 small fw-medium">Lester McCarthy (Client)</p>
                    <small>CEO of ThemeSelection</small>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-info"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-3">
                <h6 class="mb-0">Create a new project for client</h6>
                <small class="text-muted">2 Day Ago</small>
              </div>
              <p class="mb-2">
                6 team members in a project
              </p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap p-0">
                  <div class="d-flex flex-wrap align-items-center">
                    <ul class="list-unstyled users-list d-flex align-items-center avatar-group m-0 me-2">
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar pull-up">
                        <img class="rounded-circle" src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" />
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar pull-up">
                        <img class="rounded-circle" src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar" />
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar pull-up">
                        <img class="rounded-circle" src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" />
                      </li>
                      <li class="avatar">
                        <span class="avatar-initial rounded-circle pull-up text-heading" data-bs-toggle="tooltip" data-bs-placement="bottom" title="3 more">+3</span>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Timeline -->

  <!-- Finance App -->
  <div class="col-12 col-xxl-4 col-lg-6">
    <div class="card">
      <img class="card-img-top" src="{{asset('assets/img/elements/iPhone-bg.png')}}" alt="iPhone-bg">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between mb-4">
          <div class="d-flex">
            <div class="badge bg-label-success rounded-pill me-4">UI Design</div>
            <div class="badge bg-label-danger rounded-pill">React</div>
          </div>
          <div class="dropdown">
            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="financeApp" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ri-more-2-line ri-20px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="financeApp">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
        <h5 class="mb-1">Finance ios App</h5>
        <p class="fw-medium small">Due Date: 20/Dec/2022</p>
        <p class="my-4 small">Managing your money isn’t the easiest thing to do. Now that many of us no longer balance a checkbook, tracking and expenses.</p>
        <div class="mb-4">
          <div class="d-flex justify-content-between gap-3">
            <h6 class="mb-2 small">Progress</h6>
            <span class="h6 mb-0 small">68%</span>
          </div>
          <div class="progress w-100 rounded bg-label-success" style="height: 8px;">
            <div class="progress-bar bg-success" style="width: 35%" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <ul class="list-unstyled m-0 d-flex align-items-center avatar-group">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Darcey Nooner" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/10.png')}}" alt="Avatar">
            </li>
          </ul>
          <div class="d-flex">
            <div class="me-3 text-muted">
              <i class="ri-attachment-line ri-24px"></i>
              <span class="fw-medium">24</span>
            </div>
            <div class="me-2 text-muted">
              <i class="ri-checkbox-circle-line ri-24px"></i>
              <span class="fw-medium">74/180</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Finance App  -->
  <!-- Team Members -->
  <div class="col-lg-6 col-xxl-8">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Team Members</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="teamMemberList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamMemberList">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
            <a class="dropdown-item" href="javascript:void(0);">Update</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-borderless">
          <thead>
            <tr class="border-bottom">
              <th class="bg-transparent fs-xsmall">Name</th>
              <th class="bg-transparent fs-xsmall">Project</th>
              <th class="bg-transparent fs-xsmall">Task</th>
              <th class="bg-transparent fs-xsmall">Progress</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar me-4">
                    <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                  <div>
                    <h6 class="mb-1 text-truncate">Dean Hogan</h6>
                    <p class="text-truncate mb-0">IOS developer</p>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-primary rounded-pill">Zipcar</span></td>
              <td>
                <p class="fw-medium"><span class="text-primary">87</span>/135</p>
              </td>
              <td>
                <div class="chart-progress" data-color="primary" data-series="65"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar me-4">
                    <img src="{{asset('assets/img/avatars/8.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                  <div>
                    <h6 class="mb-1 text-truncate">Hilda Rice</h6>
                    <p class="text-truncate mb-0">Laravel developer</p>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-success rounded-pill">Brandi</span></td>
              <td>
                <p class="fw-medium"><span class="text-primary">340</span>/420</p>
              </td>
              <td>
                <div class="chart-progress" data-color="success" data-series="85"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar me-4">
                    <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                  <div>
                    <h6 class="mb-1 text-truncate">Andrew O'Brian</h6>
                    <p class="text-truncate mb-0">React developer</p>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-warning rounded-pill">Payers</span></td>
              <td>
                <p class="fw-medium"><span class="text-primary">50</span>/82</p>
              </td>
              <td>
                <div class="chart-progress" data-color="warning" data-series="50"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar me-4">
                    <img src="{{asset('assets/img/avatars/2.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                  <div>
                    <h6 class="mb-1 text-truncate">Elanor Price</h6>
                    <p class="text-truncate mb-0">Angular developer</p>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-danger rounded-pill">Bitbank</span></td>
              <td>
                <p class="fw-medium"><span class="text-primary">96</span>/260</p>
              </td>
              <td>
                <div class="chart-progress" data-color="danger" data-series="75"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar me-4">
                    <img src="{{asset('assets/img/avatars/11.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                  <div>
                    <h6 class="mb-1 text-truncate">Carl Oliver</h6>
                    <p class="text-truncate mb-0">VueJs developer</p>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-secondary rounded-pill">Aviato</span></td>
              <td>
                <p class="fw-medium"><span class="text-primary">12</span>/25</p>
              </td>
              <td>
                <div class="chart-progress" data-color="secondary" data-series="65"></div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--/ Team Members -->
  <!-- Orders by Countries -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Orders by Countries</h5>
          <span class="text-body mb-0">62 deliveries in progress</span>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="ordersCountries" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ordersCountries">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="nav-align-top">
          <ul class="nav nav-tabs nav-fill" role="tablist">
            <li class="nav-item">
              <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-new" aria-controls="navs-justified-new" aria-selected="true">New</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-link-preparing" aria-controls="navs-justified-link-preparing" aria-selected="false">Preparing</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-link-shipping" aria-controls="navs-justified-link-shipping" aria-selected="false">Shipping</button>
            </li>
          </ul>
          <div class="tab-content border-0 pb-0 px-6 mx-1">
            <div class="tab-pane fade show active" id="navs-justified-new" role="tabpanel">
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-left-dashed">
                  <span class="timeline-indicator-advanced text-success border-0 shadow-none">
                    <i class='ri-checkbox-circle-line ri-20px'></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-50">Myrtle Ullrich</h6>
                    <p class="mb-0 small">101 Boulder, California(CA), 95959</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-transparent">
                  <span class="timeline-indicator-advanced text-primary border-0 shadow-none">
                    <i class='ri-map-pin-line ri-20px'></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-50">Barry Schowalter</h6>
                    <p class="mb-0 small">939 Orange, California(CA), 92118</p>
                  </div>
                </li>
              </ul>
              <div class="border-1 border-light border-top border-dashed mb-2"></div>
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-left-dashed">
                  <span class="timeline-indicator-advanced text-success border-0 shadow-none">
                    <i class='ri-checkbox-circle-line ri-20px'></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-50">Veronica Herman</h6>
                    <p class="mb-0 small">162 Windsor, California(CA), 95492</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-transparent">
                  <span class="timeline-indicator-advanced text-primary border-0 shadow-none">
                    <i class='ri-map-pin-line ri-20px'></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-50">Helen Jacobs</h6>
                    <p class="mb-0 small">487 Sunset, California(CA), 94043</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="navs-justified-link-preparing" role="tabpanel">
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-left-dashed">
                  <span class="timeline-indicator-advanced text-success border-0 shadow-none">
                    <i class='ri-checkbox-circle-line ri-20px'></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-50">Barry Schowalter</h6>
                    <p class="mb-0 small">939 Orange, California(CA), 92118</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-transparent border-left-dashed">
                  <span class="timeline-indicator-advanced text-primary border-0 shadow-none">
                    <i class='ri-map-pin-line ri-20px'></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-50">Myrtle Ullrich</h6>
                    <p class="mb-0 small">101 Boulder, California(CA), 95959 </p>
                  </div>
                </li>
              </ul>
              <div class="border-1 border-light border-top border-dashed mb-2 "></div>
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-left-dashed">
                  <span class="timeline-indicator-advanced text-success border-0 shadow-none">
                    <i class='ri-checkbox-circle-line ri-20px'></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-50">Veronica Herman</h6>
                    <p class="mb-0 small">162 Windsor, California(CA), 95492</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-transparent">
                  <span class="timeline-indicator-advanced text-primary border-0 shadow-none">
                    <i class='ri-map-pin-line ri-20px'></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-50">Helen Jacobs</h6>
                    <p class="mb-0 small">487 Sunset, California(CA), 94043</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="navs-justified-link-shipping" role="tabpanel">
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-left-dashed">
                  <span class="timeline-indicator-advanced text-success border-0 shadow-none">
                    <i class='ri-checkbox-circle-line ri-20px'></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-50">Veronica Herman</h6>
                    <p class="mb-0 small">101 Boulder, California(CA), 95959</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-transparent">
                  <span class="timeline-indicator-advanced text-primary border-0 shadow-none">
                    <i class='ri-map-pin-line ri-20px'></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-50">Barry Schowalter</h6>
                    <p class="mb-0 small">939 Orange, California(CA), 92118</p>
                  </div>
                </li>
              </ul>
              <div class="border-1 border-light border-top border-dashed mb-2 "></div>
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-left-dashed">
                  <span class="timeline-indicator-advanced text-success border-0 shadow-none">
                    <i class='ri-checkbox-circle-line ri-20px'></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-50">Myrtle Ullrich</h6>
                    <p class="mb-0 small">162 Windsor, California(CA), 95492 </p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-transparent">
                  <span class="timeline-indicator-advanced text-primary border-0 shadow-none">
                    <i class='ri-map-pin-line ri-20px'></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-50">Helen Jacobs</h6>
                    <p class="mb-0 small">487 Sunset, California(CA), 94043</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Orders by Countries -->
  <!-- Total Earnings -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Total Earning</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="totalEarning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarning">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="mb-5">
          <div class="d-flex align-items-center">
            <h3 class="mb-0">$24,895</h3>
            <span class="text-success">
              <i class="ri-arrow-up-s-line ri-24px"></i>
              <span>22%</span>
            </span>
          </div>
          <p class="mb-0">Compared to $84,325 last year</p>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 bg-light-gray rounded-3 me-3">
              <img src="{{asset('assets/img/icons/misc/zipcar.png')}}" alt="zipcar">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Zipcar</h6>
                <p class="mb-0">Vuejs, React & HTML</p>
              </div>
              <div>
                <h6 class="mb-2">$24,895.65</h6>
                <div class="progress bg-label-primary" style="height: 4px;">
                  <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 bg-light-gray rounded-3 me-3">
              <img src="{{asset('assets/img/icons/misc/bitbank.png')}}" alt="bitbank">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Bitbank</h6>
                <p class="mb-0">Sketch, Figma & XD</p>
              </div>
              <div>
                <h6 class="mb-2">$8,6500.20</h6>
                <div class="progress bg-label-info" style="height: 4px;">
                  <div class="progress-bar bg-info" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 bg-light-gray rounded-3 me-3">
              <img src="{{asset('assets/img/icons/misc/aviato.png')}}" alt="aviato">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Aviato</h6>
                <p class="mb-0">HTML & Angular</p>
              </div>
              <div>
                <h6 class="mb-2">$1,2450.80</h6>
                <div class="progress bg-label-secondary" style="height: 4px;">
                  <div class="progress-bar bg-secondary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 bg-light-gray rounded-3 me-3">
              <img src="{{asset('assets/img/icons/misc/zipcar.png')}}" alt="zipcar">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Zipcar</h6>
                <p class="mb-0">Vuejs, React & HTML</p>
              </div>
              <div>
                <h6 class="mb-2">$2,7895.65</h6>
                <div class="progress bg-label-warning" style="height: 4px;">
                  <div class="progress-bar bg-warning" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 bg-light-gray rounded-3 me-3">
              <img src="{{asset('assets/img/icons/misc/bitbank.png')}}" alt="bitbank">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Bitbank</h6>
                <p class="mb-0">Sketch, Figma & XD</p>
              </div>
              <div>
                <h6 class="mb-2">$6,4800.20</h6>
                <div class="progress bg-label-danger" style="height: 4px;">
                  <div class="progress-bar bg-danger" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Total Earnings -->
  <!-- Top Referral Source Mobile  -->
  <div class="col-xxl-8">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <div>
          <h5 class="card-title mb-1">Top Referral Sources</h5>
          <p class="card-subtitle mb-0">Number of Sales</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="earningReportsMobileTabsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsMobileTabsId">
            <a class="dropdown-item" href="javascript:void(0);">View More</a>
            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
          </div>
        </div>
      </div>
      <div class="card-body pb-0">
        <ul class="nav nav-tabs nav-tabs-widget pb-6 gap-4 mx-1 d-flex flex-nowrap align-items-center" role="tablist">
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link btn active d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-orders-id-1" aria-controls="navs-orders-id-1" aria-selected="true">
              <div>
                <img src="{{asset('assets/img/products/apple-iPhone-13.png')}}" alt="Mobile" class="img-fluid">
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-orders-id-2" aria-controls="navs-orders-id-2" aria-selected="false">
              <div>
                <img src="{{asset('assets/img/products/apple-iMac-3k.png')}}" alt="Apple iMac 3k" class="img-fluid">
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-orders-id-3" aria-controls="navs-orders-id-3" aria-selected="false">
              <div>
                <img src="{{asset('assets/img/products/gaming-remote.png')}}" alt="Gaming Remote" class="img-fluid">
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link btn d-flex align-items-center justify-content-center disabled" role="tab" data-bs-toggle="tab" aria-selected="false">
              <div class="avatar avatar-sm">
                <div class="avatar-initial bg-label-secondary text-body rounded">
                  <i class="ri-add-line ri-22px"></i>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <div class="tab-content p-0">
        <div class="tab-pane fade show active" id="navs-orders-id-1" role="tabpanel">
          <div class="table-responsive text-nowrap">
            <table class="table border-top">
              <thead>
                <tr>
                  <th class="bg-transparent border-bottom">Image</th>
                  <th class="bg-transparent border-bottom">Name</th>
                  <th class="text-end bg-transparent border-bottom">Status</th>
                  <th class="text-end bg-transparent border-bottom">Revenue</th>
                  <th class="text-end bg-transparent border-bottom">Profit</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <tr>
                  <td>
                    <img src="{{asset('assets/img/products/samsung-s22.png')}}" alt="Mobile" width="34" height="34" class="rounded">
                  </td>
                  <td>Samsung s22</td>
                  <td class="text-end">
                    <div class="badge bg-label-primary rounded-pill">Out of Stock</div>
                  </td>
                  <td class="text-end fw-medium">$12.5k</td>
                  <td class="text-success fw-medium text-end">+24%</td>
                </tr>
                <tr>
                  <td>
                    <img src="{{asset('assets/img/products/apple-iPhone-13-pro.png')}}" alt="Mobile" width="34" height="34" class="rounded">
                  </td>
                  <td>iPhone 14 Pro</td>
                  <td class="text-end">
                    <div class="badge bg-label-success rounded-pill">In Stock</div>
                  </td>
                  <td class="text-end fw-medium">$45k</td>
                  <td class="text-danger fw-medium text-end">-18%</td>
                </tr>
                <tr>
                  <td>
                    <img src="{{asset('assets/img/products/oneplus-9-pro.png')}}" alt="Mobile" width="34" height="34" class="rounded">
                  </td>
                  <td>Oneplus 9 Pro</td>
                  <td class="text-end">
                    <div class="badge bg-label-warning rounded-pill">Upcoming</div>
                  </td>
                  <td class="text-end fw-medium">$98.2k</td>
                  <td class="text-success fw-medium text-end">+55%</td>
                </tr>
                <tr>
                  <td>
                    <img src="{{asset('assets/img/products/google-pixel-6.png')}}" alt="Mobile" width="34" height="34" class="rounded">
                  </td>
                  <td>Google Pixel 6</td>
                  <td class="text-end">
                    <div class="badge bg-label-success rounded-pill">In Stock</div>
                  </td>
                  <td class="text-end fw-medium">$210k</td>
                  <td class="text-success fw-medium text-end">+8%</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-orders-id-2" role="tabpanel">
          <div class="table-responsive text-nowrap">
            <table class="table border-top">
              <thead>
                <tr>
                  <th class="bg-transparent border-bottom">Image</th>
                  <th class="bg-transparent border-bottom">Name</th>
                  <th class="text-end bg-transparent border-bottom">Status</th>
                  <th class="text-end bg-transparent border-bottom">Revenue</th>
                  <th class="text-end bg-transparent border-bottom">Profit</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <tr>
                  <td>
                    <img src="{{asset('assets/img/products/apple-mac-mini.png')}}" alt="Mobile" width="34" height="34" class="rounded">
                  </td>
                  <td>Apple Mac Mini</td>
                  <td class="text-end">
                    <div class="badge bg-label-primary rounded-pill">Out of Stock</div>
                  </td>
                  <td class="text-end fw-medium">$5,576</td>
                  <td class="text-danger fw-medium text-end">-24%</td>
                </tr>
                <tr>
                  <td>
                    <img src="{{asset('assets/img/products/hp-envy-x360.png')}}" alt="Mobile" width="34" height="34" class="rounded">
                  </td>
                  <td>Newest HP Envy x360</td>
                  <td class="text-end">
                    <div class="badge bg-label-info rounded-pill">In Draft</div>
                  </td>
                  <td class="text-end fw-medium">$5</td>
                  <td class="text-success fw-medium text-end">+5%</td>
                </tr>
                <tr>
                  <td>
                    <img src="{{asset('assets/img/products/dell-inspiron-3000.png')}}" alt="Mobile" width="34" height="34" class="rounded">
                  </td>
                  <td>Dell Inspiron 3000</td>
                  <td class="text-end">
                    <div class="badge bg-label-success rounded-pill">In Stock</div>
                  </td>
                  <td class="text-end fw-medium">$850</td>
                  <td class="text-danger fw-medium text-end">-12%</td>
                </tr>
                <tr>
                  <td>
                    <img src="{{asset('assets/img/products/apple-iMac-4k.png')}}" alt="Mobile" width="34" height="34" class="rounded">
                  </td>
                  <td>Apple iMac 4k</td>
                  <td class="text-end">
                    <div class="badge bg-label-danger rounded-pill">warning</div>
                  </td>
                  <td class="text-end fw-medium">$857</td>
                  <td class="text-danger fw-medium text-end">-5%</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-orders-id-3" role="tabpanel">
          <div class="table-responsive text-nowrap">
            <table class="table border-top">
              <thead>
                <tr>
                  <th class="bg-transparent border-bottom">Image</th>
                  <th class="bg-transparent border-bottom">Name</th>
                  <th class="text-end bg-transparent border-bottom">Status</th>
                  <th class="text-end bg-transparent border-bottom">Revenue</th>
                  <th class="text-end bg-transparent border-bottom">Profit</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <tr>
                  <td>
                    <img src="{{asset('assets/img/products/sony-play-station-5.png')}}" alt="Mobile" width="34" height="34" class="rounded">
                  </td>
                  <td>Sony Play Station 5</td>
                  <td class="text-end">
                    <div class="badge bg-label-info rounded-pill">In Draft</div>
                  </td>
                  <td class="text-end fw-medium">$5</td>
                  <td class="text-success fw-medium text-end">+5%</td>
                </tr>
                <tr>
                  <td>
                    <img src="{{asset('assets/img/products/xbox-series-x.png')}}" alt="Mobile" width="34" height="34" class="rounded">
                  </td>
                  <td>XBOX Series X</td>
                  <td class="text-end">
                    <div class="badge bg-label-primary rounded-pill">Out of Stock</div>
                  </td>
                  <td class="text-end fw-medium">$5,576</td>
                  <td class="text-danger fw-medium text-end">-24%</td>
                </tr>
                <tr>
                  <td>
                    <img src="{{asset('assets/img/products/nintendo-switch.png')}}" alt="Mobile" width="34" height="34" class="rounded">
                  </td>
                  <td>Nintendo Switch</td>
                  <td class="text-end">
                    <div class="badge bg-label-warning rounded-pill">Upcoming</div>
                  </td>
                  <td class="text-end fw-medium">$2,857</td>
                  <td class="text-success fw-medium text-end">+5%</td>
                </tr>
                <tr>
                  <td>
                    <img src="{{asset('assets/img/products/sup-game-box-400.png')}}" alt="Mobile" width="34" height="34" class="rounded">
                  </td>
                  <td>SUP Game Box 400</td>
                  <td class="text-end">
                    <div class="badge bg-label-success rounded-pill">In Stock</div>
                  </td>
                  <td class="text-end fw-medium">$850</td>
                  <td class="text-danger fw-medium text-end">-12%</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Top Referral Source Mobile -->
  <!-- Finance Summary -->
  <div class="col-md-6 col-xxl-5">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div>
          <h5 class="card-title mb-1 me-2">Finance Summary</h5>
          <p class="card-subtitle mb-0">Check out each Column for more details</p>
        </div>
        <span class="badge bg-label-primary rounded-circle p-2">
          <i class="ri-question-line ri-28px"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="row align-items-center g-4">
          <div class="col-sm-6">
            <p class="mb-1">Annual Companies Taxes</p>
            <h5>$1450.35</h5>
          </div>
          <div class="col-sm-6">
            <p class="mb-1">Next Tax Review Date</p>
            <h5>July 14, 2021</h5>
          </div>
          <div class="col-sm-6">
            <p class="mb-1">Average Product Price</p>
            <h5>$85.50</h5>
          </div>
          <div class="col-sm-6">
            <p class="mb-1">Satisfaction Rate</p>
            <div class="d-flex align-items-center mb-3">
              <div class="progress w-50 bg-label-primary" style="height: 6px;">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="ms-2 mb-0">75%</p>
            </div>
          </div>
          <div class="col-sm-6 pt-3">
            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar pull-up">
                <img class="rounded-circle" src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar pull-up">
                <img class="rounded-circle" src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar pull-up">
                <img class="rounded-circle" src="{{asset('assets/img/avatars/4.png')}}" alt="Avatar">
              </li>
              <li class="avatar">
                <span class="avatar-initial rounded-circle pull-up bg-lighter text-body" data-bs-toggle="tooltip" data-bs-placement="bottom" title="4 more">+4</span>
              </li>
            </ul>
          </div>
          <div class="col-sm-6 pt-3">
            <span class="badge bg-label-primary rounded-pill">5 Days Ago</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Finance Summary -->
</div>

@include('_partials/_modals/modal-add-new-cc')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modal -->
<script type="module">
// Check selected custom option
window.Helpers.initCustomOptionCheck();
</script>

@endsection

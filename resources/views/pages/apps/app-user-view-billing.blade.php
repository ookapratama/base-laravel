@extends('layouts/layoutMaster')

@section('title', 'User View - Pages')

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
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.js',
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/cleavejs/cleave-phone.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/tagify/tagify.js',
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
  'resources/assets/js/app-user-view.js',
  'resources/assets/js/app-user-view-billing.js'
])
@endsection

@section('content')
<div class="row">
  <!-- User Sidebar -->
  <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- User Card -->
    <div class="card mb-6">
      <div class="card-body pt-12">
        <div class="user-avatar-section">
          <div class=" d-flex align-items-center flex-column">
            <img class="img-fluid rounded mb-4" src="{{asset('assets/img/avatars/1.png')}}" height="120" width="120" alt="User avatar" />
            <div class="user-info text-center">
              <h5>Violet Mendoza</h5>
              <span class="badge bg-label-danger rounded-pill">Subscriber</span>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-around flex-wrap my-6 gap-0 gap-md-3 gap-lg-4">
          <div class="d-flex align-items-center me-5 gap-4">
            <div class="avatar">
              <div class="avatar-initial bg-label-primary rounded-3">
                <i class='ri-check-line ri-24px'></i>
              </div>
            </div>
            <div>
              <h5 class="mb-0">1.23k</h5>
              <span>Task Done</span>
            </div>
          </div>
          <div class="d-flex align-items-center gap-4">
            <div class="avatar">
              <div class="avatar-initial bg-label-primary rounded-3">
                <i class='ri-briefcase-line ri-24px'></i>
              </div>
            </div>
            <div>
              <h5 class="mb-0">568</h5>
              <span>Project Done</span>
            </div>
          </div>
        </div>
        <h5 class="pb-4 border-bottom mb-4">Details</h5>
        <div class="info-container">
          <ul class="list-unstyled mb-6">
            <li class="mb-2">
              <span class="fw-medium text-heading me-2">Username:</span>
              <span>violet.dev</span>
            </li>
            <li class="mb-2">
              <span class="fw-medium text-heading me-2">Email:</span>
              <span>vafgot@vultukir.org</span>
            </li>
            <li class="mb-2">
              <span class="fw-medium text-heading me-2">Status:</span>
              <span class="badge bg-label-success rounded-pill">Active</span>
            </li>
            <li class="mb-2">
              <span class="fw-medium text-heading me-2">Role:</span>
              <span>Author</span>
            </li>
            <li class="mb-2">
              <span class="fw-medium text-heading me-2">Tax id:</span>
              <span>Tax-8965</span>
            </li>
            <li class="mb-2">
              <span class="fw-medium text-heading me-2">Contact:</span>
              <span>(123) 456-7890</span>
            </li>
            <li class="mb-2">
              <span class="fw-medium text-heading me-2">Languages:</span>
              <span>French</span>
            </li>
            <li class="mb-2">
              <span class="fw-medium text-heading me-2">Country:</span>
              <span>England</span>
            </li>
          </ul>
          <div class="d-flex justify-content-center">
            <a href="javascript:;" class="btn btn-primary me-4" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
            <a href="javascript:;" class="btn btn-outline-danger suspend-user">Suspend</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /User Card -->
    <!-- Plan Card -->
    <div class="card mb-6 border border-2 border-primary">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start">
          <span class="badge bg-label-primary rounded-pill">Standard</span>
          <div class="d-flex justify-content-center">
            <sup class="h5 pricing-currency mt-5 mb-0 me-1 text-primary">$</sup>
            <h1 class="mb-0 text-primary">99</h1>
            <sub class="h6 pricing-duration mt-auto mb-3 fw-normal">month</sub>
          </div>
        </div>
        <ul class="list-unstyled g-2 my-6">
          <li class="mb-2 d-flex align-items-center"><i class="ri-circle-fill text-body ri-10px me-2"></i><span>10 Users</span></li>
          <li class="mb-2 d-flex align-items-center"><i class="ri-circle-fill text-body ri-10px me-2"></i><span>Up to 10 GB storage</span></li>
          <li class="mb-2 d-flex align-items-center"><i class="ri-circle-fill text-body ri-10px me-2"></i><span>Basic Support</span></li>
        </ul>
        <div class="d-flex justify-content-between align-items-center mb-1 fw-medium text-heading">
          <span>Days</span>
          <span>26 of 30 Days</span>
        </div>
        <div class="progress mb-1 rounded">
          <div class="progress-bar rounded" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <small>4 days remaining</small>
        <div class="d-grid w-100 mt-6">
          <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</button>
        </div>
      </div>
    </div>
    <!-- /Plan Card -->
  </div>
  <!--/ User Sidebar -->


  <!-- User Content -->
  <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
    <!-- User Tabs -->
    <div class="nav-align-top">
      <ul class="nav nav-pills flex-column flex-md-row mb-6 row-gap-2">
        <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/account')}}"><i class="ri-group-line me-2"></i>Account</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/security')}}"><i class="ri-lock-2-line me-2"></i>Security</a></li>
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="ri-bookmark-line me-2"></i>Billing & Plans</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/notifications')}}"><i class="ri-notification-4-line me-2"></i>Notifications</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/connections')}}"><i class="ri-link-m me-2"></i>Connections</a></li>
      </ul>
    </div>
    <!--/ User Tabs -->

    <!-- Current Plan -->
    <div class="card mb-6">
      <h5 class="card-header">Current Plan</h5>
      <div class="card-body">
        <div class="row row-gap-4">
          <div class="col-xl-6 order-1 order-xl-0">
            <div class="mb-4">
              <h6 class="mb-1">Your Current Plan is Basic</h6>
              <p>A simple start for everyone</p>
            </div>
            <div class="mb-4">
              <h6 class="mb-1">Active until Dec 09, 2021</h6>
              <p>We will send you a notification upon Subscription expiration</p>
            </div>
            <div class="mb-6">
              <h6 class="mb-1"><span class="me-2">$199 Per Month</span> <span class="badge bg-label-primary rounded-pill">Popular</span></h6>
              <p>Standard plan for small to medium businesses</p>
            </div>
          </div>
          <div class="col-xl-6 order-0 order-xl-0">
            <div class="alert alert-warning mb-4 alert-dismissible" role="alert">
              <h5 class="alert-heading mb-1 d-flex align-items-center">
                <span class="alert-icon rounded-3"><i class="ri-alert-line ri-22px"></i></span>
                <span>We need your attention!</span>
              </h5>
              <span class="ms-11 ps-1">Your plan requires update</span>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            <div class="plan-statistics">
              <div class="d-flex justify-content-between">
                <h6 class="mb-1">Days</h6>
                <h6 class="mb-1">26 of 30 Days</h6>
              </div>
              <div class="progress mb-1 rounded">
                <div class="progress-bar rounded" style="width: 20%;" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small>Your plan requires update</small>
            </div>
          </div>
          <div class="col-12 order-2 order-xl-0 d-flex flex-wrap gap-4">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#upgradePlanModal">Upgrade Plan</button>
            <button class="btn btn-outline-danger cancel-subscription">Cancel Subscription</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /Current Plan -->

    <!-- Payment Methods -->
    <div class="card card-action mb-6">
      <div class="card-header align-items-center">
        <h5 class="card-action-title mb-0">Payment Methods</h5>
        <div class="card-action-element">
          <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addNewCCModal"><i class="ri-add-line ri-14px me-1"></i>Add Card</button>
        </div>
      </div>
      <div class="card-body">
        <div class="added-cards">
          <div class="cardMaster border p-5 rounded-4 mb-4">
            <div class="d-flex justify-content-between flex-sm-row flex-column">
              <div class="card-information">
                <img class="mb-2 img-fluid" src="{{asset('assets/img/icons/payments/mastercard.png')}}" alt="Master Card">
                <div class="d-flex align-items-center mb-2">
                  <h6 class="mb-0 me-2">Kaith Morrison</h6>
                  <span class="badge bg-label-primary me-1 rounded-pill">Popular</span>
                </div>
                <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; 9856</span>
              </div>
              <div class="d-flex flex-column text-start text-lg-end">
                <div class="d-flex order-sm-0 order-1 mt-sm-2">
                  <button class="btn btn-sm btn-outline-primary me-4" data-bs-toggle="modal" data-bs-target="#editCCModal">Edit</button>
                  <button class="btn btn-sm btn-outline-danger">Delete</button>
                </div>
                <small class="mt-sm-4 mt-2 order-sm-1 order-0 text-sm-end mb-2">Card expires at 12/26</small>
              </div>
            </div>
          </div>
          <div class="cardMaster border p-5 rounded-4 mb-4">
            <div class="d-flex justify-content-between flex-sm-row flex-column">
              <div class="card-information">
                <img class="mb-2 img-fluid" src="{{asset('assets/img/icons/payments/visa.png')}}" alt="Master Card">
                <h6 class="mb-2 me-2">Tom McBride</h6>
                <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; 6542</span>
              </div>
              <div class="d-flex flex-column text-start text-lg-end">
                <div class="d-flex order-sm-0 order-1 mt-sm-2">
                  <button class="btn btn-sm btn-outline-primary me-4" data-bs-toggle="modal" data-bs-target="#editCCModal">Edit</button>
                  <button class="btn btn-sm btn-outline-danger">Delete</button>
                </div>
                <small class="mt-sm-4 mt-2 order-sm-1 order-0 text-sm-end mb-2">Card expires at 10/24</small>
              </div>
            </div>
          </div>
          <div class="cardMaster border p-5 rounded-4">
            <div class="d-flex justify-content-between flex-sm-row flex-column">
              <div class="card-information">
                <img class="mb-2 img-fluid" src="{{asset('assets/img/icons/payments/american-express-logo.png')}}" alt="Visa Card">
                <div class="d-flex align-items-center mb-2">
                  <h6 class="mb-0 me-2">Lester Jennings</h6>
                  <span class="badge bg-label-danger me-1 rounded-pill">Expired</span>
                </div>
                <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; 5896</span>
              </div>
              <div class="d-flex flex-column text-start text-lg-end">
                <div class="d-flex order-sm-0 order-1 mt-sm-2">
                  <button class="btn btn-sm btn-outline-primary me-4" data-bs-toggle="modal" data-bs-target="#editCCModal">Edit</button>
                  <button class="btn btn-sm btn-outline-danger">Delete</button>
                </div>
                <small class="mt-sm-4 mt-2 order-sm-1 order-0 text-sm-end mb-2">Card expires at 10/27</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Payment Methods -->

    <!-- Billing Address -->
    <div class="card card-action mb-6">
      <div class="card-header align-items-center">
        <h5 class="card-action-title mb-0">Billing Address</h5>
        <div class="card-action-element">
          <button class="btn btn-sm btn-primary edit-address" type="button" data-bs-toggle="modal" data-bs-target="#addNewAddress"><i class='ri-add-line ri-14px me-1'></i>Edit address</button>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-xl-7 col-12">
            <dl class="row mb-0 gx-2">
              <dt class="col-sm-5 col-xxl-4 mb-2 text-nowrap fw-medium text-heading">Company Name:</dt>
              <dd class="col-sm-7 col-xxl-8">{{ config('variables.templateName') }}</dd>

              <dt class="col-sm-5 col-xxl-4 mb-2 text-nowrap fw-medium text-heading">Billing Email:</dt>
              <dd class="col-sm-7 col-xxl-8">user@ex.com</dd>

              <dt class="col-sm-5 col-xxl-4 mb-2 text-nowrap fw-medium text-heading">Tax ID:</dt>
              <dd class="col-sm-7 col-xxl-8">TAX-357378</dd>

              <dt class="col-sm-5 col-xxl-4 mb-2 text-nowrap fw-medium text-heading">VAT Number:</dt>
              <dd class="col-sm-7 col-xxl-8">SDF754K77</dd>

              <dt class="col-sm-5 col-xxl-4 mb-2 text-nowrap fw-medium text-heading mb-0">Billing Address:</dt>
              <dd class="col-sm-7 col-xxl-8 mb-2 mb-xl-0">100 Water Plant <br>Avenue, Building 1303<br> Wake Island</dd>
            </dl>
          </div>
          <div class="col-xl-5 col-12">
            <dl class="row mb-0 gx-2">
              <dt class="col-sm-5 col-xxl-4 mb-2 text-nowrap fw-medium text-heading">Contact:</dt>
              <dd class="col-sm-7 col-xxl-8">+1 (605) 977-32-65</dd>

              <dt class="col-sm-5 col-xxl-4 mb-2 text-nowrap fw-medium text-heading">Country:</dt>
              <dd class="col-sm-7 col-xxl-8">Wake Island</dd>

              <dt class="col-sm-5 col-xxl-4 mb-2 text-nowrap fw-medium text-heading">State:</dt>
              <dd class="col-sm-7 col-xxl-8">Capholim</dd>

              <dt class="col-sm-5 col-xxl-4 mb-2 text-nowrap fw-medium text-heading">Zipcode:</dt>
              <dd class="col-sm-7 col-xxl-8">403114</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!--/ Billing Address -->
  </div>
  <!--/ User Content -->
</div>

<!-- Modal -->
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-edit-cc')
@include('_partials/_modals/modal-add-new-address')
@include('_partials/_modals/modal-add-new-cc')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modal -->

@endsection

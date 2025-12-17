@extends('layouts/layoutMaster')

@section('title', 'eCommerce Customer Details Overview - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/tagify/tagify.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
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
  'resources/assets/js/app-ecommerce-customer-detail.js',
  'resources/assets/js/app-ecommerce-customer-detail-overview.js'
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
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="ri-group-line me-2"></i>Overview</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/ecommerce/customer/details/security')}}"><i class="ri-lock-2-line me-2"></i>Security</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/ecommerce/customer/details/billing')}}"><i class="ri-map-pin-line me-2"></i>Address & Billing</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/ecommerce/customer/details/notifications')}}"><i class="ri-notification-4-line me-2"></i>Notifications</a></li>
      </ul>
    </div>
    <!--/ Customer Pills -->

    <!--  Customer cards -->
    <div class="row text-nowrap">
      <div class="col-md-6 mb-6">
        <div class="card h-100">
          <div class="card-body">
            <div class="card-icon mb-2">
              <div class="avatar">
                <div class="avatar-initial rounded-3 bg-label-primary"><i class='ri-money-dollar-circle-line ri-24px'></i>
                </div>
              </div>
            </div>
            <div class="card-info">
              <h5 class="card-title mb-2">Account Balance</h5>
              <div class="d-flex align-items-baseline gap-1">
                <h5 class="text-primary mb-0">$2345</h5>
                <p class="mb-0"> Credit Left</p>
              </div>
              <p class="mb-0 text-truncate">Account balance for next purchase</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-6">
        <div class="card">
          <div class="card-body">
            <div class="card-icon mb-2">
              <div class="avatar">
                <div class="avatar-initial rounded-3 bg-label-success"><i class='ri-gift-line ri-24px'></i>
                </div>
              </div>
            </div>
            <div class="card-info">
              <h5 class="card-title mb-2">Loyalty Program</h5>
              <span class="badge bg-label-success mb-2 rounded-pill">Platinum member</span>
              <p class="mb-0">3000 points to next tier</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-6">
        <div class="card">
          <div class="card-body">
            <div class="card-icon mb-2">
              <div class="avatar">
                <div class="avatar-initial rounded-3 bg-label-warning"><i class='ri-star-smile-line ri-24px'></i>
                </div>
              </div>
            </div>
            <div class="card-info">
              <h5 class="card-title mb-2">Wishlist</h5>
              <div class="d-flex align-items-baseline gap-1">
                <h5 class="text-warning mb-0">15</h5>
                <p class="mb-0">Items in wishlist</p>
              </div>
              <p class="mb-0 text-truncate">Receive notification when items go on sale</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-6">
        <div class="card">
          <div class="card-body">
            <div class="card-icon mb-2">
              <div class="avatar">
                <div class="avatar-initial rounded-3 bg-label-info"><i class='ri-vip-crown-line ri-24px'></i>
                </div>
              </div>
            </div>
            <div class="card-info">
              <h5 class="card-title mb-2">Coupons</h5>
              <div class="d-flex align-items-baseline gap-1">
                <h5 class="text-info mb-0">21</h5>
                <p class="mb-0">Coupons you win</p>
              </div>

              <p class="mb-0 text-truncate">Use coupon on next purchase</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ customer cards -->


    <!-- Invoice table -->
    <div class="card mb-6">
      <div class="table-responsive mb-4">
        <table class="table datatables-customer-order">
          <thead>
            <tr>
              <th></th>
              <th>Order</th>
              <th>Date</th>
              <th>Status</th>
              <th>Spent</th>
              <th>Actions</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <!-- /Invoice table -->
  </div>
  <!--/ Customer Content -->
</div>

<!-- Modal -->
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modal -->
@endsection

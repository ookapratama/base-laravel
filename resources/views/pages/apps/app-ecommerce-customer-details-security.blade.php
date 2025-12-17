@extends('layouts/layoutMaster')

@section('title', 'eCommerce Customer Details Security - Apps')

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
  'resources/assets/js/modal-enable-otp.js',
  'resources/assets/js/app-ecommerce-customer-detail.js',
  'resources/assets/js/app-user-view-security.js'
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
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="ri-lock-2-line me-2"></i>Security</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/ecommerce/customer/details/billing')}}"><i class="ri-map-pin-line me-2"></i>Address & Billing</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/ecommerce/customer/details/notifications')}}"><i class="ri-notification-4-line me-2"></i>Notifications</a></li>
      </ul>
    </div>
    <!--/ Customer Pills -->
    <!-- Change Password -->
    <div class="card mb-6">
      <h5 class="card-header">Change Password</h5>
      <div class="card-body">
        <form id="formChangePassword" method="POST" onsubmit="return false">
          <div class="alert alert-warning alert-dismissible" role="alert">
            <h5 class="alert-heading mb-1">Ensure that these requirements are met</h5>
            <span>Minimum 8 characters long, uppercase & symbol</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <div class="row gx-5">
            <div class="mb-3 col-12 col-sm-6 form-password-toggle">
              <div class="input-group input-group-merge">
                <div class="form-floating form-floating-outline">
                  <input class="form-control" type="password" id="newPassword" name="newPassword" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                  <label for="newPassword">New Password</label>
                </div>
                <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line"></i></span>
              </div>
            </div>
            <div class="mb-3 col-12 col-sm-6 form-password-toggle">
              <div class="input-group input-group-merge">
                <div class="form-floating form-floating-outline">
                  <input class="form-control" type="password" name="confirmPassword" id="confirmPassword" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                  <label for="confirmPassword">Confirm New Password</label>
                </div>
                <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line"></i></span>
              </div>
            </div>
            <div>
              <button type="submit" class="btn btn-primary me-2">Change Password</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!--/ Change Password -->

    <!-- Two-steps verification -->
    <div class="card mb-6">
      <div class="card-header">
        <h5 class="mb-0">Two-steps verification</h5>
        <span class="card-subtitle mt-0">Keep your account secure with authentication step.</span>
      </div>
      <div class="card-body">
        <h6 class="mb-1">SMS</h6>
        <div class="mb-4">
          <div class="d-flex w-100 action-icons">
            <input id="defaultInput" class="form-control form-control-sm me-5" type="text" placeholder="+1(968) 945-8832">
            <a href="javascript:;" class="btn btn-icon btn-outline-secondary me-2" data-bs-target="#enableOTP" data-bs-toggle="modal"><i class="ri-edit-box-line ri-22px"></i></a>
            <a href="javascript:;" class="btn btn-icon btn-outline-secondary"><i class="ri-user-add-line ri-22px"></i></a>
          </div>
        </div>
        <p class="mb-0">Two-factor authentication adds an additional layer of security to your account by requiring more than just a password to log in.
          <a href="javascript:void(0);" class="text-primary">Learn more.</a>
        </p>
      </div>
    </div>
    <!--/ Two-steps verification -->

    <!-- Recent Devices -->
    <div class="card mb-6">
      <h5 class="card-header">Recent Devices</h5>
      <div class="table-responsive">
        <table class="table table-border-bottom-0">
          <thead>
            <tr>
              <th class="text-truncate">Browser</th>
              <th class="text-truncate">Device</th>
              <th class="text-truncate">Location</th>
              <th class="text-truncate">Recent Activities</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-truncate"><img src="{{asset('assets/img/icons/brands/chrome.png')}}" alt="Chrome" class="me-4" width="22" height="22"><span class="text-heading">Chrome on Windows</span></td>
              <td class="text-truncate">HP Spectre 360</td>
              <td class="text-truncate">Switzerland</td>
              <td class="text-truncate">10, July 2021 20:07</td>
            </tr>
            <tr>
              <td class="text-truncate"><img src="{{asset('assets/img/icons/brands/chrome.png')}}" alt="Chrome" class="me-4" width="22" height="22"><span class="text-heading">Chrome on iPhone</span></td>
              <td class="text-truncate">iPhone 12x</td>
              <td class="text-truncate">Australia</td>
              <td class="text-truncate">13, July 2021 10:10</td>
            </tr>
            <tr>
              <td class="text-truncate"><img src="{{asset('assets/img/icons/brands/chrome.png')}}" alt="Chrome" class="me-4" width="22" height="22"><span class="text-heading">Chrome on Android</span></td>
              <td class="text-truncate">Oneplus 9 Pro</td>
              <td class="text-truncate">Dubai</td>
              <td class="text-truncate">14, July 2021 15:15</td>
            </tr>
            <tr>
              <td class="text-truncate"><img src="{{asset('assets/img/icons/brands/chrome.png')}}" alt="Chrome" class="me-4" width="22" height="22"><span class="text-heading">Chrome on MacOS</span></td>
              <td class="text-truncate">Apple iMac</td>
              <td class="text-truncate">India</td>
              <td class="text-truncate">16, July 2021 16:17</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Recent Devices -->
  </div>
  <!--/ Customer Content -->
</div>

<!-- Modal -->
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-enable-otp')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modal -->
@endsection

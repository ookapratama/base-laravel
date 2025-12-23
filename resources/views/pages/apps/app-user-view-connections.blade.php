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
  'resources/assets/js/app-user-view.js'
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
        <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/billing')}}"><i class="ri-bookmark-line me-2"></i>Billing & Plans</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/notifications')}}"><i class="ri-notification-4-line me-2"></i>Notifications</a></li>
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="ri-link-m me-2"></i>Connections</a></li>
      </ul>
    </div>
    <!--/ User Tabs -->
    <!-- Connected Accounts -->
    <div class="card mb-6">
      <div class="card-header">
        <h5 class="mb-0">Connected Accounts</h5>
        <p class="my-0 card-subtitle">Display content from your connected accounts on your site</p>
      </div>
      <div class="card-body pt-0">
        <div class="d-flex mb-4">
          <div class="flex-shrink-0">
            <img src="{{asset('assets/img/icons/brands/google.png')}}" alt="google" class="me-4" height="36">
          </div>
          <div class="flex-grow-1 d-flex align-items-center justify-content-between">
            <div class="mb-sm-0 mb-2">
              <h6 class="mb-50">Google</h6>
              <span>Calendar and contacts</span>
            </div>
            <div>
              <div class="form-check form-switch mb-0">
                <input type="checkbox" class="form-check-input" checked />
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex mb-4 align-items-center">
          <div class="flex-shrink-0">
            <img src="{{asset('assets/img/icons/brands/slack.png')}}" alt="slack" class="me-4" height="36">
          </div>
          <div class="flex-grow-1 d-flex align-items-center justify-content-between">
            <div class="mb-sm-0 mb-2">
              <h6 class="mb-50">Slack</h6>
              <span>Communication</span>
            </div>
            <div>
              <div class="form-check form-switch mb-0">
                <input type="checkbox" class="form-check-input" />
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex mb-4 align-items-center">
          <div class="flex-shrink-0">
            <img src="{{asset('assets/img/icons/brands/github.png')}}" alt="github" class="me-4" height="36">
          </div>
          <div class="flex-grow-1 d-flex align-items-center justify-content-between">
            <div class="mb-sm-0 mb-2">
              <h6 class="mb-50">Github</h6>
              <span>Manage your Git repositories</span>
            </div>
            <div>
              <div class="form-check form-switch mb-0">
                <input type="checkbox" class="form-check-input" checked />
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex mb-4 align-items-center">
          <div class="flex-shrink-0">
            <img src="{{asset('assets/img/icons/brands/mailchimp.png')}}" alt="mailchimp" class="me-4" height="36">
          </div>
          <div class="flex-grow-1 d-flex align-items-center justify-content-between">
            <div class="mb-sm-0 mb-2">
              <h6 class="mb-50">Mailchimp</h6>
              <span>Email marketing service</span>
            </div>
            <div>
              <div class="form-check form-switch mb-0">
                <input type="checkbox" class="form-check-input" checked />
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="{{asset('assets/img/icons/brands/asana.png')}}" alt="asana" class="me-4" height="36">
          </div>
          <div class="flex-grow-1 d-flex align-items-center justify-content-between">
            <div class="mb-sm-0 mb-2">
              <h6 class="mb-50">Asana</h6>
              <span>Communication</span>
            </div>
            <div>
              <div class="form-check form-switch mb-0">
                <input type="checkbox" class="form-check-input" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Connected Accounts -->

    <!-- Social Accounts -->
    <div class="card mb-6">
      <div class="card-header">
        <h5 class="mb-0">Social Accounts</h5>
        <p class="my-0 card-subtitle">Display content from social accounts on your site</p>
      </div>
      <div class="card-body pt-0">
        <!-- Social Accounts -->
        <div class="d-flex mb-4 align-items-center">
          <div class="flex-shrink-0">
            <img src="{{asset('assets/img/icons/brands/facebook.png')}}" alt="facebook" class="me-4" height="36">
          </div>
          <div class="flex-grow-1 row align-items-center me-n1">
            <div class="col-7 mb-sm-0 mb-2">
              <h6 class="mb-50">Facebook</h6>
              <span>Not Connected</span>
            </div>
            <div class="col-5 text-end">
              <button class="btn btn-outline-secondary btn-icon"><i class="ri-link ri-22px"></i></button>
            </div>
          </div>
        </div>
        <div class="d-flex mb-4 align-items-center">
          <div class="flex-shrink-0">
            <img src="{{asset('assets/img/icons/brands/twitter.png')}}" alt="twitter" class="me-4" height="36">
          </div>
          <div class="flex-grow-1 row align-items-center me-n1">
            <div class="col-7 mb-sm-0 mb-2">
              <h6 class="mb-1">Twitter</h6>
              <a href="{{config('variables.twitterUrl')}}" target="_blank">{{'@'.config('variables.creatorName')}}</a>
            </div>
            <div class="col-5 text-end">
              <button class="btn btn-outline-danger btn-icon"><i class="ri-delete-bin-7-line ri-22px"></i></button>
            </div>
          </div>
        </div>
        <div class="d-flex mb-4 align-items-center">
          <div class="flex-shrink-0">
            <img src="{{asset('assets/img/icons/brands/instagram.png')}}" alt="instagram" class="me-4" height="36">
          </div>
          <div class="flex-grow-1 row align-items-center me-n1">
            <div class="col-7 mb-sm-0 mb-2">
              <h6 class="mb-1">instagram</h6>
              <a href="{{config('variables.instagramUrl')}}" target="_blank">{{'@'.config('variables.creatorName')}}</a>
            </div>
            <div class="col-5 text-end">
              <button class="btn btn-outline-danger btn-icon"><i class="ri-delete-bin-7-line ri-22px"></i></button>
            </div>
          </div>
        </div>
        <div class="d-flex mb-4 align-items-center">
          <div class="flex-shrink-0">
            <img src="{{asset('assets/img/icons/brands/dribbble.png')}}" alt="dribbble" class="me-4" height="36">
          </div>
          <div class="flex-grow-1 row align-items-center me-n1">
            <div class="col-7 mb-sm-0 mb-2">
              <h6 class="mb-50">Dribbble</h6>
              <span>Not Connected</span>
            </div>
            <div class="col-5 text-end">
              <button class="btn btn-outline-secondary btn-icon"><i class="ri-link ri-22px"></i></button>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="{{asset('assets/img/icons/brands/behance.png')}}" alt="behance" class="me-4" height="36">
          </div>
          <div class="flex-grow-1 row align-items-center me-n1">
            <div class="col-7 mb-sm-0 mb-2">
              <h6 class="mb-50">Behance</h6>
              <span>Not Connected</span>
            </div>
            <div class="col-5 text-end">
              <button class="btn btn-outline-secondary btn-icon"><i class="ri-link ri-22px"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Social Accounts -->
</div>

<!-- Modals -->
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modals -->
@endsection

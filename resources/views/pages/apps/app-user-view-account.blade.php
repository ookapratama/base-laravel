@extends('layouts/layoutMaster')

@section('title', 'User View - Pages')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss',
  'resources/assets/vendor/libs/animate-css/animate.scss',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/tagify/tagify.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss'
])
@endsection

@section('page-style')
@vite([
  'resources/assets/vendor/scss/pages/page-user-view.scss'
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
  'resources/assets/js/app-user-view.js',
  'resources/assets/js/app-user-view-account.js'
])
@endsection

@section('content')
<div class="row gy-6 gy-md-0">
  <!-- User Sidebar -->
  <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- User Card -->
    <div class="card mb-6">
      <div class="card-body pt-12">
        <div class="user-avatar-section">
          <div class=" d-flex align-items-center flex-column">
            <img class="img-fluid rounded-3 mb-4" src="{{asset('assets/img/avatars/1.png')}}" height="120" width="120" alt="User avatar" />
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
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="ri-group-line me-2"></i>Account</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/security')}}"><i class="ri-lock-2-line me-2"></i>Security</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/billing')}}"><i class="ri-bookmark-line me-2"></i>Billing & Plans</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/notifications')}}"><i class="ri-notification-4-line me-2"></i>Notifications</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/connections')}}"><i class="ri-link-m me-2"></i>Connections</a></li>
      </ul>
    </div>
    <!--/ User Tabs -->

    <!-- Project table -->
    <div class="card mb-6">
      <div class="table-responsive">
        <table class="table datatable-project table-border-bottom-0">
          <thead>
            <tr>
              <th></th>
              <th>Project</th>
              <th class="text-nowrap">Total Task</th>
              <th>Progress</th>
              <th>Hours</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <!-- /Project table -->

    <!-- Activity Timeline -->
    <div class="card mb-6">
      <h5 class="card-header">User Activity Timeline</h5>
      <div class="card-body pt-0">
        <ul class="timeline mb-0 mt-2">
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
                <div class="badge bg-lighter rounded-3 mb-1_5">
                  <img src="{{asset('assets/img/icons/misc/pdf.png')}}" alt="img" width="15" class="me-2">
                  <span class="h6 mb-0 text-secondary">invoices.pdf</span>
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
              <div class="d-flex justify-content-between flex-wrap gap-2 mb-1_5">
                <div class="d-flex flex-wrap align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <img src="{{asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <p class="mb-0 small fw-medium">Lester McCarthy (Client)</p>
                    <small>CEO of {{ config('variables.creatorName') }}</small>
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
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-top-0 p-0">
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
    <!-- /Activity Timeline -->

    <!-- Invoice table -->
    <div class="card">
      <div class="table-responsive mb-4">
        <table class="table datatable-invoice">
          <thead>
            <tr>
              <th></th>
              <th>#</th>
              <th>Status</th>
              <th>Total</th>
              <th>Issued Date</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <!-- /Invoice table -->
  </div>
  <!--/ User Content -->
</div>

<!-- Modal -->
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modal -->
@endsection

@extends('layouts/layoutMaster')

@section('title', 'User Profile - Profile')

<!-- Vendor Styles -->
@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss'
])
@endsection

<!-- Page Styles -->
@section('page-style')
@vite(['resources/assets/vendor/scss/pages/page-profile.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite(['resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/pages-profile-user.js'])
@endsection

@section('content')
<!-- Header -->
<div class="row">
  <div class="col-12">
    <div class="card mb-6">
      <div class="user-profile-header-banner">
        <img src="{{asset('assets/img/pages/profile-banner.png')}}" alt="Banner image" class="rounded-top">
      </div>
      <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-5">
        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="user image" class="d-block h-auto ms-0 ms-sm-5 rounded-4 user-profile-img">
        </div>
        <div class="flex-grow-1 mt-4 mt-sm-12">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-6">
            <div class="user-profile-info">
              <h4 class="mb-2">John Doe</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4">
                <li class="list-inline-item">
                  <i class='ri-palette-line me-2 ri-24px'></i><span class="fw-medium">UX Designer</span>
                </li>
                <li class="list-inline-item">
                  <i class='ri-map-pin-line me-2 ri-24px'></i><span class="fw-medium">Vatican City</span>
                </li>
                <li class="list-inline-item">
                  <i class='ri-calendar-line me-2 ri-24px'></i><span class="fw-medium"> Joined April 2021</span></li>
              </ul>
            </div>
            <a href="javascript:void(0)" class="btn btn-primary">
              <i class='ri-user-follow-line ri-16px me-2'></i>Connected
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Header -->

<!-- Navbar pills -->
<div class="row">
  <div class="col-md-12">
    <div class="nav-align-top">
      <ul class="nav nav-pills flex-column flex-sm-row mb-6 row-gap-2">
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class='ri-user-3-line me-2'></i>Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-teams')}}"><i class='ri-team-line me-2'></i>Teams</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-projects')}}"><i class='ri-computer-line me-2'></i>Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-connections')}}"><i class='ri-link-m me-2'></i>Connections</a></li>
      </ul>
    </div>
  </div>
</div>
<!--/ Navbar pills -->

<!-- User Profile Content -->
<div class="row">
  <div class="col-xl-4 col-lg-5 col-md-5">
    <!-- About User -->
    <div class="card mb-6">
      <div class="card-body">
        <small class="card-text text-uppercase text-muted small">About</small>
        <ul class="list-unstyled my-3 py-1">
          <li class="d-flex align-items-center mb-4"><i class="ri-user-3-line ri-24px"></i><span class="fw-medium mx-2">Full Name:</span> <span>John Doe</span></li>
          <li class="d-flex align-items-center mb-4"><i class="ri-check-line ri-24px"></i><span class="fw-medium mx-2">Status:</span> <span>Active</span></li>
          <li class="d-flex align-items-center mb-4"><i class="ri-star-smile-line ri-24px"></i><span class="fw-medium mx-2">Role:</span> <span>Developer</span></li>
          <li class="d-flex align-items-center mb-4"><i class="ri-flag-2-line ri-24px"></i><span class="fw-medium mx-2">Country:</span> <span>USA</span></li>
          <li class="d-flex align-items-center mb-2"><i class="ri-translate-2 ri-24px"></i><span class="fw-medium mx-2">Languages:</span> <span>English</span></li>
        </ul>
        <small class="card-text text-uppercase text-muted small">Contacts</small>
        <ul class="list-unstyled my-3 py-1">
          <li class="d-flex align-items-center mb-4"><i class="ri-phone-line ri-24px"></i><span class="fw-medium mx-2">Contact:</span> <span>(123) 456-7890</span></li>
          <li class="d-flex align-items-center mb-4"><i class="ri-wechat-line ri-24px"></i><span class="fw-medium mx-2">Skype:</span> <span>john.doe</span></li>
          <li class="d-flex align-items-center mb-2"><i class="ri-mail-open-line ri-24px"></i><span class="fw-medium mx-2">Email:</span> <span>john.doe@example.com</span></li>
        </ul>
        <small class="card-text text-uppercase text-muted small">Teams</small>
        <ul class="list-unstyled mb-0 mt-3 pt-1">
          <li class="d-flex align-items-center mb-4"><i class="ri-github-line ri-24px text-body me-2"></i>
            <div class="d-flex flex-wrap"><span class="fw-medium me-2">Backend Developer</span><span>(126 Members)</span></div>
          </li>
          <li class="d-flex align-items-center"><i class="ri-reactjs-line ri-24px text-body me-2"></i>
            <div class="d-flex flex-wrap"><span class="fw-medium me-2">React Developer</span><span>(98 Members)</span></div>
          </li>
        </ul>
      </div>
    </div>
    <!--/ About User -->
    <!-- Profile Overview -->
    <div class="card mb-6">
      <div class="card-body">
        <small class="card-text text-uppercase text-muted small">Overview</small>
        <ul class="list-unstyled mb-0 mt-3 pt-1">
          <li class="d-flex align-items-center mb-4"><i class="ri-check-line ri-24px"></i><span class="fw-medium mx-2">Task Compiled:</span> <span>13.5k</span></li>
          <li class="d-flex align-items-center mb-4"><i class="ri-user-3-line ri-24px"></i><span class="fw-medium mx-2">Projects Compiled:</span> <span>146</span></li>
          <li class="d-flex align-items-center"><i class="ri-star-smile-line ri-24px"></i><span class="fw-medium mx-2">Connections:</span> <span>897</span></li>
        </ul>
      </div>
    </div>
    <!--/ Profile Overview -->
  </div>
  <div class="col-xl-8 col-lg-7 col-md-7">
    <!-- Activity Timeline -->
    <div class="card card-action mb-6">
      <div class="card-header align-items-center">
        <h5 class="card-action-title mb-0"><i class='ri-bar-chart-2-line ri-24px text-body me-4'></i>Activity Timeline</h5>
        <div class="card-action-element">
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-2-line ri-22px text-muted"></i></button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="javascript:void(0);">Share timeline</a></li>
              <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body pt-5">
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
              <div class="d-flex align-items-center">
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
    <!--/ Activity Timeline -->
    <div class="row">
      <!-- Connections -->
      <div class="col-lg-12 col-xl-6">
        <div class="card card-action mb-6">
          <div class="card-header align-items-center">
            <h5 class="card-action-title mb-0">Connections</h5>
            <div class="card-action-element">
              <div class="dropdown">
                <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-2-line ri-22px text-muted"></i></button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="javascript:void(0);">Share connections</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mb-0">
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="{{asset('assets/img/avatars/2.png')}}" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">Cecilia Payne</h6>
                      <small>45 Connections</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <button class="btn btn-outline-primary btn-icon"><i class="ri-user-add-line ri-22px"></i></button>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="{{asset('assets/img/avatars/3.png')}}" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">Curtis Fletcher</h6>
                      <small>1.32k Connections</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <button class="btn btn-primary btn-icon"><i class="ri-user-3-line ri-22px"></i></button>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="{{asset('assets/img/avatars/8.png')}}" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">Alice Stone</h6>
                      <small>125 Connections</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <button class="btn btn-primary btn-icon"><i class="ri-user-3-line ri-22px"></i></button>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">Darrell Barnes</h6>
                      <small>456 Connections</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <button class="btn btn-outline-primary btn-icon"><i class="ri-user-add-line ri-22px"></i></button>
                  </div>
                </div>
              <li class="mb-5">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">Eugenia Moore</h6>
                      <small>1.2k Connections</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <button class="btn btn-outline-primary btn-icon"><i class="ri-user-add-line ri-22px"></i></button>
                  </div>
                </div>
              </li>
              <li class="text-center">
                <a href="javascript:;">View all connections</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Connections -->
      <!-- Teams -->
      <div class="col-lg-12 col-xl-6">
        <div class="card card-action mb-6">
          <div class="card-header align-items-center">
            <h5 class="card-action-title mb-0">Teams</h5>
            <div class="card-action-element">
              <div class="dropdown">
                <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-2-line ri-24px text-muted"></i></button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="javascript:void(0);">Share teams</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mb-0">
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="{{asset('assets/img/icons/brands/react-label.png')}}" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">React Developers</h6>
                      <small>72 Members</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:;"><span class="badge bg-label-danger rounded-pill">Developer</span></a>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="{{asset('assets/img/icons/brands/support-label.png')}}" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">Support Team</h6>
                      <small>122 Members</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:;"><span class="badge bg-label-primary rounded-pill">Support</span></a>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="{{asset('assets/img/icons/brands/figma-label.png')}}" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">UI Designers</h6>
                      <small>7 Members</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:;"><span class="badge bg-label-info rounded-pill">Designer</span></a>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="{{asset('assets/img/icons/brands/vue-label.png')}}" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">Vue.js Developers</h6>
                      <small>289 Members</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:;"><span class="badge bg-label-danger rounded-pill">Developer</span></a>
                  </div>
                </div>
              </li>
              <li class="mb-5">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="{{asset('assets/img/icons/brands/twitter-label.png')}}" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-w">
                      <h6 class="mb-1">Digital Marketing</h6>
                      <small>24 Members</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:;"><span class="badge bg-label-secondary rounded-pill">Marketing</span></a>
                  </div>
                </div>
              </li>
              <li class="text-center">
                <a href="javascript:;">View all teams</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Teams -->
    </div>

    <!-- Projects table -->
    <div class="card mb-4">
      <h5 class="card-header">Project List</h5>
      <div class="card-datatable table-responsive pb-0">
        <table class="table datatable-project table-border-bottom-0">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>Project</th>
              <th>leader</th>
              <th>teams</th>
              <th>Progress</th>
              <th>Actions</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <!--/ Projects table -->
  </div>
</div>
<!--/ User Profile Content -->
@endsection

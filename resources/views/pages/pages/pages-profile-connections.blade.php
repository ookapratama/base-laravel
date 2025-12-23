@extends('layouts/layoutMaster')

@section('title', 'User Profile - Connections')

<!-- Page -->
@section('page-style')
@vite(['resources/assets/vendor/scss/pages/page-profile.scss'])
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
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="user image" class="d-block h-auto ms-0 ms-sm-5 rounded user-profile-img">
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
                  <i class='ri-map-pin-line me-2 ri-24px'></i> <span class="fw-medium">Vatican City</span>
                </li>
                <li class="list-inline-item">
                  <i class='ri-calendar-line me-2 ri-24px'></i> <span class="fw-medium"> Joined April 2021</span></li>
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
        <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-user')}}"><i class='ri-user-3-line me-2'></i> Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-teams')}}"><i class='ri-team-line me-2'></i> Teams</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-projects')}}"><i class='ri-computer-line me-2'></i> Projects</a></li>
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class='ri-link-m me-2'></i> Connections</a></li>
      </ul>
    </div>
  </div>
</div>
<!--/ Navbar pills -->

<!-- Connection Cards -->
<div class="row g-6">
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn dropdown-toggle hide-arrow p-4" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-2-line ri-22px text-muted"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto my-6">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar Image" class="rounded-circle w-px-100" />
        </div>
        <h5 class="mb-0 card-title">Mark Gilbert</h5>
        <span>UI Designer</span>
        <div class="d-flex align-items-center justify-content-center my-6 gap-2">
          <a href="javascript:;" class="me-2"><span class="badge bg-label-secondary rounded-pill">Figma</span></a>
          <a href="javascript:;"><span class="badge bg-label-warning rounded-pill">Sketch</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around mb-6">
          <div>
            <h5 class="mb-0">18</h5>
            <span>Projects</span>
          </div>
          <div>
            <h5 class="mb-0">834</h5>
            <span>Tasks</span>
          </div>
          <div>
            <h5 class="mb-0">129</h5>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-4"><i class="ri-user-follow-line ri-16px me-2"></i>Connected</a>
          <a href="javascript:;" class="btn btn-outline-secondary btn-icon"><i class="ri-mail-open-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn dropdown-toggle hide-arrow p-4" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-2-line ri-22px text-muted"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto my-6">
          <img src="{{asset('assets/img/avatars/8.png')}}" alt="Avatar Image" class="rounded-circle w-px-100" />
        </div>
        <h5 class="mb-0 card-title">Eugenia Parsons</h5>
        <span>Developer</span>
        <div class="d-flex align-items-center justify-content-center my-6 gap-2">
          <a href="javascript:;" class="me-2"><span class="badge bg-label-danger rounded-pill">Angular</span></a>
          <a href="javascript:;"><span class="badge bg-label-info rounded-pill">React</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around mb-6">
          <div>
            <h5 class="mb-0">112</h5>
            <span>Projects</span>
          </div>
          <div>
            <h5 class="mb-0">23.1k</h5>
            <span>Tasks</span>
          </div>
          <div>
            <h5 class="mb-0">1.28k</h5>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-outline-primary d-flex align-items-center me-4"><i class="ri-user-add-line ri-16px me-2"></i>Connect</a>
          <a href="javascript:;" class="btn btn-outline-secondary btn-icon"><i class="ri-mail-open-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn dropdown-toggle hide-arrow p-4" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-2-line ri-22px text-muted"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto my-6">
          <img src="{{asset('assets/img/avatars/3.png')}}" alt="Avatar Image" class="rounded-circle w-px-100" />
        </div>
        <h5 class="mb-0 card-title">Francis Byrd</h5>
        <span>Developer</span>
        <div class="d-flex align-items-center justify-content-center my-6 gap-2">
          <a href="javascript:;" class="me-2"><span class="badge bg-label-info rounded-pill">React</span></a>
          <a href="javascript:;"><span class="badge bg-label-primary rounded-pill">HTML</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around mb-6">
          <div>
            <h5 class="mb-0">32</h5>
            <span>Projects</span>
          </div>
          <div>
            <h5 class="mb-0">1.25k</h5>
            <span>Tasks</span>
          </div>
          <div>
            <h5 class="mb-0">890</h5>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-outline-primary d-flex align-items-center me-4"><i class="ri-user-add-line ri-16px me-2"></i>Connect</a>
          <a href="javascript:;" class="btn btn-outline-secondary btn-icon"><i class="ri-mail-open-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn dropdown-toggle hide-arrow p-4" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-2-line ri-22px text-muted"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto my-6">
          <img src="{{asset('assets/img/avatars/18.png')}}" alt="Avatar Image" class="rounded-circle w-px-100" />
        </div>
        <h5 class="mb-0 card-title">Leon Lucas</h5>
        <span>UI/UX Designer</span>
        <div class="d-flex align-items-center justify-content-center my-6 gap-2">
          <a href="javascript:;" class="me-2"><span class="badge bg-label-secondary rounded-pill">Figma</span></a>
          <a href="javascript:;" class="me-2"><span class="badge bg-label-warning rounded-pill">Sketch</span></a>
          <a href="javascript:;"><span class="badge bg-label-primary rounded-pill">Photoshop</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around mb-6">
          <div>
            <h5 class="mb-0">86</h5>
            <span>Projects</span>
          </div>
          <div>
            <h5 class="mb-0">12.4k</h5>
            <span>Tasks</span>
          </div>
          <div>
            <h5 class="mb-0">890</h5>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-outline-primary d-flex align-items-center me-4"><i class="ri-user-add-line ri-16px me-2"></i>Connect</a>
          <a href="javascript:;" class="btn btn-outline-secondary btn-icon"><i class="ri-mail-open-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn dropdown-toggle hide-arrow p-4" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-2-line ri-22px text-muted"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto my-6">
          <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar Image" class="rounded-circle w-px-100" />
        </div>
        <h5 class="mb-0 card-title">Jayden Rogers</h5>
        <span>Full Stack Developer</span>
        <div class="d-flex align-items-center justify-content-center my-6 gap-2">
          <a href="javascript:;" class="me-2"><span class="badge bg-label-info rounded-pill">React</span></a>
          <a href="javascript:;" class="me-2"><span class="badge bg-label-danger rounded-pill">Angular</span></a>
          <a href="javascript:;"><span class="badge bg-label-primary rounded-pill">HTML</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around mb-6">
          <div>
            <h5 class="mb-0">244</h5>
            <span>Projects</span>
          </div>
          <div>
            <h5 class="mb-0">23.8k</h5>
            <span>Tasks</span>
          </div>
          <div>
            <h5 class="mb-0">2.14k</h5>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-4"><i class="ri-user-follow-line ri-16px me-2"></i>Connected</a>
          <a href="javascript:;" class="btn btn-outline-secondary btn-icon"><i class="ri-mail-open-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn dropdown-toggle hide-arrow p-4" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-2-line ri-22px text-muted"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto my-6">
          <img src="{{asset('assets/img/avatars/10.png')}}" alt="Avatar Image" class="rounded-circle w-px-100" />
        </div>
        <h5 class="mb-0 card-title">Jeanette Powell</h5>
        <span>SEO</span>
        <div class="d-flex align-items-center justify-content-center my-6 gap-2">
          <a href="javascript:;" class="me-2"><span class="badge bg-label-success rounded-pill">Writing</span></a>
          <a href="javascript:;"><span class="badge bg-label-secondary rounded-pill">Analysis</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around mb-6">
          <div>
            <h5 class="mb-0">32</h5>
            <span>Projects</span>
          </div>
          <div>
            <h5 class="mb-0">1.28k</h5>
            <span>Tasks</span>
          </div>
          <div>
            <h5 class="mb-0">1.27k</h5>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-outline-primary d-flex align-items-center me-4"><i class="ri-user-add-line ri-16px me-2"></i>Connect</a>
          <a href="javascript:;" class="btn btn-outline-secondary btn-icon"><i class="ri-mail-open-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Connection Cards -->
@endsection

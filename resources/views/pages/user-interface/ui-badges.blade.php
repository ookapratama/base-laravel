@extends('layouts/layoutMaster')

@section('title', 'Badges - UI elements')

@section('content')
<div class="row">
  <!-- Basic Badges -->
  <div class="col-lg">
    <div class="card mb-6">
      <h5 class="card-header">Basic Badges</h5>
      <div class="card-body">
        <div class="text-light small fw-medium">Default</div>
        <div class="demo-inline-spacing">
          <span class="badge bg-primary">Primary</span>
          <span class="badge bg-secondary">Secondary</span>
          <span class="badge bg-success">Success</span>
          <span class="badge bg-danger">Danger</span>
          <span class="badge bg-warning">Warning</span>
          <span class="badge bg-info">Info</span>
          <span class="badge bg-dark">Dark</span>
        </div>
      </div>
      <hr class="m-0" />
      <div class="card-body">
        <div class="text-light small fw-medium">Pills</div>

        <div class="demo-inline-spacing">
          <span class="badge rounded-pill bg-primary">Primary</span>
          <span class="badge rounded-pill bg-secondary">Secondary</span>
          <span class="badge rounded-pill bg-success">Success</span>
          <span class="badge rounded-pill bg-danger">Danger</span>
          <span class="badge rounded-pill bg-warning">Warning</span>
          <span class="badge rounded-pill bg-info">Info</span>
          <span class="badge rounded-pill bg-dark">Dark</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Label Badges -->
  <div class="col-lg">
    <div class="card mb-6">
      <h5 class="card-header">Label Badges</h5>
      <div class="card-body">
        <div class="text-light small fw-medium">Label Default</div>

        <div class="demo-inline-spacing">
          <span class="badge bg-label-primary">Primary</span>
          <span class="badge bg-label-secondary">Secondary</span>
          <span class="badge bg-label-success">Success</span>
          <span class="badge bg-label-danger">Danger</span>
          <span class="badge bg-label-warning">Warning</span>
          <span class="badge bg-label-info">Info</span>
          <span class="badge bg-label-dark">Dark</span>
        </div>
      </div>
      <hr class="m-0" />
      <div class="card-body">
        <div class="text-light small fw-medium">Label Pills</div>

        <div class="demo-inline-spacing">
          <span class="badge rounded-pill bg-label-primary">Primary</span>
          <span class="badge rounded-pill bg-label-secondary">Secondary</span>
          <span class="badge rounded-pill bg-label-success">Success</span>
          <span class="badge rounded-pill bg-label-danger">Danger</span>
          <span class="badge rounded-pill bg-label-warning">Warning</span>
          <span class="badge rounded-pill bg-label-info">Info</span>
          <span class="badge rounded-pill bg-label-dark">Dark</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">

  <!-- Button with Badges -->
  <div class="col-lg">
    <div class="card mb-6">
      <h5 class="card-header">Button with Badges</h5>
      <div class="row row-bordered g-0">
        <div class="col-xl-4 p-6 pt-0">
          <small class="text-light fw-medium">Default</small>
          <div class="demo-vertical-spacing">
            <button type="button" class="btn btn-primary me-2">
              Text
              <span class="badge badge-center bg-white text-primary ms-1">4</span>
            </button>
            <button type="button" class="btn btn-primary me-2">
              Text
              <span class="badge badge-center bg-secondary rounded-pill ms-1">4</span>
            </button>
          </div>
        </div>
        <div class="col-xl-4 p-6 pt-xl-0">
          <small class="text-light fw-medium">Label</small>
          <div class="demo-vertical-spacing">
            <button type="button" class="btn btn-label-primary me-2">
              Text
              <span class="badge badge-center bg-white text-primary ms-1">4</span>
            </button>
            <button type="button" class="btn btn-label-primary me-2">
              Text
              <span class="badge badge-center bg-secondary rounded-pill ms-1">4</span>
            </button>
          </div>
        </div>

        <div class="col-xl-4 p-6 pt-xl-0">
          <small class="text-light fw-medium">Outline</small>
          <div class="demo-vertical-spacing">
            <button type="button" class="btn btn-outline-primary me-2">
              Text
              <span class="badge badge-center ms-1">4</span>
            </button>
            <button type="button" class="btn btn-outline-secondary me-2">
              Text
              <span class="badge badge-center rounded-pill ms-1">4</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <!-- Badge Circle -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">Badge Circle & Square Style</h5>
      <div class="row row-bordered g-0">
        <div class="col-lg-6 p-6 pt-0">
          <h6>Basic</h6>
          <div class="text-light small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill bg-primary">1</span>
              <span class="badge badge-center rounded-pill bg-secondary">2</span>
              <span class="badge badge-center rounded-pill bg-success">3</span>
              <span class="badge badge-center rounded-pill bg-danger">4</span>
              <span class="badge badge-center rounded-pill bg-warning">5</span>
              <span class="badge badge-center rounded-pill bg-info">6</span>
            </p>
            <p>
              <span class="badge badge-center bg-primary">1</span>
              <span class="badge badge-center bg-secondary">2</span>
              <span class="badge badge-center bg-success">3</span>
              <span class="badge badge-center bg-danger">4</span>
              <span class="badge badge-center bg-warning">5</span>
              <span class="badge badge-center bg-info">6</span>
            </p>
          </div>
        </div>
        <div class="col-lg-6 p-6 pt-lg-0">
          <h6>Label</h6>
          <div class="text-light small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill bg-label-primary">1</span>
              <span class="badge badge-center rounded-pill bg-label-secondary">2</span>
              <span class="badge badge-center rounded-pill bg-label-success">3</span>
              <span class="badge badge-center rounded-pill bg-label-danger">4</span>
              <span class="badge badge-center rounded-pill bg-label-warning">5</span>
              <span class="badge badge-center rounded-pill bg-label-info">6</span>
            </p>
            <p>
              <span class="badge badge-center bg-label-primary">1</span>
              <span class="badge badge-center bg-label-secondary">2</span>
              <span class="badge badge-center bg-label-success">3</span>
              <span class="badge badge-center bg-label-danger">4</span>
              <span class="badge badge-center bg-label-warning">5</span>
              <span class="badge badge-center bg-label-info">6</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Badge Circle with Icons -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">Badge Circle & Square With Icon</h5>
      <div class="row row-bordered g-0">
        <div class="col-lg-6 p-6 pt-0">
          <h6>Basic</h6>
          <div class="text-light small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill bg-primary"><i class='ri-star-line'></i></span>
              <span class="badge badge-center rounded-pill bg-secondary"><i class='ri-notification-4-line'></i></span>
              <span class="badge badge-center rounded-pill bg-success"><i class='ri-check-line'></i></span>
              <span class="badge badge-center rounded-pill bg-danger"><i class='ri-money-dollar-circle-line'></i></span>
              <span class="badge badge-center rounded-pill bg-warning"><i class='ri-pie-chart-line'></i></span>
              <span class="badge badge-center rounded-pill bg-info"><i class='ri-funds-line'></i></span>
            </p>
            <p>
              <span class="badge badge-center bg-primary"><i class='ri-star-line'></i></span>
              <span class="badge badge-center bg-secondary"><i class='ri-notification-4-line'></i></span>
              <span class="badge badge-center bg-success"><i class='ri-check-line'></i></span>
              <span class="badge badge-center bg-danger"><i class='ri-money-dollar-circle-line'></i></span>
              <span class="badge badge-center bg-warning"><i class='ri-pie-chart-line'></i></span>
              <span class="badge badge-center bg-info"><i class='ri-funds-line'></i></span>
            </p>
          </div>
        </div>
        <div class="col-lg-6 p-6 pt-lg-0">
          <h6>Label</h6>
          <div class="text-light small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill bg-label-primary"><i class='ri-star-line'></i></span>
              <span class="badge badge-center rounded-pill bg-label-secondary"><i class='ri-notification-4-line'></i></span>
              <span class="badge badge-center rounded-pill bg-label-success"><i class='ri-check-line'></i></span>
              <span class="badge badge-center rounded-pill bg-label-danger"><i class='ri-money-dollar-circle-line'></i></span>
              <span class="badge badge-center rounded-pill bg-label-warning"><i class='ri-pie-chart-line'></i></span>
              <span class="badge badge-center rounded-pill bg-label-info"><i class='ri-funds-line'></i></span>
            </p>
            <p>
              <span class="badge badge-center bg-label-primary"><i class='ri-star-line'></i></span>
              <span class="badge badge-center bg-label-secondary"><i class='ri-notification-4-line'></i></span>
              <span class="badge badge-center bg-label-success"><i class='ri-check-line'></i></span>
              <span class="badge badge-center bg-label-danger"><i class='ri-money-dollar-circle-line'></i></span>
              <span class="badge badge-center bg-label-warning"><i class='ri-pie-chart-line'></i></span>
              <span class="badge badge-center bg-label-info"><i class='ri-funds-line'></i></span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dots -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">Dots Style</h5>
      <div class="card-body d-sm-flex d-block">
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0">
          <span class="badge badge-dot bg-primary me-1"></span> Primary
        </div>
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0">
          <span class="badge badge-dot bg-secondary me-1"></span> Secondary
        </div>
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0">
          <span class="badge badge-dot bg-success me-1"></span> Success
        </div>
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0">
          <span class="badge badge-dot bg-danger me-1"></span> Danger
        </div>
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0">
          <span class="badge badge-dot bg-warning me-1"></span> Warning
        </div>
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0">
          <span class="badge badge-dot bg-info me-1"></span> Info
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <!-- Notifications -->
  <div class="col-lg">
    <div class="card mb-6">
      <h5 class="card-header">Button with Badges Notification</h5>
      <div class="card-body demo-inline-spacing gap-4">
        <button type="button" class="btn btn-label-primary text-nowrap d-inline-flex position-relative me-4">
          Badge
          <span class="position-absolute top-0 start-100 translate-middle badge badge-center bg-primary text-white">2</span>
        </button>
        <button type="button" class="btn btn-warning text-nowrap d-inline-flex position-relative me-4">
          Label Badge
          <span class="position-absolute top-0 start-100 translate-middle badge badge-center bg-label-warning border border-warning">2</span>
        </button>
        <button type="button" class="btn btn-label-info text-nowrap d-inline-flex position-relative me-4">
          Pill
          <span class="position-absolute top-0 start-100 translate-middle badge badge-center rounded-pill bg-info text-white">2</span>
        </button>
        <button type="button" class="btn btn-label-danger text-nowrap d-inline-flex position-relative">
          Dot
          <span class="position-absolute top-0 start-100 translate-middle badge badge-dot border border-2 p-2 bg-danger"></span>
        </button>
      </div>
    </div>
  </div>
  <div class="col-lg">
    <div class="card mb-6">
      <h5 class="card-header">Notifications With Icons</h5>
      <div class="card-body demo-inline-spacing gap-4">
        <div class="text-light small fw-medium mt-0">Small badge notifications.</div>
        <div class="text-nowrap d-inline-flex position-relative me-4">
          <span class="tf-icons ri-mail-line"></span>
          <span class="position-absolute top-0 start-100 translate-middle badge bg-primary text-white badge-notifications">6</span>
        </div>
        <div class="text-nowrap d-inline-flex position-relative me-4">
          <span class="tf-icons ri-twitter-fill"></span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-label-info text-info badge-notifications">5</span>
        </div>
        <div class="text-nowrap d-inline-flex position-relative me-4">
          <span class="tf-icons ri-notification-4-line"></span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger text-white badge-notifications">4</span>
        </div>
        <div class="text-nowrap d-inline-flex position-relative me-4">
          <span class="tf-icons ri-facebook-circle-fill"></span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger badge-dot"></span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg">
    <div class="card mb-6">
      <h5 class="card-header">Badges Position</h5>
      <div class="card-body">
        <div class="text-light small fw-medium mb-2">Position using utility classes like <code>top-*</code>, <code>start-*</code>, etc...</div>
        <div class="demo-inline-spacing">
          <div class="avatar d-inline-flex position-relative me-4">
            <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
            <span class="position-absolute top-0 start-100 translate-middle badge badge-center rounded-pill bg-primary text-white">4</span>
          </div>
          <div class="avatar d-inline-flex position-relative me-4">
            <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
            <span class="position-absolute top-100 start-0 translate-middle badge badge-center rounded-pill bg-primary text-white">4</span>
          </div>
          <div class="avatar d-inline-flex position-relative me-4">
            <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
            <span class="position-absolute top-100 start-100 translate-middle badge badge-center rounded-pill bg-primary text-white">4</span>
          </div>
          <div class="avatar d-inline-flex position-relative me-4">
            <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
            <span class="position-absolute top-0 start-0 translate-middle badge badge-center rounded-pill bg-primary text-white">4</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg">
    <div class="card mb-6">
      <h5 class="card-header">Badge Overlaps for Shapes</h5>
      <div class="card-body">
        <div class="text-light small fw-medium mb-2">Using <code>rounded-*</code> utilities for avatar & <code>.badge-dot</code> class for notification</div>
        <div class="demo-inline-spacing">
          <div class="avatar d-inline-flex position-relative me-4">
            <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar">
            <span class="position-absolute top-0 start-100 translate-middle badge badge-dot rounded-pill bg-primary"></span>
          </div>
          <div class="avatar d-inline-flex position-relative me-4">
            <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-1">
            <span class="position-absolute top-0 start-100 translate-middle badge badge-dot border rounded-pill bg-primary"></span>
          </div>
          <div class="avatar d-inline-flex position-relative me-4">
            <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-2">
            <span class="position-absolute top-0 start-100 translate-middle badge badge-dot p-2 rounded-pill bg-primary"></span>
          </div>
          <div class="avatar d-inline-flex position-relative me-4">
            <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded">
            <span class="position-absolute top-0 start-100 translate-middle badge badge-dot rounded-pill bg-primary"></span>
          </div>
          <div class="avatar d-inline-flex position-relative me-4">
            <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-3">
            <span class="position-absolute top-0 start-100 translate-middle badge badge-dot p-2 border border-2 rounded-pill bg-primary"></span>
          </div>
          <div class="avatar d-inline-flex position-relative me-4">
            <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
            <span class="position-absolute top-0 start-100 translate-middle badge badge-center border rounded-pill bg-primary">9</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg">
    <div class="card mb-lg-0 mb-6">
      <h5 class="card-header">Maximum Values</h5>
      <div class="card-body pt-4">
        <div class="avatar d-inline-flex position-relative me-4">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary text-white">99</span>
        </div>
        <div class="avatar d-inline-flex position-relative me-4">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary text-white">99+</span>
        </div>
        <div class="avatar d-inline-flex position-relative me-4">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary text-white">999+</span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg">
    <div class="card">
      <h5 class="card-header">Custom label Badges</h5>
      <div class="card-body pt-4 d-flex flex-wrap gap-6">
        <div class="avatar d-inline-flex position-relative">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
          <span class="position-absolute top-0 start-100 translate-middle badge badge-center rounded-pill bg-label-primary">4</span>
        </div>
        <div class="avatar d-inline-flex position-relative">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
          <span class="position-absolute top-0 start-100 translate-middle badge badge-center rounded-pill bg-label-secondary">4</span>
        </div>
        <div class="avatar d-inline-flex position-relative">
          <span class="avatar-initial rounded-circle bg-success">pi</span>
          <span class="position-absolute top-0 start-100 translate-middle badge badge-center rounded-pill bg-label-success">4</span>
        </div>
        <div class="avatar d-inline-flex position-relative">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
          <span class="position-absolute top-0 start-100 translate-middle badge badge-center rounded-pill bg-label-danger">4</span>
        </div>
        <div class="avatar d-inline-flex position-relative">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
          <span class="position-absolute top-0 start-100 translate-middle badge badge-center rounded-pill bg-label-warning">4</span>
        </div>
        <div class="avatar d-inline-flex position-relative">
          <span class="avatar-initial rounded-circle bg-info">pi</span>
          <span class="position-absolute top-0 start-100 translate-middle badge badge-center rounded-pill bg-label-info">4</span>
        </div>
        <div class="avatar d-inline-flex position-relative">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
          <span class="position-absolute top-0 start-100 translate-middle badge badge-center rounded-pill bg-label-dark">4</span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

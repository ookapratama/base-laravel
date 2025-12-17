@extends('layouts/layoutMaster')

@section('title', 'Academy - Dashboard - App')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss',
  'resources/assets/vendor/libs/apex-charts/apex-charts.scss'
  ])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/apex-charts/apexcharts.js',
  ])
@endsection

@section('page-script')
@vite('resources/assets/js/app-academy-dashboard.js')
@endsection

@section('content')
<!-- Hour chart  -->
<div class="card bg-transparent shadow-none border-0 mb-6">
  <div class="card-body row g-6 p-0 pb-5">
    <div class="col-12 col-md-8 card-separator">
      <h5 class="mb-2">Welcome back,<span class="h4 fw-semibold"> Felecia 👋🏻</span></h5>
      <div class="col-12 col-lg-5">
        <p>Your progress this week is Awesome. let's keep it up and get a lot of points reward !</p>
      </div>
      <div class="d-flex justify-content-between flex-wrap gap-4 me-12">
        <div class="d-flex align-items-center gap-4 me-6 me-sm-0">
          <div class="avatar avatar-lg">
            <div class="avatar-initial bg-label-primary rounded-3">
              <div>
                <img src="{{asset('assets/svg/icons/laptop.svg')}}" alt="paypal" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="content-right">
            <p class="mb-1 fw-medium">Hours Spent</p>
            <span class="text-primary mb-0 h5">34h</span>
          </div>
        </div>
        <div class="d-flex align-items-center gap-4">
          <div class="avatar avatar-lg">
            <div class="avatar-initial bg-label-info rounded-3">
              <div>
                <img src="{{asset('assets/svg/icons/lightbulb.svg')}}" alt="Lightbulb" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="content-right">
            <p class="mb-1 fw-medium">Test Results</p>
            <span class="text-info mb-0 h5">82%</span>
          </div>
        </div>
        <div class="d-flex align-items-center gap-4">
          <div class="avatar avatar-lg">
            <div class="avatar-initial bg-label-warning rounded-3">
              <div>
                <img src="{{asset('assets/svg/icons/check.svg')}}" alt="Check" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="content-right">
            <p class="mb-1 fw-medium">Course Completed </p>
            <span class="text-warning mb-0 h5">14</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4 ps-md-4 ps-lg-6">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <div>
            <h5 class="mb-1">Time Spendings</h5>
            <p class="mb-9">Weekly report</p>
          </div>
          <div class="time-spending-chart">
            <h5 class="mb-2">231<span class="text-body">h</span> 14<span class="text-body">m</span></h5>
            <span class="badge bg-label-success rounded-pill">+18.4%</span>
          </div>
        </div>
        <div id="leadsReportChart"></div>
      </div>
    </div>
  </div>
</div>
<!-- Hour chart End  -->

<!-- Topic and Instructors -->
<div class="row mb-6 g-6">

  <!-- Topic you are interested in -->
  <div class="col-12 col-xxl-8">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Topic you are interested in</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="topic" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topic">
            <a class="dropdown-item" href="javascript:void(0);">Highest Views</a>
            <a class="dropdown-item" href="javascript:void(0);">See All</a>
          </div>
        </div>
      </div>
      <div class="card-body row g-3">
        <div class="col-md-6">
          <div id="horizontalBarChart"></div>
        </div>
        <div class="col-md-6 d-flex justify-content-around align-items-center">
          <div>
            <div class="d-flex align-items-baseline">
              <span class="text-primary me-2"><i class='ri-circle-fill ri-12px'></i></span>
              <div>
                <p class="mb-0">UI Design</p>
                <h5 class="mb-0">35%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline my-10">
              <span class="text-success me-2"><i class='ri-circle-fill ri-12px'></i></span>
              <div>
                <p class="mb-0">Music</p>
                <h5 class="mb-0">14%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline">
              <span class="text-danger me-2"><i class='ri-circle-fill ri-12px'></i></span>
              <div>
                <p class="mb-0">React</p>
                <h5 class="mb-0">10%</h5>
              </div>
            </div>
          </div>

          <div>
            <div class="d-flex align-items-baseline">
              <span class="text-info me-2"><i class='ri-circle-fill ri-12px'></i></span>
              <div>
                <p class="mb-0">UX Design</p>
                <h5 class="mb-0">20%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline my-10">
              <span class="text-secondary me-2"><i class='ri-circle-fill ri-12px'></i></span>
              <div>
                <p class="mb-0">Animation</p>
                <h5 class="mb-0">12%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline">
              <span class="text-warning me-2"><i class='ri-circle-fill ri-12px'></i></span>
              <div>
                <p class="mb-0">SEO</p>
                <h5 class="mb-0">9%</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Topic you are interested in -->

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
        <div class="d-flex justify-content-between align-items-center">
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
          <li class="d-flex mb-7">
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
          <li class="d-flex mb-7">
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
          <li class="d-flex mb-7">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded-3 bg-label-success"><i class="ri-image-2-line ri-24px"></i></span>
            </div>
            <div class="d-sm-flex w-100 align-items-center">
              <div class="w-100 mb-2 mb-sm-0 me-sm-4">
                <h6 class="mb-0">Basic Fundamentals of Photography</h6>
              </div>
              <div class="badge bg-label-secondary rounded-pill">3.7k Views</div>
            </div>
          </li>
          <li class="d-flex mb-7">
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
              <span class="avatar-initial rounded-3 bg-label-danger"><i class="ri-music-2-line ri-24px"></i></span>
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
  <div class="col-12 col-xxl-4 col-md-6">
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

</div>
<!--  Topic and Instructors  End-->

<!-- Course datatable -->
<div class="card">
  <div class="table-responsive mb-4">
    <table class="table datatables-academy-course">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th>Course Name</th>
          <th>Time</th>
          <th class="w-25">Progress</th>
          <th class="w-25">Status</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!-- Course datatable End -->
@endsection

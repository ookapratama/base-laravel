@php
$configData = Helper::appClasses();
@endphp
@extends('layouts/layoutMaster')

@section('title', 'Dashboard - Analytics')
@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/apex-charts/apex-charts.scss',
  'resources/assets/vendor/libs/swiper/swiper.scss'
])
@endsection

@section('page-style')
<!-- Page -->
@vite([
  'resources/assets/vendor/scss/pages/cards-statistics.scss',
  'resources/assets/vendor/scss/pages/cards-analytics.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/apex-charts/apexcharts.js',
  'resources/assets/vendor/libs/swiper/swiper.js'
])
@endsection

@section('page-script')
@vite(['resources/assets/js/dashboards-analytics.js'])
@endsection

@section('content')
<div class="row g-6">
  <!-- Gamification Card -->
  <div class="col-md-12 col-xxl-8">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-md-6 order-2 order-md-1">
          <div class="card-body">
            <h4 class="card-title mb-4">Congratulations <span class="fw-bold">John!</span> 🎉</h4>
            <p class="mb-0">You have done 68% 😎 more sales today.</p>
            <p>Check your new badge in your profile.</p>
            <a href="javascript:;" class="btn btn-primary">View Profile</a>
          </div>
        </div>
        <div class="col-md-6 text-center text-md-end order-1 order-md-2">
          <div class="card-body pb-0 px-0 pt-2">
            <img src="{{asset('assets/img/illustrations/illustration-john-'.$configData['style'].'.png')}}" height="186" class="scaleX-n1-rtl" alt="View Profile" data-app-light-img="illustrations/illustration-john-light.png" data-app-dark-img="illustrations/illustration-john-dark.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Gamification Card -->

  <!-- Statistics Total Order -->
  <div class="col-xxl-2 col-sm-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
          <div class="avatar">
            <div class="avatar-initial bg-label-primary rounded-3">
              <i class="ri-shopping-cart-2-line ri-24px"></i>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <p class="mb-0 text-success me-1">+22%</p>
            <i class="ri-arrow-up-s-line text-success"></i>
          </div>
        </div>
        <div class="card-info mt-5">
          <h5 class="mb-1">155k</h5>
          <p>Total Orders</p>
          <div class="badge bg-label-secondary rounded-pill">Last 4 Month</div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Statistics Total Order -->

  <!-- Sessions line chart -->
  <div class="col-xxl-2 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <div class="d-flex align-items-center mb-1 flex-wrap">
          <h5 class="mb-0 me-1">$38.5k</h5>
          <p class="mb-0 text-success">+62%</p>
        </div>
        <span class="d-block card-subtitle">Sessions</span>
      </div>
      <div class="card-body">
        <div id="sessions"></div>
      </div>
    </div>
  </div>
  <!--/ Sessions line chart -->

  <!-- Total Transactions & Report Chart -->
  <div class="col-12 col-xxl-8">
    <div class="card h-100">
      <div class="row row-bordered g-0 h-100">
        <div class="col-md-7 col-12 order-2 order-md-0">
          <div class="card-header">
            <h5 class="mb-0">Total Transactions</h5>
          </div>
          <div class="card-body">
            <div id="totalTransactionChart"></div>
          </div>
        </div>
        <div class="col-md-5 col-12">
          <div class="card-header">
            <div class="d-flex justify-content-between">
              <h5 class="mb-1">Report</h5>
              <div class="dropdown">
                <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="totalTransaction" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="ri-more-2-line ri-20px"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalTransaction">
                  <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                  <a class="dropdown-item" href="javascript:void(0);">Share</a>
                  <a class="dropdown-item" href="javascript:void(0);">Update</a>
                </div>
              </div>
            </div>
            <p class="mb-0 card-subtitle">Last month transactions $234.40k</p>
          </div>
          <div class="card-body pt-6">
            <div class="row">
              <div class="col-6 border-end">
                <div class="d-flex flex-column align-items-center">
                  <div class="avatar">
                    <div class="avatar-initial bg-label-success rounded-3">
                      <div class="ri-pie-chart-2-line ri-24px"></div>
                    </div>
                  </div>
                  <p class="mt-3 mb-1">This Week</p>
                  <h6 class="mb-0">+82.45%</h6>
                </div>
              </div>
              <div class="col-6">
                <div class="d-flex flex-column align-items-center">
                  <div class="avatar">
                    <div class="avatar-initial bg-label-primary rounded-3">
                      <div class="ri-money-dollar-circle-line ri-24px"></div>
                    </div>
                  </div>
                  <p class="mt-3 mb-1">This Week</p>
                  <h6 class="mb-0">-24.86%</h6>
                </div>
              </div>
            </div>
            <hr class="my-5">
            <div class="d-flex justify-content-around align-items-center flex-wrap gap-2">
              <div>
                <p class="mb-1">Performance</p>
                <h6 class="mb-0">+94.15%</h6>
              </div>
              <div>
                <button class="btn btn-primary" type="button">view report</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Transactions & Report Chart -->

  <!-- Performance Chart -->
  <div class="col-12 col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-1">Performance</h5>
          <div class="dropdown">
            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="performanceDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ri-more-2-line ri-20px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="performanceDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="performanceChart"></div>
      </div>
    </div>
  </div>
  <!--/ Performance Chart -->

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
      <div class="d-flex justify-content-between p-4 border-bottom">
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

  <!-- Multiple widgets -->
  <div class="col-md-6 col-xxl-4">
    <div class="row g-4">
      <!-- Total Revenue chart -->
      <div class="col-md-6 col-sm-6">
        <div class="card h-100">
          <div class="card-header pb-xl-8">
            <div class="d-flex align-items-center mb-1 flex-wrap">
              <h5 class="mb-0 me-1">$42.5k</h5>
              <p class="mb-0 text-danger">-22%</p>
            </div>
            <span class="d-block card-subtitle">Total Revenue</span>
          </div>
          <div class="card-body">
            <div id="totalRevenue"></div>
          </div>
        </div>
      </div>
      <!--/ Total Revenue chart -->

      <div class="col-md-6 col-sm-6">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
              <div class="avatar">
                <div class="avatar-initial bg-label-success rounded-3">
                  <i class="ri-handbag-line ri-24px"></i>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <p class="mb-0 text-success me-1">+38%</p>
                <i class="ri-arrow-up-s-line text-success"></i>
              </div>
            </div>
            <div class="card-info mt-5 mt-xl-8">
              <h5 class="mb-1">$13.4k</h5>
              <p>Total Sales</p>
              <div class="badge bg-label-secondary rounded-pill">Last Six Month</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-6">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
              <div class="avatar">
                <div class="avatar-initial bg-label-info rounded-3">
                  <i class="ri-links-line ri-24px"></i>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <p class="mb-0 text-success me-1">+62%</p>
                <i class="ri-arrow-up-s-line text-success"></i>
              </div>
            </div>
            <div class="card-info mt-5 mt-xl-8">
              <h5 class="mb-1">142.8k</h5>
              <p>Total Impression</p>
              <div class="badge bg-label-secondary rounded-pill">Last One Year</div>
            </div>
          </div>
        </div>
      </div>
      <!-- overview Radial chart -->
      <div class="col-md-6 col-sm-6">
        <div class="card h-100">
          <div class="card-header pb-xl-7">
            <div class="d-flex align-items-center mb-1 flex-wrap">
              <h5 class="mb-0 me-1">$67.1k</h5>
              <p class="mb-0 text-success">+49%</p>
            </div>
            <span class="d-block card-subtitle">Overview</span>
          </div>
          <div class="card-body pb-xl-8">
            <div id="overviewChart" class="d-flex align-items-center"></div>
          </div>
        </div>
      </div>
      <!--/ overview Radial chart -->
    </div>
  </div>
  <!--/ Multiple widgets -->

  <!-- Sales Country Chart -->
  <div class="col-12 col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-1">Sales Country</h5>
          <div class="dropdown">
            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="salesCountryDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ri-more-2-line ri-20px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesCountryDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
        <p class="mb-0 card-subtitle">Total $42,580 Sales</p>
      </div>
      <div class="card-body pb-1 px-0">
        <div id="salesCountryChart"></div>
      </div>
    </div>
  </div>
  <!--/ Sales Country Chart -->

  <!-- Top Referral Source  -->
  <div class="col-12 col-xxl-8">
    <div class="card h-100">
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
                <div class="avatar-initial bg-label-secondary text-body rounded">
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
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Top Referral Source  -->

  <!-- Weekly Sales Chart-->
  <div class="col-12 col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-1">Weekly Sales</h5>
          <div class="dropdown">
            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="weeklySalesDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ri-more-2-line ri-20px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklySalesDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              <a class="dropdown-item" href="javascript:void(0);">Update</a>
              <a class="dropdown-item" href="javascript:void(0);">Share</a>
            </div>
          </div>
        </div>
        <p class="mb-0 card-subtitle">Total 85.4k Sales</p>
      </div>
      <div class="card-body">
        <div class="row mb-7 mb-xl-12">
          <div class="col-6 d-flex align-items-center">
            <div class="avatar">
              <div class="avatar-initial bg-label-primary rounded">
                <i class="ri-funds-line ri-24px"></i>
              </div>
            </div>
            <div class="ms-3 d-flex flex-column">
              <p class="mb-0">Net Income</p>
              <h6 class="mb-0">$438.5K</h6>
            </div>
          </div>
          <div class="col-6 d-flex align-items-center">
            <div class="avatar">
              <div class="avatar-initial bg-label-warning rounded">
                <i class="ri-money-dollar-circle-line ri-24px"></i>
              </div>
            </div>
            <div class="ms-3 d-flex flex-column">
              <p class="mb-0">Expense</p>
              <h6 class="mb-0">$22.4K</h6>
            </div>
          </div>
        </div>
        <div id="weeklySalesChart"></div>
      </div>
    </div>
  </div>
  <!--/ Weekly Sales Chart-->


  <!-- visits By Day Chart-->
  <div class="col-12 col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-1">Visits by Day</h5>
          <div class="dropdown">
            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="visitsByDayDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ri-more-2-line ri-20px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="visitsByDayDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              <a class="dropdown-item" href="javascript:void(0);">Update</a>
              <a class="dropdown-item" href="javascript:void(0);">Share</a>
            </div>
          </div>
        </div>
        <p class="mb-0 card-subtitle">Total 248.5k Visits</p>
      </div>
      <div class="card-body pt-xl-5">
        <div id="visitsByDayChart"></div>
        <div class="d-flex justify-content-between mt-6">
          <div>
            <h6 class="mb-0">Most Visited Day</h6>
            <p class="mb-0 small">Total 62.4k Visits on Thursday</p>
          </div>
          <div class="avatar">
            <div class="avatar-initial bg-label-warning rounded">
              <i class="ri-arrow-right-s-line ri-24px scaleX-n1-rtl"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ visits By Day Chart-->

  <!-- Activity Timeline -->
  <div class="col-12 col-xxl-8">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-0">Activity Timeline</h5>
        </div>
      </div>
      <div class="card-body pt-4">
        <ul class="timeline card-timeline mb-0">
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
                  <span class="h6 mb-0">invoices.pdf</span>
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
  </div>
  <!-- Activity Timeline -->
</div>
@endsection

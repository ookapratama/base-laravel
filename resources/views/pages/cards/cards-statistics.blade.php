@extends('layouts/layoutMaster')

@section('title', 'Cards Statistics- UI elements')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/apex-charts/apex-charts.scss',
  'resources/assets/vendor/libs/swiper/swiper.scss'
])
@endsection

@section('page-style')
<!-- Page -->
@vite(['resources/assets/vendor/scss/pages/cards-statistics.scss'])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/apex-charts/apexcharts.js',
  'resources/assets/vendor/libs/swiper/swiper.js'
])
@endsection

@section('page-script')
@vite(['resources/assets/js/cards-statistics.js'])
@endsection

@section('content')
<div class="row gy-6">
  <!-- Cards with few info -->
  <div class="col-lg-3 col-sm-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center flex-wrap">
          <div class="avatar me-4">
            <div class="avatar-initial bg-label-primary rounded-3">
              <i class="ri-user-star-line ri-24px">
              </i>
            </div>
          </div>
          <div class="card-info">
            <div class="d-flex align-items-center">
              <h5 class="mb-0 me-2">8,458</h5>
              <i class="ri-arrow-down-s-line text-danger ri-20px"></i>
              <small class="text-danger">8.10%</small>
            </div>
            <p class="mb-0">New Customers</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center flex-wrap">
          <div class="avatar me-4">
            <div class="avatar-initial bg-label-warning rounded-3">
              <i class="ri-pie-chart-2-line ri-24px"></i>
            </div>
          </div>
          <div class="card-info">
            <div class="d-flex align-items-center">
              <h5 class="mb-0 me-2">28.6k</h5>
              <i class="ri-arrow-up-s-line text-success ri-20px"></i>
              <small class="text-success">25.8%</small>
            </div>
            <p class="mb-0">Total Revenue</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center flex-wrap">
          <div class="avatar me-4">
            <div class="avatar-initial bg-label-info rounded-3">
              <i class="ri-bank-card-line ri-24px"></i>
            </div>
          </div>
          <div class="card-info">
            <div class="d-flex align-items-center">
              <h5 class="mb-0 me-2">13.6k</h5>
              <i class="ri-arrow-down-s-line text-danger ri-20px"></i>
              <small class="text-danger">12.1%</small>
            </div>
            <p class="mb-0">New Transactions</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center flex-wrap">
          <div class="avatar me-4">
            <div class="avatar-initial bg-label-success rounded-3">
              <i class="ri-money-dollar-circle-line ri-24px"></i>
            </div>
          </div>
          <div class="card-info">
            <div class="d-flex align-items-center">
              <h5 class="mb-0 me-2">2,856</h5>
              <i class="ri-arrow-up-s-line text-success ri-20px"></i>
              <small class="text-success">54.6%</small>
            </div>
            <p class="mb-0">Total Profit</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Cards with few info -->

  <!-- Cards with separator -->
  <div class="col-12">
    <div class="card">
      <div class="card-widget-separator-wrapper">
        <div class="card-body card-widget-separator">
          <div class="row gy-4 gy-sm-1">
            <div class="col-sm-6 col-lg-3">
              <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-4 pb-sm-0">
                <div>
                  <h4 class="mb-0">24</h4>
                  <p class="mb-0">Clients</p>
                </div>
                <div class="avatar me-sm-6">
                  <span class="avatar-initial rounded-3 bg-label-secondary">
                    <i class="ri-user-line text-heading ri-26px"></i>
                  </span>
                </div>
              </div>
              <hr class="d-none d-sm-block d-lg-none me-6">
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-4 pb-sm-0">
                <div>
                  <h4 class="mb-0">165</h4>
                  <p class="mb-0">Invoices</p>
                </div>
                <div class="avatar me-lg-6">
                  <span class="avatar-initial rounded-3 bg-label-secondary">
                    <i class="ri-pages-line text-heading ri-26px"></i>
                  </span>
                </div>
              </div>
              <hr class="d-none d-sm-block d-lg-none">
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="d-flex justify-content-between align-items-start border-end pb-4 pb-sm-0 card-widget-3">
                <div>
                  <h4 class="mb-0">$2.46k</h4>
                  <p class="mb-0">Paid</p>
                </div>
                <div class="avatar me-sm-6">
                  <span class="avatar-initial rounded-3 bg-label-secondary">
                    <i class="ri-wallet-line text-heading ri-26px"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <h4 class="mb-0">$876</h4>
                  <p class="mb-0">Unpaid</p>
                </div>
                <div class="avatar">
                  <span class="avatar-initial rounded-3 bg-label-secondary">
                    <i class="ri-money-dollar-circle-line text-heading ri-26px"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Cards with separator -->

  <!-- Card Border Shadow -->
  <div class="col-sm-6 col-lg-3">
    <div class="card card-border-shadow-primary h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded-3 bg-label-primary"><i class="ri-car-line ri-24px"></i></span>
          </div>
          <h4 class="mb-0">42</h4>
        </div>
        <h6 class="mb-0 fw-normal">On route vehicles</h6>
        <p class="mb-0">
          <span class="me-1 fw-medium">+18.2%</span>
          <small class="text-muted">than last week</small>
        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="card card-border-shadow-warning h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded-3 bg-label-warning"><i class='ri-alert-line ri-24px'></i></span>
          </div>
          <h4 class="mb-0">8</h4>
        </div>
        <h6 class="mb-0 fw-normal">Vehicles with errors</h6>
        <p class="mb-0">
          <span class="me-1 fw-medium">-8.7%</span>
          <small class="text-muted">than last week</small>
        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="card card-border-shadow-danger h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded-3 bg-label-danger"><i class='ri-route-line ri-24px'></i></span>
          </div>
          <h4 class="mb-0">27</h4>
        </div>
        <h6 class="mb-0 fw-normal">Deviated from route</h6>
        <p class="mb-0">
          <span class="me-1 fw-medium">+4.3%</span>
          <small class="text-muted">than last week</small>
        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="card card-border-shadow-info h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded-3 bg-label-info"><i class='ri-time-line ri-24px'></i></span>
          </div>
          <h4 class="mb-0">13</h4>
        </div>
        <h6 class="mb-0 fw-normal">Late vehicles</h6>
        <p class="mb-0">
          <span class="me-1 fw-medium">-2.5%</span>
          <small class="text-muted">than last week</small>
        </p>
      </div>
    </div>
  </div>
  <!--/ Card Border Shadow -->

  <!-- Ratings -->
  <div class="col-lg-3 col-sm-6">
    <div class="card">
      <div class="row">
        <div class="col-6">
          <div class="card-body">
            <div class="card-info mb-5">
              <h6 class="mb-2 text-nowrap">Ratings</h6>
              <div class="badge bg-label-primary rounded-pill lh-xs">Year of 2021</div>
            </div>
            <div class="d-flex align-items-center">
              <h4 class="mb-0 me-2">8.14k</h4>
              <p class="mb-0 text-success">+15.6%</p>
            </div>
          </div>
        </div>
        <div class="col-6 text-end d-flex align-items-end">
          <div class="card-body pb-0 pt-4">
            <img src="{{asset('assets/img/illustrations/card-ratings-illustration.png')}}" alt="Ratings" class="img-fluid" width="95">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Ratings -->

  <!-- Sessions -->
  <div class="col-lg-3 col-sm-6">
    <div class="card">
      <div class="row">
        <div class="col-6">
          <div class="card-body">
            <div class="card-info mb-5">
              <h6 class="mb-2 text-nowrap">Sessions</h6>
              <div class="badge bg-label-success rounded-pill lh-xs">Last Month</div>
            </div>
            <div class="d-flex align-items-center">
              <h4 class="mb-0 me-2">12.2k</h4>
              <p class="mb-0 text-danger ">-25.5%</p>
            </div>
          </div>
        </div>
        <div class="col-6 text-end d-flex align-items-end">
          <div class="card-body pb-0 pt-4">
            <img src="{{asset('assets/img/illustrations/card-session-illustration.png')}}" alt="Ratings" class="img-fluid" width="81">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Sessions -->

  <!-- Customers -->
  <div class="col-lg-3 col-sm-6">
    <div class="card">
      <div class="row">
        <div class="col-6">
          <div class="card-body">
            <div class="card-info mb-5">
              <h6 class="mb-2 text-nowrap">Customers</h6>
              <div class="badge bg-label-warning rounded-pill lh-xs">Daily Customers</div>
            </div>
            <div class="d-flex align-items-end d-flex align-items-center">
              <h4 class="mb-0 me-2">42.4k</h4>
              <p class="mb-0 text-success">+9.2%</p>
            </div>
          </div>
        </div>
        <div class="col-6 text-end d-flex align-items-end">
          <div class="card-body pb-0 pt-4">
            <img src="{{asset('assets/img/illustrations/card-customers-illustration.png')}}" alt="Ratings" class="img-fluid" width="84">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Customers -->

  <!-- Total Orders -->
  <div class="col-lg-3 col-sm-6">
    <div class="card">
      <div class="row">
        <div class="col-6">
          <div class="card-body">
            <div class="card-info mb-5">
              <h6 class="mb-2 text-nowrap">Total Orders</h6>
              <div class="badge bg-label-secondary rounded-pill lh-xs">Last Week</div>
            </div>
            <div class="d-flex align-items-center">
              <h4 class="mb-0 me-2">42.5k</h4>
              <p class="mb-0 text-success">+10.8%</p>
            </div>
          </div>
        </div>
        <div class="col-6 text-end d-flex align-items-end">
          <div class="card-body pb-0 pt-4">
            <img src="{{asset('assets/img/illustrations/card-orders-illustration.png')}}" alt="Ratings" class="img-fluid" width="78">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Orders -->

  <!-- Total statistics -->
  <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
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

  <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
          <div class="avatar">
            <div class="avatar-initial bg-label-warning rounded-3">
              <i class="ri-pie-chart-2-line ri-24px"></i>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <p class="mb-0 text-danger me-1">-18%</p>
            <i class="ri-arrow-up-s-line text-danger"></i>
          </div>
        </div>
        <div class="card-info mt-5">
          <h5 class="mb-1">$89.34k</h5>
          <p>Total Profit</p>
          <div class="badge bg-label-secondary rounded-pill">Last One Year</div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
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
        <div class="card-info mt-5">
          <h5 class="mb-1">142.8k</h5>
          <p>Total Impression</p>
          <div class="badge bg-label-secondary rounded-pill">Last One Year</div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
          <div class="avatar">
            <div class="avatar-initial bg-label-success rounded-3">
              <i class="ri-money-dollar-circle-line ri-24px"></i>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <p class="mb-0 text-success me-1">+38%</p>
            <i class="ri-arrow-up-s-line text-success"></i>
          </div>
        </div>
        <div class="card-info mt-5">
          <h5 class="mb-1">$13.4k</h5>
          <p>Total Sales</p>
          <div class="badge bg-label-secondary rounded-pill">Last Six Month</div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
          <div class="avatar">
            <div class="avatar-initial bg-label-danger rounded-3">
              <i class="ri-briefcase-line ri-24px"></i>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <p class="mb-0 text-danger me-1">-16%</p>
            <i class="ri-arrow-up-s-line text-danger"></i>
          </div>
        </div>
        <div class="card-info mt-5">
          <h5 class="mb-1">$8.16k</h5>
          <p>Total Expenses</p>
          <div class="badge bg-label-secondary rounded-pill">Last One Month</div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
          <div class="avatar">
            <div class="avatar-initial bg-label-secondary rounded-3">
              <i class="ri-pie-chart-2-line ri-24px"></i>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <p class="mb-0 text-success me-1">+46%</p>
            <i class="ri-arrow-up-s-line text-success"></i>
          </div>
        </div>
        <div class="card-info mt-5">
          <h5 class="mb-1">$2.55k</h5>
          <p>Transactions</p>
          <div class="badge bg-label-secondary rounded-pill">Last One Year</div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total statistics -->

  <!-- Total Revenue chart -->
  <div class="col-xl-2 col-lg-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-0">
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

  <!-- Sessions line chart -->
  <div class="col-xl-2 col-lg-3 col-sm-6">
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

  <!-- overview Radial chart -->
  <div class="col-xl-2 col-lg-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <div class="d-flex align-items-center mb-1 flex-wrap">
          <h5 class="mb-0 me-1">$67.1k</h5>
          <p class="mb-0 text-success">+49%</p>
        </div>
        <span class="d-block card-subtitle">Overview</span>
      </div>
      <div class="card-body">
        <div id="overviewChart" class="d-flex align-items-center"></div>
      </div>
    </div>
  </div>
  <!--/ overview Radial chart -->

  <!-- Total Profit chart -->
  <div class="col-xl-2 col-lg-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <div class="d-flex align-items-center mb-1 flex-wrap">
          <h5 class="mb-0 me-1">$88.5k</h5>
          <p class="mb-0 text-danger">-18%</p>
        </div>
        <span class="d-block card-subtitle">Total Profit</span>
      </div>
      <div class="card-body">
        <div id="totalProfitChart"></div>
      </div>
    </div>
  </div>
  <!--/ Total Profit chart -->

  <!-- Total Sales chart -->
  <div class="col-xl-2 col-lg-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <div class="d-flex align-items-center mb-1 flex-wrap">
          <h5 class="mb-0 me-1">$22.6k</h5>
          <p class="mb-0 text-success">+38%</p>
        </div>
        <span class="d-block card-subtitle">Total Sales</span>
      </div>
      <div class="card-body">
        <div id="totalSalesChart"></div>
      </div>
    </div>
  </div>
  <!--/ Total Sales chart -->

  <!-- Total Growth chart -->
  <div class="col-xl-2 col-lg-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <div class="d-flex align-items-center mb-1 flex-wrap">
          <h5 class="mb-0 me-1">$27.9k</h5>
          <p class="mb-0 text-success">+16%</p>
        </div>
        <span class="d-block card-subtitle">Total Growth</span>
      </div>
      <div class="card-body">
        <div id="totalGrowthChart"></div>
      </div>
    </div>
  </div>
  <!--/ Total Sales chart -->

  <!-- Sales & Profit chart -->
  <div class="col-xl-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body pb-0">
        <div class="row">
          <div class="col-6">
            <div class="card-info">
              <h5 class="mb-1">152k</h5>
              <div class="d-flex align-items-center mb-1 text-success">
                <p class="mb-0 small">18.2%</p>
                <div class="ri-arrow-up-s-line ri-20px"></div>
              </div>
              <p class="mb-0">Total Sales</p>
            </div>
          </div>
          <div class="col-6">
            <div id="salesChart"></div>
          </div>
        </div>
      </div>
      <hr class="my-5">
      <div class="card-body pt-0">
        <div class="row">
          <div class="col-6">
            <div class="card-info">
              <h5 class="mb-1">89.5k</h5>
              <div class="d-flex align-items-center mb-1 text-danger">
                <p class="mb-0 small">-8%</p>
                <div class="ri-arrow-down-s-line ri-20px"></div>
              </div>
              <p class="mb-0">Total Sales</p>
            </div>
          </div>
          <div class="col-6">
            <div id="profitChart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Sales & Profit chart -->

  <!-- Total Visits -->
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between flex-wrap gap-2">
          <p class="d-block mb-0 text-body">Total Visits</p>
          <div class="d-flex align-items-center text-success">
            <p class="mb-0">+18.4%</p>
            <i class="ri-arrow-up-s-line ri-22px"></i>
          </div>
        </div>
        <h4 class="mb-0">$42.5k</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <div class="d-flex gap-2 align-items-center mb-2">
              <div class="avatar avatar-xs flex-shrink-0">
                <div class="avatar-initial rounded bg-label-warning">
                  <i class="ri-pie-chart-2-line ri-16px"></i>
                </div>
              </div>
              <p class="mb-0">Mobile</p>
            </div>
            <h4 class="mb-2">23.5%</h4>
            <p class="mb-0">2,890</p>
          </div>
          <div class="col-4">
            <div class="divider divider-vertical">
              <div class="divider-text">
                <span class="badge-divider-bg">VS</span>
              </div>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
              <p class="mb-0">Desktop</p>
              <div class="avatar avatar-xs flex-shrink-0">
                <div class="avatar-initial rounded bg-label-primary">
                  <i class="ri-mac-line ri-16px"></i>
                </div>
              </div>
            </div>
            <h4 class="mb-2">76.5%</h4>
            <p class="mb-0">22,465</p>
          </div>
        </div>
        <div class="d-flex align-items-center mt-4">
          <div class="progress w-100 rounded" style="height: 8px;">
            <div class="progress-bar bg-warning" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Visits -->

  <!-- Sales This Months -->
  <div class="col-xl-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header">
        <h5 class="mb-0">Sales This Month</h5>
      </div>
      <div class="card-body">
        <div class="card-info">
          <p class="mb-0">Total Sales This Month</p>
          <h5 class="mb-0">$28,450</h5>
        </div>
        <div id="saleThisMonth"></div>
      </div>
    </div>
  </div>
  <!--/ Sales This Months -->

  <!-- Total Impression & Order Chart -->
  <div class="col-xl-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body pb-0">
        <div class="d-flex align-items-center gap-4">
          <div>
            <div class="chart-progress" data-color="primary" data-series="70" data-icon="{{asset('assets/img/icons/misc/card-icon-laptop.png')}}"></div>
          </div>
          <div>
            <div class="card-info">
              <div class="d-flex align-items-center gap-2 flex-wrap">
                <h5 class="mb-0">84k</h5>
                <div class="d-flex align-items-center text-danger">
                  <p class="mb-0 small">-24%</p>
                  <div class="ri-arrow-down-s-line ri-20px"></div>
                </div>
              </div>
              <p class="mb-0 mt-1">Total Impression</p>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-4">
      <div class="card-body pt-0">
        <div class="d-flex align-items-center gap-4">
          <div>
            <div class="chart-progress" data-color="warning" data-series="40" data-icon="{{asset('assets/img/icons/misc/card-icon-bag.png')}}"></div>
          </div>
          <div>
            <div class="card-info">
              <div class="d-flex align-items-center gap-2 flex-wrap">
                <h5 class="mb-0">22k</h5>
                <div class="d-flex align-items-center text-success">
                  <p class="mb-0 small">+15%</p>
                  <div class="ri-arrow-up-s-line ri-20px"></div>
                </div>
              </div>
              <p class="mb-0 mt-1">Total Order</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Impression & Order Chart -->

  <!-- Weekly Sales-->
  <div class="col-lg-6">
    <div class="swiper-container swiper-container-horizontal swiper swiper-sales" id="swiper-weekly-sales">
      <div class="swiper-wrapper">
        <div class="swiper-slide card pb-5 shadow-none border-0">
          <h5 class="mb-1">Weekly Sales</h5>
          <div class="d-flex align-items-center card-subtitle gap-2">
            <div>Total $23.5k Earning</div>
            <div class="d-flex align-items-center text-success">
              <p class="mb-0 fw-medium">+62%</p>
              <i class="ri-arrow-up-s-line ri-20px mt-n1"></i>
            </div>
          </div>
          <div class="d-flex align-items-center mt-5">
            <img src="{{asset('assets/img/products/card-apple-iphone-x.png')}}" alt="Weekly sales" width="84" class="rounded-4">
            <div class="d-flex flex-column w-100 ms-6">
              <h6 class="mb-2">Mobiles & Computers</h6>
              <div class="row d-flex flex-wrap justify-content-between g-4">
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-3 align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">24</p>
                      <p class="mb-0 text-truncate">Mobiles</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">12</p>
                      <p class="mb-0 text-truncate">Tablets</p>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-3 align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">50</p>
                      <p class="mb-0 text-truncate">Accessories</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">38</p>
                      <p class="mb-0 text-truncate">Computers</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-6">
            <button type="button" class="btn btn-sm btn-outline-primary me-4"><i class="tf-icons ri-sticky-note-line ri-14px me-1"></i>Details</button>
            <button type="button" class="btn btn-sm btn-primary"><i class="tf-icons ri-download-line ri-14px me-1"></i>Report</button>
          </div>
        </div>
        <div class="swiper-slide card pb-5 shadow-none border-0">
          <h5 class="mb-1">Weekly Sales</h5>
          <div class="d-flex align-items-center card-subtitle gap-2">
            <div>Total $23.5k Earning</div>
            <div class="d-flex align-items-center text-success">
              <p class="mb-0 fw-medium">+62%</p>
              <i class="ri-arrow-up-s-line ri-20px mt-n1"></i>
            </div>
          </div>
          <div class="d-flex align-items-center mt-5">
            <img src="{{asset('assets/img/products/card-apple-iphone-x.png')}}" alt="Weekly sales" width="84" class="rounded-4">
            <div class="d-flex flex-column w-100 ms-6">
              <h6 class="mb-2">Appliances & Electronics</h6>
              <div class="row d-flex flex-wrap justify-content-between g-4">
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-3 align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">16</p>
                      <p class="mb-0 text-truncate">TV's</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">40</p>
                      <p class="mb-0 text-truncate">Speakers</p>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-3 align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">9</p>
                      <p class="mb-0 text-truncate">Cameras</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">18</p>
                      <p class="mb-0 text-truncate">Consoles</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-6">
            <button type="button" class="btn btn-sm btn-outline-primary me-4"><i class="tf-icons ri-sticky-note-line ri-14px me-1"></i>Details</button>
            <button type="button" class="btn btn-sm btn-primary"><i class="tf-icons ri-download-line ri-14px me-1"></i>Report</button>
          </div>
        </div>
        <div class="swiper-slide card pb-5 shadow-none border-0">
          <h5 class="mb-1">Weekly Sales</h5>
          <div class="d-flex align-items-center card-subtitle gap-2">
            <div>Total $23.5k Earning</div>
            <div class="d-flex align-items-center text-success">
              <p class="mb-0 fw-medium">+62%</p>
              <i class="ri-arrow-up-s-line ri-20px mt-n1"></i>
            </div>
          </div>
          <div class="d-flex align-items-center mt-5">
            <img src="{{asset('assets/img/products/card-apple-iphone-x.png')}}" alt="Weekly sales" width="84" class="rounded-4">
            <div class="d-flex flex-column w-100 ms-6">
              <h6 class="mb-2">Fashion</h6>
              <div class="row d-flex flex-wrap justify-content-between g-4">
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-3 align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">16</p>
                      <p class="mb-0 text-truncate">T-shirts</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">29</p>
                      <p class="mb-0 text-truncate">Watches</p>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-3 align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">43</p>
                      <p class="mb-0 text-truncate">Shoes</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">7</p>
                      <p class="mb-0 text-truncate">Sun Glasses</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-6">
            <button type="button" class="btn btn-sm btn-outline-primary me-4"><i class="tf-icons ri-sticky-note-line ri-14px me-1"></i>Details</button>
            <button type="button" class="btn btn-sm btn-primary"><i class="tf-icons ri-download-line ri-14px me-1"></i>Report</button>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!--/ Weekly Sales-->

  <!-- Marketing & Sales-->
  <div class="col-lg-6">
    <div class="swiper-container swiper-container-horizontal swiper swiper-sales" id="swiper-marketing-sales">
      <div class="swiper-wrapper">
        <div class="swiper-slide card pb-5 shadow-none border-0">
          <h5 class="mb-1">Marketing & Sales</h5>
          <div class="d-flex align-items-center card-subtitle gap-2">
            <div>Total 245.8k Sales</div>
            <div class="d-flex align-items-center text-success">
              <p class="mb-0 fw-medium">+25%</p>
              <i class="ri-arrow-up-s-line ri-20px mt-n1"></i>
            </div>
          </div>
          <div class="d-flex align-items-center mt-5">
            <img src="{{asset('assets/img/products/card-marketing-expense-logo.png')}}" alt="Marketing and sales" width="84" class="rounded-4">
            <div class="d-flex flex-column w-100 ms-6">
              <h6 class="mb-2">Marketing Expense</h6>
              <div class="row d-flex flex-wrap justify-content-between g-4">
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-3 align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">5k</p>
                      <p class="mb-0 text-truncate">Operating</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">6k</p>
                      <p class="mb-0 text-truncate">COGF</p>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-3 align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">2k</p>
                      <p class="mb-0 text-truncate">Financial</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">1k</p>
                      <p class="mb-0 text-truncate">Expense</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-6">
            <button type="button" class="btn btn-sm btn-outline-primary me-4"><i class="tf-icons ri-sticky-note-line ri-14px me-1"></i>Details</button>
            <button type="button" class="btn btn-sm btn-primary"><i class="tf-icons ri-download-line ri-14px me-1"></i>Report</button>
          </div>
        </div>
        <div class="swiper-slide card pb-5 shadow-none border-0">
          <h5 class="mb-1">Marketing & Sales</h5>
          <div class="d-flex align-items-center card-subtitle gap-2">
            <div>Total 245.8k Sales</div>
            <div class="d-flex align-items-center text-success">
              <p class="mb-0 fw-medium">+25%</p>
              <i class="ri-arrow-up-s-line ri-20px mt-n1"></i>
            </div>
          </div>
          <div class="d-flex align-items-center mt-5">
            <img src="{{asset('assets/img/products/card-accounting-logo.png')}}" alt="Marketing and sales" width="84" class="rounded-4">
            <div class="d-flex flex-column w-100 ms-6">
              <h6 class="mb-2">Accounting</h6>
              <div class="row d-flex flex-wrap justify-content-between g-4">
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-3 align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">18</p>
                      <p class="mb-0 text-truncate">Billing</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">30</p>
                      <p class="mb-0 text-truncate">Leads</p>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-3 align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">28</p>
                      <p class="mb-0 text-truncate">Sales</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">80</p>
                      <p class="mb-0 text-truncate">Impression</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-6">
            <button type="button" class="btn btn-sm btn-outline-primary me-4"><i class="tf-icons ri-sticky-note-line ri-14px me-1"></i>Details</button>
            <button type="button" class="btn btn-sm btn-primary"><i class="tf-icons ri-download-line ri-14px me-1"></i>Report</button>
          </div>
        </div>
        <div class="swiper-slide card pb-5 shadow-none border-0">
          <h5 class="mb-1">Marketing & Sales</h5>
          <div class="d-flex align-items-center card-subtitle gap-2">
            <div>Total 245.8k Sales</div>
            <div class="d-flex align-items-center text-success">
              <p class="mb-0 fw-medium">+25%</p>
              <i class="ri-arrow-up-s-line ri-20px mt-n1"></i>
            </div>
          </div>
          <div class="d-flex align-items-center mt-5">
            <img src="{{asset('assets/img/products/card-sales-overview-logo.png')}}" alt="Marketing and sales" width="84" class="rounded-4">
            <div class="d-flex flex-column w-100 ms-6">
              <h6 class="mb-2">Sales Overview</h6>
              <div class="row d-flex flex-wrap justify-content-between g-4">
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-3 align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">68</p>
                      <p class="mb-0 text-truncate">Open</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">04</p>
                      <p class="mb-0 text-truncate">Lost</p>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-3 align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">52</p>
                      <p class="mb-0 text-truncate">Converted</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 sales-text-bg fw-medium">12</p>
                      <p class="mb-0 text-truncate">Quotations</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-6">
            <button type="button" class="btn btn-sm btn-outline-primary me-4"><i class="tf-icons ri-sticky-note-line ri-14px me-1"></i>Details</button>
            <button type="button" class="btn btn-sm btn-primary"><i class="tf-icons ri-download-line ri-14px me-1"></i>Report</button>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!--/ Marketing & Sales-->

  <!-- Weekly Sales with bg-->
  <div class="col-lg-6">
    <div class="swiper-container swiper-container-horizontal swiper text-bg-primary h-100" id="swiper-weekly-sales-with-bg">
      <div class="swiper-wrapper">
        <div class="swiper-slide pb-5">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0">Weekly Sales</h5>
              <div class="d-flex align-items-center gap-2">
                <div>Total $23.5k Earning</div>
                <div class="d-flex align-items-center text-success">
                  <p class="mb-0 fw-medium">+62%</p>
                  <i class="ri-arrow-up-s-line ri-20px mt-n1"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
              <h6 class="text-white mt-0 mt-md-4 mb-4 py-1">Mobiles & Computers</h6>
              <div class="row g-4">
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-5 align-items-center">
                      <p class="mb-0 me-3 weekly-sales-text-bg-primary fw-medium">24</p>
                      <p class="mb-0 text-truncate">Mobiles</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 weekly-sales-text-bg-primary fw-medium">12</p>
                      <p class="mb-0 text-truncate">Tablets</p>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-5 align-items-center">
                      <p class="mb-0 me-3 weekly-sales-text-bg-primary fw-medium">50</p>
                      <p class="mb-0 text-truncate">Accessories</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 weekly-sales-text-bg-primary fw-medium">38</p>
                      <p class="mb-0 text-truncate">Computers</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-2 my-md-0 text-center">
              <img src="{{asset('assets/img/products/card-weekly-sales-phone.png')}}" alt="weekly sales" width="230" class="weekly-sales-img">
            </div>
          </div>
        </div>
        <div class="swiper-slide pb-5">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0">Weekly Sales</h5>
              <div class="d-flex align-items-center gap-2">
                <div>Total $23.5k Earning</div>
                <div class="d-flex align-items-center text-success">
                  <p class="mb-0 fw-medium">+62%</p>
                  <i class="ri-arrow-up-s-line ri-20px mt-n1"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
              <h6 class="text-white mt-0 mt-md-4 mb-4 py-1">Appliances & Electronics</h6>
              <div class="row g-4">
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-5 align-items-center">
                      <p class="mb-0 me-3 weekly-sales-text-bg-primary fw-medium">16</p>
                      <p class="mb-0 text-truncate">TV's</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 weekly-sales-text-bg-primary fw-medium">40</p>
                      <p class="mb-0 text-truncate">Speakers</p>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-5 align-items-center">
                      <p class="mb-0 me-3 weekly-sales-text-bg-primary fw-medium">9</p>
                      <p class="mb-0 text-truncate">Cameras</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 weekly-sales-text-bg-primary fw-medium">18</p>
                      <p class="mb-0 text-truncate">Consoles</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-2 my-md-0 text-center">
              <img src="{{asset('assets/img/products/card-weekly-sales-controller.png')}}" alt="weekly sales" width="230" class="weekly-sales-img">
            </div>
          </div>
        </div>
        <div class="swiper-slide pb-5">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0">Weekly Sales</h5>
              <div class="d-flex align-items-center gap-2">
                <div>Total $23.5k Earning</div>
                <div class="d-flex align-items-center text-success">
                  <p class="mb-0 fw-medium">+62%</p>
                  <i class="ri-arrow-up-s-line ri-20px mt-n1"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
              <h6 class="text-white mt-0 mt-md-4 mb-4 py-1">Fashion</h6>
              <div class="row g-4">
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-5 align-items-center">
                      <p class="mb-0 me-3 weekly-sales-text-bg-primary fw-medium">16</p>
                      <p class="mb-0 text-truncate">TV's</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 weekly-sales-text-bg-primary fw-medium">40</p>
                      <p class="mb-0 text-truncate">Speakers</p>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-5 align-items-center">
                      <p class="mb-0 me-3 weekly-sales-text-bg-primary fw-medium">43</p>
                      <p class="mb-0 text-truncate">Shoes</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 me-3 weekly-sales-text-bg-primary fw-medium">7</p>
                      <p class="mb-0 text-truncate">Sun Glasses</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-2 my-md-0 text-center">
              <img src="{{asset('assets/img/products/card-weekly-sales-watch.png')}}" alt="weekly sales" width="230" class="weekly-sales-img">
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!--/ Weekly Sales with bg-->

  <!-- Sales Overview-->
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-1">Sales Overview</h5>
          <div class="dropdown">
            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="salesOverview" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ri-more-2-line ri-20px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesOverview">
              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              <a class="dropdown-item" href="javascript:void(0);">Share</a>
              <a class="dropdown-item" href="javascript:void(0);">Update</a>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center card-subtitle">
          <div class="me-2">Total 42.5k Sales</div>
          <div class="d-flex align-items-center text-success">
            <p class="mb-0 fw-medium">+18%</p>
            <i class="ri-arrow-up-s-line ri-20px"></i>
          </div>
        </div>
      </div>
      <div class="card-body d-flex justify-content-between flex-wrap gap-4">
        <div class="d-flex align-items-center gap-3">
          <div class="avatar">
            <div class="avatar-initial bg-label-primary rounded">
              <i class="ri-user-star-line ri-24px"></i>
            </div>
          </div>
          <div class="card-info">
            <h5 class="mb-0">8,458</h5>
            <p class="mb-0">New Customers</p>
          </div>
        </div>
        <div class="d-flex align-items-center gap-3">
          <div class="avatar">
            <div class="avatar-initial bg-label-warning rounded">
              <i class="ri-pie-chart-2-line ri-24px"></i>
            </div>
          </div>
          <div class="card-info">
            <h5 class="mb-0">$28.5k</h5>
            <p class="mb-0">Total Profit</p>
          </div>
        </div>
        <div class="d-flex align-items-center gap-3">
          <div class="avatar">
            <div class="avatar-initial bg-label-info rounded">
              <i class="ri-arrow-left-right-line ri-24px"></i>
            </div>
          </div>
          <div class="card-info">
            <h5 class="mb-0">2,450k</h5>
            <p class="mb-0">New Transactions</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Sales Overview-->

  <!-- Live Visitors-->
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between mb-1">
          <h5 class="mb-0">Live Visitors</h5>
          <div class="d-flex align-items-center text-success">
            <p class="mb-0 me-2">+78.2%</p>
            <i class="ri-arrow-up-s-line ri-20px mt-n1"></i>
          </div>
        </div>
        <p class="card-subtitle mb-0">Total 890 Visitors Are Live</p>
      </div>
      <div class="card-body">
        <div id="liveVisitors"></div>
      </div>
    </div>
  </div>
  <!--/ Live Visitors-->
</div>
@endsection

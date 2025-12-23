@extends('layouts/layoutMaster')

@section('title', 'Cards Analytics- UI elements')

@section('vendor-style')
@vite(['resources/assets/vendor/libs/apex-charts/apex-charts.scss'])
@endsection

@section('page-style')
<!-- Page -->
@vite(['resources/assets/vendor/scss/pages/cards-analytics.scss'])
@endsection

@section('vendor-script')
@vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')
@endsection

@section('page-script')
@vite('resources/assets/js/cards-analytics.js')
@endsection

@section('content')
<div class="row gy-6">
  <!-- Total Transactions & Report Chart -->
  <div class="col-12 col-xl-8">
    <div class="card h-100">
      <div class="row row-bordered g-0">
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

  <!-- Performance Overview Chart-->
  <div class="col-12 col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header pb-1">
        <div class="d-flex justify-content-between">
          <h5 class="mb-1">Performance Overview</h5>
          <div class="dropdown">
            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="performanceOverviewDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ri-more-2-line ri-20px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="performanceOverviewDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="performanceOverviewChart"></div>
        <div class="d-flex align-items-center justify-content-center gap-1">
          <div class="badge badge-dot bg-warning"></div>
          <p class="text-muted mb-0">Average cost per interaction is $5.65</p>
        </div>
      </div>
    </div>
  </div>
  <!--/ Performance Overview Chart-->

  <!-- visits By Day Chart-->
  <div class="col-12 col-xl-4 col-md-6">
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
      <div class="card-body">
        <div id="visitsByDayChart"></div>
        <div class="d-flex justify-content-between mt-4">
          <div>
            <h6 class="mb-0">Most Visited Day</h6>
            <p class="mb-0 small">Total 62.4k Visits on Thursday</p>
          </div>
          <div class="avatar">
            <div class="avatar-initial bg-label-primary rounded">
              <i class="ri-arrow-right-s-line ri-24px scaleX-n1-rtl"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ visits By Day Chart-->

  <!-- Organic Sessions Chart-->
  <div class="col-12 col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header pb-1">
        <div class="d-flex justify-content-between">
          <h5 class="mb-1">Organic Sessions</h5>
          <div class="dropdown">
            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="organicSessionsDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ri-more-2-line ri-20px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="organicSessionsDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="organicSessionsChart"></div>
      </div>
    </div>
  </div>
  <!--/ Organic Sessions Chart-->

  <!-- Weekly Sales Chart-->
  <div class="col-12 col-xl-4 col-md-6">
    <div class="card">
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
        <div class="row mb-7">
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

  <!-- Project Timeline Chart-->
  <div class="col-12 col-xl-8">
    <div class="card h-100">
      <div class="row">
        <div class="col-md-8 col-12 order-2 order-md-0">
          <div class="card-header">
            <h5 class="mb-1">Project Timeline</h5>
            <p class="mb-0 card-subtitle">Total 840 Task Completed</p>
          </div>
          <div class="card-body px-2">
            <div id="projectTimelineChart"></div>
          </div>
        </div>
        <div class="col-md-4 col-12 border-start">
          <div class="card-header">
            <div class="d-flex justify-content-between">
              <h5 class="mb-1">Project List</h5>
              <div class="dropdown">
                <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="projectTimeline" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="ri-more-2-line ri-20px"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectTimeline">
                  <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                  <a class="dropdown-item" href="javascript:void(0);">Share</a>
                  <a class="dropdown-item" href="javascript:void(0);">Update</a>
                </div>
              </div>
            </div>
            <p class="mb-0 card-subtitle">4 Ongoing Project</p>
          </div>
          <div class="card-body pt-4">
            <div class="d-flex align-items-center mb-6">
              <div class="avatar">
                <div class="avatar-initial bg-label-primary rounded">
                  <i class="ri-smartphone-line ri-24px"></i>
                </div>
              </div>
              <div class="ms-3 d-flex flex-column">
                <h6 class="mb-1">IOS Application</h6>
                <small>Task 840/2.5K</small>
              </div>
            </div>
            <div class="d-flex align-items-center mb-6">
              <div class="avatar">
                <div class="avatar-initial bg-label-success rounded">
                  <i class="ri-sparkling-2-fill ri-24px"></i>
                </div>
              </div>
              <div class="ms-3 d-flex flex-column">
                <h6 class="mb-1">Web Application</h6>
                <small>Task 99/1.42k</small>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div class="avatar">
                <div class="avatar-initial bg-label-info rounded">
                  <i class="ri-pencil-ruler-2-line ri-24px"></i>
                </div>
              </div>
              <div class="ms-3 d-flex flex-column">
                <h6 class="mb-1">UI Kit Design</h6>
                <small>Task 120/350</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Project Timeline Chart-->

  <!-- Monthly Budget Chart-->
  <div class="col-12 col-xl-4 col-md-6">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-1">Monthly Budget</h5>
          <div class="dropdown">
            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="monthlyBudgetDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ri-more-2-line ri-20px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="monthlyBudgetDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              <a class="dropdown-item" href="javascript:void(0);">Update</a>
              <a class="dropdown-item" href="javascript:void(0);">Share</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="monthlyBudgetChart"></div>
        <div class="mt-4">
          <p class="mb-0">Last month you had $2.42 expense transactions, 12 savings entries and 4 bills.</p>
        </div>
      </div>
    </div>
  </div>
  <!--/ Monthly Budget Chart-->

  <!-- Performance Chart -->
  <div class="col-12 col-xl-4 col-md-6">
    <div class="card">
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

  <!-- External Links Chart -->
  <div class="col-12 col-xl-4 col-md-6 order-md-1 order-lg-0">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-1">External Links</h5>
          <div class="dropdown">
            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="externalLinksDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ri-more-2-line ri-20px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="externalLinksDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              <a class="dropdown-item" href="javascript:void(0);">Update</a>
              <a class="dropdown-item" href="javascript:void(0);">Share</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="externalLinksChart"></div>
        <div class="table-responsive text-nowrap">
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td class="text-start pb-0 ps-0">
                  <div class="d-flex align-items-center">
                    <i class="ri-circle-fill ri-14px text-primary me-2"></i>
                    <h6 class="mb-0 small">Google Analytics</h6>
                  </div>
                </td>
                <td class="pb-0">
                  <p class="mb-0 small">$845k</p>
                </td>
                <td class="pe-0 pb-0">
                  <div class="d-flex align-items-center justify-content-end">
                    <h6 class="mb-0 me-2 small">82%</h6>
                    <i class="ri-arrow-down-s-line text-danger ri-24px"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-start pb-0 ps-0">
                  <div class="d-flex align-items-center">
                    <i class="ri-circle-fill ri-14px text-primary me-2"></i>
                    <h6 class="mb-0 small">Facebook Ads</h6>
                  </div>
                </td>
                <td class="pb-0">
                  <p class="mb-0 small">$12.5k</p>
                </td>
                <td class="pe-0 pb-0">
                  <div class="d-flex align-items-center justify-content-end">
                    <h6 class="mb-0 me-2 small">52%</h6>
                    <i class="ri-arrow-up-s-line text-success ri-24px"></i>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--/ External Links Chart -->

  <!-- Sales Country Chart -->
  <div class="col-12 col-xl-4 col-lg-6">
    <div class="card">
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

  <!-- Activity Timeline -->
  <div class="col-12 col-xl-8 col-lg-6">
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

  <!-- Weekly Overview Chart -->
  <div class="col-12 col-xl-4 col-md-6 order-md-2 order-lg-0">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-0">Weekly Overview</h5>
          <div class="dropdown">
            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="weeklyOverviewDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ri-more-2-line ri-20px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklyOverviewDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="weeklyOverviewChart"></div>
        <div class="mt-6">
          <div class="d-flex align-items-center gap-4">
            <h4 class="mb-0">62%</h4>
            <p class="mb-0">Your sales performance is 35% 😎 better compared to last month</p>
          </div>
          <div class="d-grid mt-6">
            <button class="btn btn-primary" type="button">Details</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Weekly Overview Chart -->

  <!-- Topic and Instructors -->
  <div class="col-12 col-lg-6 col-xl-7">
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
  <!--  Topic and Instructors  End-->
  <!-- Shipment statistics-->
  <div class="col-lg-6 col-xl-5">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2 mb-1">Shipment statistics</h5>
          <p class="card-subtitle mb-0">Total number of deliveries 23.8k</p>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-outline-primary">January</button>
          <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="javascript:void(0);">January</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">February</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">March</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">April</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">May</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">June</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">July</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">August</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">September</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">October</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">November</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">December</a></li>
          </ul>
        </div>
      </div>
      <div class="card-body">
        <div id="shipmentStatisticsChart"></div>
      </div>
    </div>
  </div>
  <!--/ Shipment statistics -->

  <!-- Reasons for delivery exceptions -->
  <div class="col-md-6 order-md-3 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Reasons for delivery exceptions</h5>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1" type="button" id="deliveryExceptions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ri-more-2-line ri-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryExceptions">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="deliveryExceptionsChart"></div>
      </div>
    </div>
  </div>
  <!--/ Reasons for delivery exceptions -->
</div>
@endsection

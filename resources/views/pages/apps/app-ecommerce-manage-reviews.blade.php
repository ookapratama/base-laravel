@extends('layouts/layoutMaster')

@section('title', 'eCommerce Manage Review - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss',
  'resources/assets/vendor/libs/apex-charts/apex-charts.scss',
  'resources/assets/vendor/libs/rateyo/rateyo.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/apex-charts/apexcharts.js',
  'resources/assets/vendor/libs/rateyo/rateyo.js'
])
@endsection

@section('page-style')
@vite('resources/assets/vendor/scss/pages/app-ecommerce.scss')
@endsection

@section('page-script')
@vite([
  'resources/assets/js/app-ecommerce-reviews.js',
  'resources/assets/js/extended-ui-star-ratings.js'
])
@endsection

@section('content')
<div class="row mb-6 g-6">
  <div class="col-md-6">
    <div class="card h-100">
      <div class="card-body row widget-separator">
        <div class="col-sm-5 border-shift border-end">
          <div class="d-flex align-items-center mb-2">
            <span class="text-primary fs-3 fw-medium">4.89</span>
            <span class='ri-star-smile-line ri-32px ms-2 text-primary'></span>
          </div>
          <h6 class="mb-2">Total 187 reviews</h6>
          <p class="mb-2">All reviews are from genuine customers</p>
          <span class="badge bg-label-primary rounded-pill mb-4 mb-sm-0">+5 This week</span>
          <hr class="d-sm-none">
        </div>

        <div class="col-sm-7 g-2 text-nowrap d-flex flex-column justify-content-between px-6 gap-3">
          <div class="d-flex align-items-center gap-2">
            <small>5 Star</small>
            <div class="progress w-100 rounded-pill" style="height:8px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 61.50%" aria-valuenow="61.50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">124</small>
          </div>
          <div class="d-flex align-items-center gap-2">
            <small>4 Star</small>
            <div class="progress w-100 rounded-pill" style="height:8px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">40</small>
          </div>
          <div class="d-flex align-items-center gap-2">
            <small>3 Star</small>
            <div class="progress w-100 rounded-pill" style="height:8px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">12</small>
          </div>
          <div class="d-flex align-items-center gap-2">
            <small>2 Star</small>
            <div class="progress w-100 rounded-pill" style="height:8px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">7</small>
          </div>
          <div class="d-flex align-items-center gap-2">
            <small>1 Star</small>
            <div class="progress w-100 rounded-pill" style="height:8px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">2</small>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card h-100">
      <div class="card-body row">
        <div class="col-sm-5">
          <div class="mb-12">
            <h5 class="mb-2 text-nowrap">Reviews statistics</h5>
            <p class="mb-0"> <span class="me-2">12 New reviews</span> <span class="badge bg-label-success rounded-pill">+8.4%</span></p>
          </div>

          <div>
            <h6 class="mb-2 fw-normal">
              <span class="text-success me-1">87%</span>Positive reviews
            </h6>
            <small>Weekly Report</small>
          </div>
        </div>
        <div class="col-sm-7 d-flex justify-content-end align-items-end">
          <div id="reviewsChart"></div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- review List Table -->
<div class="card">
  <div class="card-datatable table-responsive">
    <table class="datatables-review table">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th>Product</th>
          <th class="text-nowrap">Reviewer</th>
          <th>Review</th>
          <th>Date</th>
          <th class="text-nowrap">Status</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

@endsection

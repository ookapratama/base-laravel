@extends('layouts/layoutMaster')

@section('title', 'eCommerce Order List - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/app-ecommerce-order-list.js'
])
@endsection

@section('content')
<!-- Order List Widget -->

<div class="card mb-6">
  <div class="card-widget-separator-wrapper">
    <div class="card-body card-widget-separator">
      <div class="row gy-4 gy-sm-1">
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-4 pb-sm-0">
            <div>
              <h4 class="mb-0">56</h4>
              <p class="mb-0">Pending Payment</p>
            </div>
            <div class="avatar me-sm-6">
              <span class="avatar-initial rounded text-heading">
                <i class="ri-calendar-2-line ri-26px"></i>
              </span>
            </div>
          </div>
          <hr class="d-none d-sm-block d-lg-none me-6">
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-4 pb-sm-0">
            <div>
              <h4 class="mb-0">12,689</h4>
              <p class="mb-0">Completed</p>
            </div>
            <div class="avatar me-lg-6">
              <span class="avatar-initial rounded text-heading">
                <i class="ri-check-double-line ri-26px"></i>
              </span>
            </div>
          </div>
          <hr class="d-none d-sm-block d-lg-none">
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start border-end pb-4 pb-sm-0 card-widget-3">
            <div>
              <h4 class="mb-0">124</h4>
              <p class="mb-0">Refunded</p>
            </div>
            <div class="avatar me-sm-6">
              <span class="avatar-initial rounded text-heading">
                <i class="ri-wallet-3-line ri-26px"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start">
            <div>
              <h4 class="mb-0">32</h4>
              <p class="mb-0">Failed</p>
            </div>
            <div class="avatar">
              <span class="avatar-initial rounded text-heading">
                <i class="ri-error-warning-line ri-26px"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Order List Table -->
<div class="card">
  <div class="card-datatable table-responsive">
    <table class="datatables-order table">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th>order</th>
          <th>date</th>
          <th>customers</th>
          <th>payment</th>
          <th>status</th>
          <th>method</th>
          <th>actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

@endsection

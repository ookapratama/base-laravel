@extends('layouts/layoutMaster')

@section('title', 'eCommerce Referrals - Apps')

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
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/app-ecommerce-referral.js'
])
@endsection

@section('content')
<div class="row mb-6 g-6">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h5 class="mb-1">$24,983</h5>
            <small>Total Earning</small>
          </div>
          <span class="badge bg-label-primary rounded-circle p-2">
            <i class="ri-money-dollar-circle-line ri-24px"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h5 class="mb-1">$8,647</h5>
            <small>Unpaid Earning</small>
          </div>
          <span class="badge bg-label-success rounded-circle p-2">
            <i class="ri-gift-line ri-24px"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h5 class="mb-1">2,367</h5>
            <small>Signups</small>
          </div>
          <span class="badge bg-label-danger rounded-circle p-2">
            <i class="ri-group-line ri-24px"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h5 class="mb-1">4.5%</h5>
            <small>Conversion Rate</small>
          </div>
          <span class="badge bg-label-info rounded-circle p-2">
            <i class="ri-refresh-line ri-24px"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mb-6 g-6">
  <div class="col-lg-7">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="mb-1">How to use</h5>
        <p class="mb-6 card-subtitle mt-0">Integrate your referral code in 3 easy steps.</p>
        <div class="d-flex flex-column flex-sm-row justify-content-between text-center gap-6">
          <div class="d-flex flex-column align-items-center">
            <span class="p-4 border-1 border-primary rounded-circle border-dashed mb-0 w-px-75 h-px-75"><img src="{{asset('assets/svg/icons/rocket.svg')}}" alt="Rocket"></span>
            <p class="my-2 w-75">Create & validate your referral link and get</p>
            <h6 class="text-primary mb-0">$50</h6>
          </div>
          <div class="d-flex flex-column align-items-center">
            <span class="p-4 border-1 border-primary rounded-circle border-dashed mb-0 w-px-75 h-px-75"><img src="{{asset('assets/svg/icons/user-info.svg')}}" alt="user-info"></span>
            <p class="my-2 w-75">For every new signup you get</p>
            <h6 class="text-primary mb-0">10%</h6>
          </div>
          <div class="d-flex flex-column align-items-center">
            <span class="p-4 border-1 border-primary rounded-circle border-dashed mb-0 w-px-75 h-px-75"><img src="{{asset('assets/svg/icons/paper.svg')}}" alt="paper"></span>
            <p class="my-2 w-75">Get other friends to generate link and get</p>
            <h6 class="text-primary mb-0">$100</h6>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-5">
    <div class="card h-100">
      <div class="card-body">
        <form class="referral-form" onsubmit="return false">
          <div class="mb-6">
            <h5 class="mb-5">Invite your friends</h5>
            <div class="row gx-4 gy-2">
              <div class="col-sm-9 col-lg-8">
                <input type="text" id="referralEmail" name="referralEmail" class="form-control form-control-sm" placeholder="Enter friend’s email address">
              </div>
              <div class="col-sm-3 col-lg-4">
                <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="ri-check-line ri-16px me-2"></i>Submit</button>
              </div>
            </div>
          </div>
          <div class="pt-4">
            <h5 class="mb-5">Share the referral link</h5>
            <div class="row gx-4 gy-2">
              <div class="col-sm-9 col-lg-8">
                <input type="text" id="referralLink" name="referralLink" class="form-control form-control-sm" placeholder="pixinvent.com/?ref=6479" />
              </div>
              <div class="col-sm-3 col-lg-4">
                <div class="d-flex gap-2">
                  <button type="button" class="btn btn-facebook btn-icon"><i class='ri-facebook-circle-line text-white ri-22px'></i></button>
                  <button type="button" class="btn btn-twitter btn-icon"><i class='ri-twitter-line text-white ri-22px'></i></button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Referral List Table -->
<div class="card">
  <div class="card-datatable table-responsive">
    <table class="datatables-referral table">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th>Users</th>
          <th class="text-nowrap">Referred ID</th>
          <th>Status</th>
          <th>Value</th>
          <th class="text-nowrap">Earnings</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

@endsection

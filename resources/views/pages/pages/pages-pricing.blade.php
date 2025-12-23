@extends('layouts/layoutMaster')

@section('title', 'Pricing - Pages')

<!-- Page Styles -->
@section('page-style')
@vite(['resources/assets/vendor/scss/pages/page-pricing.scss'])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/pages-pricing.js'])
@endsection

@section('content')
<div class="card">
  <!-- Pricing Plans -->
  <div class="pb-sm-12 pb-2 rounded-top">
    <div class="container py-12">
      <h4 class="text-center mb-2 mt-0 mt-md-4">Pricing Plans</h4>
      <p class="text-center mb-2">All plans include 40+ advanced tools and features to boost your product. Choose the best plan to fit your needs.</p>
      <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 pt-7 mb-6">
        <label class="switch switch-sm ms-sm-5 ps-sm-5 me-0">
          <span class="switch-label fw-medium text-body pe-1 fs-6">Monthly</span>
          <input type="checkbox" class="switch-input price-duration-toggler" checked />
          <span class="switch-toggle-slider">
            <span class="switch-on"></span>
            <span class="switch-off"></span>
          </span>
          <span class="switch-label fw-medium text-body ps-9 fs-6">Annual</span>
        </label>
        <div class="mt-n5 ms-n5 ml-2 mb-8 d-none d-sm-flex align-items-center gap-1">
          <i class="ri-corner-left-down-fill ri-24px text-muted scaleX-n1-rtl"></i>
          <span class="badge badge-sm bg-label-primary rounded-pill mb-2 ">Save up to 10%</span>
        </div>
      </div>

      <div class="pricing-plans row mx-4 gy-3 px-lg-12">
        <!-- Basic -->
        <div class="col-lg mb-lg-0 mb-3">
          <div class="card border shadow-none">
            <div class="card-body pt-12">
              <div class="mt-3 mb-5 text-center">
                <img src="{{asset('assets/img/illustrations/pricing-basic.png')}}" alt="Basic Image" height="100">
              </div>
              <h4 class="card-title text-center text-capitalize mb-2">Basic</h4>
              <p class="text-center mb-5">A simple start for everyone</p>
              <div class="text-center">
                <div class="d-flex justify-content-center">
                  <sup class="h6 pricing-currency mt-2 mb-0 me-1 text-body">$</sup>
                  <h1 class="mb-0 text-primary">0</h1>
                  <sub class="h6 pricing-duration mt-auto mb-1 text-body">/month</sub>
                </div>
              </div>

              <ul class="list-group ps-6 my-5 pt-4">
                <li class="mb-4">100 responses a month</li>
                <li class="mb-4">Unlimited forms and surveys</li>
                <li class="mb-4">Unlimited fields</li>
                <li class="mb-4">Basic form creation tools</li>
                <li class="mb-0">Up to 2 subdomains</li>
              </ul>

              <a href="{{url('auth/register-basic')}}" class="btn btn-outline-success d-grid w-100">Your Current Plan</a>
            </div>
          </div>
        </div>

        <!-- Standard -->
        <div class="col-lg mb-lg-0 mb-3">
          <div class="card border-primary border shadow-none">
            <div class="card-body position-relative pt-4">
              <div class="position-absolute end-0 me-6 top-0 mt-6">
                <span class="badge bg-label-primary rounded-pill">Popular</span>
              </div>
              <div class="my-5 pt-6 text-center">
                <img src="{{asset('assets/img/illustrations/pricing-standard.png')}}" alt="Standard Image" height="100">
              </div>
              <h4 class="card-title text-center text-capitalize mb-2">Standard</h4>
              <p class="text-center mb-5">For small to medium businesses</p>
              <div class="text-center">
                <div class="d-flex justify-content-center">
                  <sup class="h6 pricing-currency mt-2 mb-0 me-1 text-body">$</sup>
                  <h1 class="price-toggle price-yearly text-primary mb-0">40</h1>
                  <h1 class="price-toggle price-monthly text-primary mb-0 d-none">49</h1>
                  <sub class="h6 text-body pricing-duration mt-auto mb-1">/month</sub>
                </div>
                <small class="price-yearly price-yearly-toggle text-muted">USD 480 / year</small>
              </div>

              <ul class="list-group ps-6 my-5 pt-4">
                <li class="mb-4">Unlimited responses</li>
                <li class="mb-4">Unlimited forms and surveys</li>
                <li class="mb-4">Instagram profile page</li>
                <li class="mb-4">Google Docs integration</li>
                <li class="mb-0">Custom “Thank you” page</li>
              </ul>

              <a href="{{url('auth/register-basic')}}" class="btn btn-primary d-grid w-100">Upgrade</a>
            </div>
          </div>
        </div>

        <!-- Enterprise -->
        <div class="col-lg">
          <div class="card border shadow-none">
            <div class="card-body pt-12">

              <div class="mt-3 mb-5 text-center">
                <img src="{{asset('assets/img/illustrations/pricing-enterprise.png')}}" alt="Enterprise Image" height="100">
              </div>
              <h4 class="card-title text-center text-capitalize mb-2">Enterprise</h4>
              <p class="text-center mb-5">Solution for big organizations</p>

              <div class="text-center">
                <div class="d-flex justify-content-center">
                  <sup class="h6 pricing-currency mt-2 mb-0 me-1 text-body">$</sup>
                  <h1 class="price-toggle price-yearly text-primary mb-0">80</h1>
                  <h1 class="price-toggle price-monthly text-primary mb-0 d-none">99</h1>
                  <sub class="h6 pricing-duration mt-auto mb-1 text-body">/month</sub>
                </div>
                <small class="price-yearly price-yearly-toggle text-muted">USD 960 / year</small>
              </div>

              <ul class="list-group ps-6 my-5 pt-4">
                <li class="mb-4">PayPal payments</li>
                <li class="mb-4">Logic Jumps</li>
                <li class="mb-4">File upload with 5GB storage</li>
                <li class="mb-4">Custom domain support</li>
                <li class="mb-0">Stripe integration</li>
              </ul>

              <a href="{{url('auth/register-basic')}}" class="btn btn-outline-primary d-grid w-100">Upgrade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Pricing Plans -->
</div>
@endsection

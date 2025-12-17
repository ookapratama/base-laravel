@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Payment - Front Pages')

<!-- Page Styles -->
@section('page-style')
@vite(['resources/assets/vendor/scss/pages/front-page-payment.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite(['resources/assets/vendor/libs/cleavejs/cleave.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite([
  'resources/assets/js/pages-pricing.js',
  'resources/assets/js/front-page-payment.js'
])
@endsection


@section('content')
<section class="section-py bg-body first-section-pt">
  <div class="container">
    <div class="card px-3">
      <div class="row">
        <div class="col-lg-7 card-body border-end p-8">
          <h4 class="mb-2">Checkout</h4>
          <p class="mb-0">All plans include 40+ advanced tools and features to boost your product. <br>
            Choose the best plan to fit your needs.</p>
          <div class="row my-8 gx-5">
            <div class="col-md mb-md-0 mb-5">
              <div class="form-check custom-option custom-option-basic checked">
                <label class="form-check-label custom-option-content form-check-input-payment d-flex gap-4 align-items-center" for="customRadioVisa">
                  <input name="customRadioTemp" class="form-check-input" type="radio" value="credit-card" id="customRadioVisa" checked />
                  <span class="custom-option-body">
                    <img src="{{asset('assets/img/icons/payments/visa-'.$configData['style'].'.png') }}" alt="visa-card" width="58" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png">
                    <span class="ms-4 text-heading">Credit Card</span>
                  </span>
                </label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-check custom-option custom-option-basic">
                <label class="form-check-label custom-option-content form-check-input-payment d-flex gap-4 align-items-center" for="customRadioPaypal">
                  <input name="customRadioTemp" class="form-check-input" type="radio" value="paypal" id="customRadioPaypal" />
                  <span class="custom-option-body">
                    <img src="{{asset('assets/img/icons/payments/paypal-'.$configData['style'].'.png') }}" alt="paypal" width="58" data-app-light-img="icons/payments/paypal-light.png" data-app-dark-img="icons/payments/paypal-dark.png">
                    <span class="ms-4 text-heading">Paypal</span>
                  </span>
                </label>
              </div>
            </div>
          </div>
          <h4 class="mb-6">Billing Details</h4>
          <form>
            <div class="row g-5">
              <div class="col-md-6">
                <div class="form-floating form-floating-outline ">
                  <input type="text" class="form-control" id="billings-email" placeholder="john.doe@gmail.com" />
                  <label for="billings-email">Email Address</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <select id="billings-country" class="form-select" data-allow-clear="true">
                    <option value="">Billing Country</option>
                    <option value="Australia">Australia</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Canada">Canada</option>
                    <option value="China">China</option>
                    <option value="France">France</option>
                    <option value="Germany">Germany</option>
                    <option value="India">India</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                  </select>
                  <label for="billings-country">Country</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="billings-zip" class="form-control billings-zip-code" placeholder="123456">
                  <label for="billings-zip">Billing Zip / Postal Code</label>
                </div>
              </div>
            </div>
          </form>
          <div id="form-credit-card">
            <h4 class="mt-8 mb-6">Credit Card Info</h4>
            <form>
              <div class="row g-5">
                <div class="col-12">
                  <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                      <input type="text" id="billings-card-num" class="form-control billing-card-mask" placeholder="4541 2541 2547 2577" aria-describedby="paymentCard" />
                      <label for="billings-card-num">Card number</label>
                    </div>
                    <span class="input-group-text cursor-pointer p-1" id="paymentCard"><span class="card-type w-px-50"></span></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="billings-card-name" class="form-control" placeholder="John Doe" />
                    <label for="billings-card-name">Card holder</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="billings-card-date" class="form-control billing-expiry-date-mask" placeholder="05/26" />
                    <label for="billings-card-date">EXP. Date</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="billings-card-cvv" class="form-control billing-cvv-mask" maxlength="3" placeholder="965" />
                    <label for="billings-card-cvv">CVV</label>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-5 card-body p-8 pt-0 pt-lg-8">
          <h4 class="mb-2">Order Summary</h4>
          <p class="mb-8">It can help you manage and service orders before,<br> during and after fulfilment.</p>
          <div class="bg-lighter p-6 rounded-4">
            <p>A simple start for everyone</p>
            <div class="d-flex align-items-center">
              <h1 class="text-heading">$59.99</h1>
              <sub class="h6 text-body mb-1">/month</sub>
            </div>
            <div class="d-grid">
              <a data-bs-target="#pricingModal" data-bs-toggle="modal" class="btn btn-outline-primary text-primary">Change Plan</a>
            </div>
          </div>
          <div class="mt-5">
            <div class="d-flex justify-content-between align-items-center">
              <p class="mb-0">Subtotal</p>
              <h6 class="mb-0">$85.99</h6>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <p class="mb-0">Tax</p>
              <h6 class="mb-0">$4.99</h6>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center pb-1">
              <p class="mb-0">Total</p>
              <h6 class="mb-0">$90.98</h6>
            </div>
            <div class="d-grid mt-5">
              <button class="btn btn-success">
                <span class="me-1_5">Proceed with Payment</span>
                <i class="ri-arrow-right-line ri-16px scaleX-n1-rtl"></i>
              </button>
            </div>

            <p class="mt-8 mb-0">By continuing, you accept to our Terms of Services and Privacy Policy. Please note that payments are non-refundable.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
@include('_partials/_modals/modal-pricing')
<!-- /Modal -->
@endsection

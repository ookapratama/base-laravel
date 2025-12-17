@php
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Account settings - Pages')

<!-- Vendor Styles -->
@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  'resources/assets/vendor/libs/animate-css/animate.scss',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss',
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss'
])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js',
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/cleavejs/cleave-phone.js',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.js',
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'
])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite([
  'resources/assets/js/pages-pricing.js',
  'resources/assets/js/pages-account-settings-billing.js',
  'resources/assets/js/app-invoice-list.js',
  'resources/assets/js/modal-edit-cc.js'
])
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="nav-align-top">
      <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-2 gap-lg-0">
        <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-account')}}"><i class="ri-group-line me-2"></i> Account</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-security')}}"><i class="ri-lock-line me-2"></i> Security</a></li>
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="ri-bookmark-line me-2"></i> Billing & Plans</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-notifications')}}"><i class="ri-notification-4-line me-2"></i> Notifications</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-connections')}}"><i class="ri-link-m me-2"></i> Connections</a></li>
      </ul>
    </div>
    <div class="card mb-6">
      <!-- Current Plan -->
      <h5 class="card-header">Current Plan</h5>
      <div class="card-body pt-1">
        <div class="row row-gap-6">
          <div class="col-md-6 mb-1">
            <div class="mb-6">
              <h6 class="mb-1">Your Current Plan is Basic</h6>
              <p>A simple start for everyone</p>
            </div>
            <div class="mb-6">
              <h6 class="mb-1">Active until Dec 09, 2021</h6>
              <p>We will send you a notification upon Subscription expiration</p>
            </div>
            <div>
              <h6 class="mb-1"><span class="me-1">$199 Per Month</span> <span class="badge bg-label-primary rounded-pill">Popular</span></h6>
              <p class="mb-1">Standard plan for small to medium businesses</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="alert alert-warning mb-6 alert-dismissible" role="alert">
              <h5 class="alert-heading mb-1 d-flex align-items-center">
                <span class="alert-icon rounded-3"><i class="ri-alert-line ri-22px"></i></span>
                <span>We need your attention!</span>
              </h5>
              <span class="ms-11 ps-1">Your plan requires update</span>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            <div class="plan-statistics">
              <div class="d-flex justify-content-between">
                <h6 class="mb-1">Days</h6>
                <h6 class="mb-1">24 of 30 Days</h6>
              </div>
              <div class="progress rounded mb-1" style="height: 6px">
                <div class="progress-bar w-75 rounded" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small>6 days remaining until your plan requires update</small>
            </div>
          </div>
          <div class="col-12 d-flex gap-4 flex-wrap">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricingModal">Upgrade Plan</button>
            <button class="btn btn-outline-danger cancel-subscription">Cancel Subscription</button>
          </div>
        </div>
      </div>
      <!-- /Current Plan -->
    </div>
    <div class="card mb-6">
      <h5 class="card-header mb-1">Payment Methods</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <form id="creditCardForm" class="row g-5" onsubmit="return false">
              <div class="col-12 d-flex column-gap-5 flex-wrap">
                <div class="form-check form-check-inline mb-sm-1 mb-3">
                  <input name="collapsible-payment" class="form-check-input" type="radio" value="" id="collapsible-payment-cc" checked="" />
                  <label class="form-check-label" for="collapsible-payment-cc">Credit/Debit/ATM Card</label>
                </div>
                <div class="form-check form-check-inline mb-1">
                  <input name="collapsible-payment" class="form-check-input" type="radio" value="" id="collapsible-payment-cash" />
                  <label class="form-check-label" for="collapsible-payment-cash">Paypal account</label>
                </div>
              </div>
              <div class="col-12">
                <div class="input-group input-group-merge">
                  <div class="form-floating form-floating-outline">
                    <input id="paymentCard" name="paymentCard" class="form-control credit-card-mask" type="text" placeholder="135632156548789" aria-describedby="paymentCard2" />
                    <label for="paymentCard">Card Number</label>
                  </div>
                  <span class="input-group-text cursor-pointer" id="paymentCard2"><span class="card-type"></span></span>
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="paymentName" class="form-control" placeholder="John Doe" />
                  <label for="paymentName">Name</label>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="paymentExpiryDate" class="form-control expiry-date-mask" placeholder="06/24" />
                  <label for="paymentExpiryDate">Expiry</label>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="input-group input-group-merge">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="paymentCvv" class="form-control cvv-code-mask" maxlength="3" placeholder="***" />
                    <label for="paymentCvv">CVV</label>
                  </div>
                  <span class="input-group-text cursor-pointer" id="paymentCvv2"><i class="ri-question-line text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                </div>
              </div>
              <div class="col-12">
                <div class="form-check form-switch my-1">
                  <input type="checkbox" class="form-check-input" id="future-billing" />
                  <label for="future-billing">Save card for future billing?</label>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary me-3">Save Changes</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
              </div>
            </form>
          </div>
          <div class="col-md-6 mt-12 mt-md-0">
            <h6 class="mb-6">My Cards</h6>
            <div class="added-cards">
              <div class="cardMaster bg-lighter p-5 rounded-4 mb-6">
                <div class="d-flex justify-content-between flex-sm-row flex-column">
                  <div class="card-information me-2">
                    <img class="mb-2 img-fluid" src="{{asset('assets/img/icons/payments/mastercard.png')}}" alt="Master Card">
                    <div class="d-flex align-items-center mb-2 flex-wrap gap-2">
                      <h6 class="mb-0 me-2">Tom McBride</h6>
                      <span class="badge bg-label-primary rounded-pill">Primary</span>
                    </div>
                    <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; 9856</span>
                  </div>
                  <div class="d-flex flex-column text-start text-lg-end">
                    <div class="d-flex order-sm-0 order-1 mt-sm-0 mt-4">
                      <button class="btn btn-sm btn-outline-primary me-4" data-bs-toggle="modal" data-bs-target="#editCCModal">Edit</button>
                      <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </div>
                    <small class="mt-sm-4 mt-2 order-sm-1 order-0">Card expires at 12/26</small>
                  </div>
                </div>
              </div>
              <div class="cardMaster bg-lighter p-5 rounded-4">
                <div class="d-flex justify-content-between flex-sm-row flex-column">
                  <div class="card-information me-2">
                    <img class="mb-2 img-fluid" src="{{asset('assets/img/icons/payments/visa.png')}}" alt="Visa Card">
                    <h6 class="mb-2">Mildred Wagner</h6>
                    <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; 5896</span>
                  </div>
                  <div class="d-flex flex-column text-start text-lg-end">
                    <div class="d-flex order-sm-0 order-1 mt-sm-0 mt-4">
                      <button class="btn btn-sm btn-outline-primary me-4" data-bs-toggle="modal" data-bs-target="#editCCModal">Edit</button>
                      <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </div>
                    <small class="mt-sm-4 mt-2 order-sm-1 order-0">Card expires at 10/27</small>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->
            @include('_partials/_modals/modal-edit-cc')
            <!--/ Modal -->
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-6">
      <!-- Billing Address -->
      <h5 class="card-header">Billing Address</h5>
      <div class="card-body">
        <form id="formAccountSettings" onsubmit="return false">
          <div class="row g-5">
            <div class="col-sm-6">
              <div class="form-floating form-floating-outline">
                <input type="text" id="companyName" name="companyName" class="form-control" placeholder="{{ config('variables.creatorName') }}" />
                <label for="companyName">Company Name</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="text" id="billingEmail" name="billingEmail" placeholder="john.doe@example.com" />
                <label for="billingEmail">Billing Email</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-floating form-floating-outline">
                <input type="text" id="taxId" name="taxId" class="form-control" placeholder="Enter Tax ID" />
                <label for="taxId">Tax ID</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="text" id="vatNumber" name="vatNumber" placeholder="Enter VAT Number" />
                <label for="vatNumber">VAT Number</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input-group input-group-merge">
                <div class="form-floating form-floating-outline">
                  <input class="form-control mobile-number" type="text" id="mobileNumber" name="mobileNumber" placeholder="202 555 0111" />
                  <label for="mobileNumber">Mobile</label>
                </div>
                <span class="input-group-text">US (+1)</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-floating form-floating-outline">
                <select id="country" class="form-select select2" name="country">
                  <option>USA</option>
                  <option>Canada</option>
                  <option>UK</option>
                  <option>Germany</option>
                  <option>France</option>
                </select>
                <label for="country">Country</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating form-floating-outline">
                <input type="text" class="form-control" id="billingAddress" name="billingAddress" placeholder="Billing Address" />
                <label for="billingAddress">Billing Address</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="text" id="state" name="state" placeholder="California" />
                <label for="state">State</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-floating form-floating-outline">
                <input type="text" class="form-control zip-code" id="zipCode" name="zipCode" placeholder="231465" maxlength="6" />
                <label for="zipCode">Zip Code</label>
              </div>
            </div>
          </div>
          <div class="mt-5">
            <button type="submit" class="btn btn-primary me-3">Save changes</button>
            <button type="reset" class="btn btn-outline-secondary">Reset</button>
          </div>
        </form>
      </div>
      <!-- /Billing Address -->
    </div>
    <div class="card">
      <!-- Billing History -->
      <h5 class="card-header text-center text-md-start pb-0">Billing History</h5>
      <div class="card-datatable table-responsive">
        <table class="invoice-list-table table">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>#ID</th>
              <th>#</th>
              <th>Client</th>
              <th>Total</th>
              <th class="text-truncate">Issued Date</th>
              <th>Balance</th>
              <th>Invoice Status</th>
              <th class="cell-fit">Actions</th>
            </tr>
          </thead>
        </table>
      </div>
      <!--/ Billing History -->
    </div>
  </div>
</div>

<!-- Modal -->
@include('_partials/_modals/modal-pricing')
<!-- /Modal -->

@endsection

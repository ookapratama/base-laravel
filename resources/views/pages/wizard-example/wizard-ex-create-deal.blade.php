@php
$configData = Helper::appClasses();
@endphp
@extends('layouts/layoutMaster')

@section('title', 'Create Deal - Wizard Examples')

<!-- Vendor Style -->
@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/bs-stepper/bs-stepper.scss',
  'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss'
])
@endsection

<!-- Vendor Script -->
@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/bs-stepper/bs-stepper.js',
  'resources/assets/vendor/libs/flatpickr/flatpickr.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js'
])
@endsection

<!-- Page Script -->
@section('page-script')
@vite([
  'resources/assets/js/wizard-ex-create-deal.js'
])
@endsection

@section('content')
<!-- Create Deal Wizard -->
<div id="wizard-create-deal" class="bs-stepper wizard-vertical vertical mt-2">
  <div class="bs-stepper-header gap-lg-3 border-end">
    <div class="step" data-target="#deal-type">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle"><i class="ri-check-line"></i></span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-number">01</span>
          <span class="d-flex flex-column gap-1 ms-2">
            <span class="bs-stepper-title">Deal Type</span>
            <span class="bs-stepper-subtitle">Choose type of deal</span>
          </span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#deal-details">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle"><i class="ri-check-line"></i></span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-number">02</span>
          <span class="d-flex flex-column gap-1 ms-2">
            <span class="bs-stepper-title">Deal Details</span>
            <span class="bs-stepper-subtitle">Provide deal details</span>
          </span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#deal-usage">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle"><i class="ri-check-line"></i></span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-number">03</span>
          <span class="d-flex flex-column gap-1 ms-2">
            <span class="bs-stepper-title">Deal Usage</span>
            <span class="bs-stepper-subtitle">Limitations & Offers</span>
          </span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#review-complete">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle"><i class="ri-check-line"></i></span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-number">04</span>
          <span class="d-flex flex-column gap-1 ms-2">
            <span class="bs-stepper-title">Review & Complete</span>
            <span class="bs-stepper-subtitle">Launch a deal!</span>
          </span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-create-deal-form" onSubmit="return false">
      <!-- Deal Type -->
      <div id="deal-type" class="content">
        <div class="row g-6">
          <div class="col-12">
            <img class="img-fluid border rounded-4" src="{{asset('assets/img/illustrations/shopping-girl.png')}}" alt="Shopping Girl" />
          </div>
          <div class="col-12">
            <div class="row g-5">
              <div class="col-md mb-md-0">
                <div class="form-check custom-option custom-option-icon mb-0">
                  <label class="form-check-label custom-option-content" for="customRadioPercentage">
                    <span class="custom-option-body">
                      <i class='ri-percent-line ri-28px'></i>
                      <span class="custom-option-title mb-2">Percentage</span>
                      <small>Create a deal which offer uses some % off (i.e 5% OFF) on total.</small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioPercentage" checked />
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-0">
                <div class="form-check custom-option custom-option-icon mb-0">
                  <label class="form-check-label custom-option-content" for="customRadioFlat">
                    <span class="custom-option-body">
                      <i class='ri-money-dollar-circle-line ri-28px'></i>
                      <span class="custom-option-title mb-2"> Flat Amount </span>
                      <small>Create a deal which offer uses flat $ off (i.e $5 OFF) on the total.</small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioFlat" />
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-0">
                <div class="form-check custom-option custom-option-icon mb-0">
                  <label class="form-check-label custom-option-content" for="customRadioPrime">
                    <span class="custom-option-body">
                      <i class='ri-user-3-line ri-28px'></i>
                      <span class="custom-option-title mb-2"> Prime Member </span>
                      <small>Create prime member only deal to encourage the prime members.</small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioPrime" />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-floating form-floating-outline">
              <input type="text" name="dealAmount" id="dealAmount" class="form-control" placeholder="25" min="0" max="100" aria-describedby="dealAmountHelp" />
              <label for="dealAmount">Discount</label>
              <div id="dealAmountHelp" class="form-text">Enter the discount percentage. 10 = 10%</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-floating form-floating-outline">
              <select id="dealRegion" name="dealRegion" class="select2 form-select" multiple aria-describedby="dealRegionHelp">
                <option disabled value="">Select targeted region</option>
                <option value="asia">Asia</option>
                <option value="africa">Africa</option>
                <option value="europe">Europe</option>
                <option value="north america">North America</option>
                <option value="south america">South America</option>
                <option value="australia">Australia</option>
              </select>
              <label for="dealRegion">Region</label>
              <div id="dealRegionHelp" class="form-text">Select applicable regions for the deal.</div>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between mt-6">
            <button class="btn btn-outline-secondary btn-prev" disabled> <i class="ri-arrow-left-line ri-16px me-sm-1 me-0"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ri-arrow-right-line ri-16px"></i></button>
          </div>
        </div>
      </div>
      <!-- Deal Details -->
      <div id="deal-details" class="content">
        <div class="row g-5">
          <div class="col-sm-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="dealTitle" name="dealTitle" class="form-control" placeholder="Black friday sale, 25% off" />
              <label for="dealTitle">Deal Title</label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="dealCode" name="dealCode" class="form-control" placeholder="25PEROFF" />
              <label for="dealCode">Deal Code</label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-floating form-floating-outline">
              <textarea id="dealDescription" name="dealDescription" class="form-control" style="height: 122px;" placeholder="To sell or distribute something as a business deal"></textarea>
              <label for="dealDescription">Deal Description</label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row g-5">
              <div class="col-12">
                <div class="form-floating form-floating-outline">
                  <select class="select2" id="dealOfferedItem" name="dealOfferedItem" multiple>
                    <option disabled value="">Select offered item</option>
                    <option value="65328">Apple iPhone 12 Pro Max (256GB)</option>
                    <option value="25612">Apple iPhone 12 Pro (512GB)</option>
                    <option value="65454">Apple iPhone 12 Mini (256GB)</option>
                    <option value="12365">Apple iPhone 11 Pro Max (256GB)</option>
                    <option value="85466">Apple iPhone 11 (64GB)</option>
                    <option value="98564">OnePlus Nord CE 5G (128GB)</option>
                  </select>
                  <label for="dealOfferedItem">Offered Items</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating form-floating-outline">
                  <select class="form-select" id="dealCartCondition" name="dealCartCondition">
                    <option value="">Select cart condition</option>
                    <option value="all">Cart must contain all selected Downloads</option>
                    <option value="any">Cart needs one or more of the selected Downloads</option>
                  </select>
                  <label for="dealCartCondition">Cart condition</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="dealDuration" name="dealDuration" class="form-control" placeholder="YYYY-MM-DD to YYYY-MM-DD" />
              <label for="dealDuration">Deal Duration</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="mb-1">Notify Users</label>
            <div class="row">
              <div class="col mt-2">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="dealNotifyEmail" name="dealNotifyEmail" value="email">
                  <label class="form-check-label" for="dealNotifyEmail">Email</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="dealNotifySMS" name="dealNotifySMS" value="sms">
                  <label class="form-check-label" for="dealNotifySMS">SMS</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="dealNotifyPush" name="dealNotifyPush" value="push">
                  <label class="form-check-label" for="dealNotifyPush">Push Notification</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between mt-6">
            <button class="btn btn-outline-secondary btn-prev"> <i class="ri-arrow-left-line ri-16px me-sm-1 me-0"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ri-arrow-right-line ri-16px"></i></button>
          </div>
        </div>
      </div>
      <!-- Deal Usage -->
      <div id="deal-usage" class="content">
        <div class="row g-5">
          <div class="col-sm-6">
            <div class="form-floating form-floating-outline">
              <select id="dealUserType" name="dealUserType" class="form-select">
                <option selected disabled value="">Select user type</option>
                <option value="all">All</option>
                <option value="registered">Registered</option>
                <option value="unregistered">Unregistered</option>
                <option value="prime-members">Prime members</option>
              </select>
              <label for="dealUserType">User Type</label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-floating form-floating-outline">
              <input type="number" id="dealMaxUsers" name="dealMaxUsers" class="form-control" placeholder="500" />
              <label for="dealMaxUsers">Max Users</label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-floating form-floating-outline">
              <input type="number" id="dealMinimumCartAmount" name="dealMinimumCartAmount" class="form-control" placeholder="$99" />
              <label for="dealMinimumCartAmount">Minimum Cart Amount</label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-floating form-floating-outline">
              <input type="number" id="dealPromotionalFee" name="dealPromotionalFee" class="form-control" placeholder="$9" />
              <label for="dealPromotionalFee">Promotional Fee</label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-floating form-floating-outline">
              <select id="dealPaymentMethod" name="dealPaymentMethod" class="form-select">
                <option selected disabled value="">Select payment method</option>
                <option value="any">Any</option>
                <option value="credit-card">Credit Card</option>
                <option value="net-banking">Net Banking</option>
                <option value="wallet">Wallet</option>
              </select>
              <label for="dealPaymentMethod">Payment Method</label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-floating form-floating-outline">
              <select id="dealStatus" name="dealStatus" class="form-select">
                <option selected disabled value="">Select status</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
                <option value="suspend">Suspend</option>
                <option value="abandon">Abandone</option>
              </select>
              <label for="dealStatus">Deal Status</label>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-check form-switch ms-2">
              <input type="checkbox" class="form-check-input" id="dealLimitUser" name="dealLimitUser" />
              <label for="dealLimitUser" class="switch-label">Limit this discount to a single-use per customer?</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between mt-6">
            <button class="btn btn-outline-secondary btn-prev"> <i class="ri-arrow-left-line ri-16px me-sm-1 me-0"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ri-arrow-right-line ri-16px"></i></button>
          </div>
        </div>
      </div>
      <!-- Review & Complete -->
      <div id="review-complete" class="content">
        <div class="row g-3">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-12 mb-0">
                <h4>Almost done! 🚀</h4>
                <p>Confirm your deal details information and submit to create it.</p>
              </div>
              <div class="col-12 mb-0">
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <td class="ps-0 align-top text-nowrap py-1 fw-medium">Deal Type</td>
                      <td class="px-0 py-1">Percentage</td>
                    </tr>
                    <tr>
                      <td class="ps-0 align-top text-nowrap py-1 fw-medium">Amount</td>
                      <td class="px-0 py-1">25%</td>
                    </tr>
                    <tr>
                      <td class="ps-0 align-top text-nowrap py-1 fw-medium">Deal Code</td>
                      <td class="px-0 py-1">
                        <div class="badge rounded-pill bg-label-warning">25PEROFF</div>
                      </td>
                    </tr>
                    <tr>
                      <td class="ps-0 align-top text-nowrap py-1 fw-medium">Deal Title</td>
                      <td class="px-0 py-1">Black friday sale, 25% OFF</td>
                    </tr>
                    <tr>
                      <td class="ps-0 align-top text-nowrap py-1 fw-medium"><span>Deal Duration</span></td>
                      <td class="px-0 py-1">2021-07-14 to 2021-07-30</td>
                    </tr>
                  </tbody>
                </table>
                <div class="form-check form-switch ms-2">
                  <input type="checkbox" class="form-check-input" id="dealConfirmed" name="dealConfirmed" />
                  <label for="dealLimitUser" class="switch-label">I have confirmed the deal details.</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-center justify-content-center border rounded-4 pt-3">
            <img class="img-fluid scaleX-n1-rtl" src="{{asset('assets/img/illustrations/create-deal-review-complete.png')}}" alt="process completed" width="170" />
          </div>
          <div class="col-12 d-flex justify-content-between mt-6">
            <button class="btn btn-outline-secondary btn-prev"> <i class="ri-arrow-left-line ri-16px me-sm-1 me-0"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-success btn-submit btn-next"><span class="align-middle d-sm-inline-block d-none">Submit</span> <i class="ri-check-line ri-16px ms-0 ms-sm-2"></i></button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- /Create Deal Wizard -->
@endsection

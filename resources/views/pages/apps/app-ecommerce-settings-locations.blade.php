@extends('layouts/layoutMaster')

@section('title', 'eCommerce Settings Locations - Apps')

@section('vendor-style')
@vite('resources/assets/vendor/libs/select2/select2.scss')
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/cleavejs/cleave-phone.js'
])
@endsection

@section('page-script')
@vite('resources/assets/js/app-ecommerce-settings.js')
@endsection

@section('content')
<div class="row gx-6">

  <!-- Navigation -->
  <div class="col-12 col-lg-4">
    <div class="d-flex justify-content-between flex-column mb-4 mb-md-0">
      <h5 class="mb-4">Getting Started</h5>
      <ul class="nav nav-align-left nav-pills flex-column">
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/details')}}">
            <i class="ri-store-2-line me-2"></i>
            <span class="align-middle">Store details</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/payments')}}">
            <i class="ri-bank-card-line me-2"></i>
            <span class="align-middle">Payments</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/checkout')}}">
            <i class="ri-shopping-cart-line me-2"></i>
            <span class="align-middle">Checkout</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/shipping')}}">
            <i class="ri-car-line me-2"></i>
            <span class="align-middle">Shipping & delivery</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link active" href="javascript:void(0);">
            <i class="ri-map-pin-2-line me-2"></i>
            <span class="align-middle">Locations</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/notifications')}}">
            <i class="ri-notification-4-line me-2"></i>
            <span class="align-middle">Notifications</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- /Navigation -->

  <!-- Options -->
  <div class="col-12 col-lg-8 pt-6 pt-lg-0">
    <div class="tab-content p-0">
      <!-- Locations Tab -->
      <div class="tab-pane fade show active" id="locations" role="tabpanel">
        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-title m-0">Location Name</h5>
          </div>
          <div class="card-body">
            <div class="col-12 mb-6">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="text" name="locationName" id="locationName" placeholder="Shop location">
                <label for="locationName">Location Name</label>
              </div>
            </div>
            <div class="form-check mb-6">
              <input class="form-check-input" type="checkbox" value="" id="def_location" checked>
              <label class="form-check-label" for="def_location">
                Fulfill online orders from this location
              </label>
            </div>
            <div class="alert d-flex align-items-center alert-info mb-0 h6" role="alert">
              <span class="alert-icon rounded-3"><i class="ri-information-line ri-22px"></i></span>
              This is your default location. To change whether you fulfill online orders from this location, select another default location first.
            </div>
          </div>
        </div>
        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-title m-0">Address</h5>
          </div>
          <div class="card-body">
            <div class="row g-5">
              <div class="col-12">
                <div class="form-floating form-floating-outline">
                  <select id="country_region" class="select2 form-select" data-placeholder="United States">
                    <option value="">United States</option>
                    <option value="Australia">Australia</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Canada">Canada</option>
                    <option value="China">China</option>
                    <option value="France">France</option>
                    <option value="Germany">Germany</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Japan">Japan</option>
                    <option value="Korea">Korea, Republic of</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Russia">Russian Federation</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                  </select>
                  <label for="country_region">Country/region</label>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="loc_address" class="form-control" placeholder="Address" />
                  <label for="loc_address">Address</label>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="loc_apa_suite" class="form-control" placeholder="Apartment, suite, etc." />
                  <label for="loc_apa_suite">Apartment, suite, etc.</label>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="form-floating form-floating-outline">
                  <input type="tel" class="form-control phone-mask" id="loc_phone" placeholder="Phone" name="loc_phone" aria-label="loc_phone">
                  <label for="loc_phone">Phone</label>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="loc_city" class="form-control" placeholder="City" />
                  <label for="loc_city">City</label>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="loc_state" class="form-control" placeholder="State" />
                  <label for="loc_state">State</label>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="form-floating form-floating-outline">
                  <input type="number" id="loc_pincode" class="form-control" placeholder="PIN Code" min="0" max="999999" />
                  <label for="loc_pincode">PIN Code</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-end gap-4">
          <button type="reset" class="btn btn-outline-secondary">Discard</button>
          <a class="btn btn-primary" href="notifications">Save Changes</a>
        </div>
      </div>
    </div>
    <!-- /Options-->
  </div>
</div>
@endsection

@extends('layouts/layoutMaster')

@section('title', 'Account settings - Account')

<!-- Vendor Styles -->
@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/tagify/tagify.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  'resources/assets/vendor/libs/animate-css/animate.scss',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss'
])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/tagify/tagify.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js',
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/cleavejs/cleave-phone.js',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.js'
])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/pages-account-settings-account.js'])
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="nav-align-top">
      <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-2 gap-lg-0">
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="ri-group-line me-2"></i>Account</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-security')}}"><i class="ri-lock-line me-2"></i>Security</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-billing')}}"><i class="ri-bookmark-line me-2"></i>Billing & Plans</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-notifications')}}"><i class="ri-notification-4-line me-2"></i>Notifications</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-connections')}}"><i class="ri-link-m me-2"></i>Connections</a></li>
      </ul>
    </div>
    <div class="card mb-6">
      <!-- Account -->
      <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-6">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded-4" id="uploadedAvatar" />
          <div class="button-wrapper">
            <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
              <span class="d-none d-sm-block">Upload new photo</span>
              <i class="ri-upload-2-line d-block d-sm-none"></i>
              <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
            </label>
            <button type="button" class="btn btn-outline-danger account-image-reset mb-4">
              <i class="ri-refresh-line d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Reset</span>
            </button>

            <div>Allowed JPG, GIF or PNG. Max size of 800K</div>
          </div>
        </div>
      </div>
      <div class="card-body pt-0">
        <form id="formAccountSettings" method="GET" onsubmit="return false">
          <div class="row mt-1 g-5">
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="text" id="firstName" name="firstName" value="John" autofocus />
                <label for="firstName">First Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="text" name="lastName" id="lastName" value="Doe" />
                <label for="lastName">Last Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="text" id="email" name="email" value="john.doe@example.com" placeholder="john.doe@example.com" />
                <label for="email">E-mail</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <input type="text" class="form-control" id="organization" name="organization" value="{{config('variables.creatorName')}}" />
                <label for="organization">Organization</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group input-group-merge">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" value="+1 (917) 543-9876" />
                  <label for="phoneNumber">Phone Number</label>
                </div>
                <span class="input-group-text">US (+1)</span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <input type="text" class="form-control" id="address" name="address" value="123 Main St, New York, NY 10001" />
                <label for="address">Address</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="text" id="state" name="state" value="New York" />
                <label for="state">State</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <input type="text" class="form-control" id="zipCode" name="zipCode" value="648391" maxlength="6" />
                <label for="zipCode">Zip Code</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <select id="country" class="select2 form-select">
                  <option value="Australia">Australia</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Brazil">Brazil</option>
                  <option value="Canada">Canada</option>
                  <option value="China">China</option>
                  <option value="France">France</option>
                  <option value="Germany">Germany</option>
                  <option value="India" selected>India</option>
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
                <label for="country">Country</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <input id="TagifyLanguageSuggestion" name="TagifyLanguageSuggestion" class="form-control h-auto" placeholder="select language" value="English">
                <label for="TagifyLanguageSuggestion">Language</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <select id="timeZones" class="select2 form-select">
                  <option value="-12" selected>(GMT-12:00) International Date Line West</option>
                  <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                  <option value="-10">(GMT-10:00) Hawaii</option>
                  <option value="-9">(GMT-09:00) Alaska</option>
                  <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                  <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                  <option value="-7">(GMT-07:00) Arizona</option>
                  <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                  <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                  <option value="-6">(GMT-06:00) Central America</option>
                  <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                  <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                  <option value="-6">(GMT-06:00) Saskatchewan</option>
                  <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                  <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                  <option value="-5">(GMT-05:00) Indiana (East)</option>
                  <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                  <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                </select>
                <label for="timeZones">Timezone</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <select id="currency" class="select2 form-select">
                  <option value="usd" selected>USD</option>
                  <option value="euro">Euro</option>
                  <option value="pound">Pound</option>
                  <option value="bitcoin">Bitcoin</option>
                </select>
                <label for="currency">Currency</label>
              </div>
            </div>
          </div>
          <div class="mt-6">
            <button type="submit" class="btn btn-primary me-3">Save changes</button>
            <button type="reset" class="btn btn-outline-secondary">Reset</button>
          </div>
        </form>
      </div>
      <!-- /Account -->
    </div>
    <div class="card">
      <h5 class="card-header mb-1">Delete Account</h5>
      <div class="card-body">
        <div class="mb-6 col-12 mb-0">
          <div class="alert alert-warning">
            <h6 class="alert-heading mb-1">Are you sure you want to delete your account?</h6>
            <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
          </div>
        </div>
        <form id="formAccountDeactivation" onsubmit="return false">
          <div class="form-check mb-6">
            <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
            <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
          </div>
          <button type="submit" class="btn btn-danger deactivate-account" disabled>Deactivate Account</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

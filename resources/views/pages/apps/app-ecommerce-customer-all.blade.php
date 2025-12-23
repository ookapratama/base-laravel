@extends('layouts/layoutMaster')

@section('title', 'eCommerce Customer All - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  'resources/assets/vendor/libs/select2/select2.scss'
  ])
@endsection

@section('vendor-script')
@vite([
'resources/assets/vendor/libs/moment/moment.js',
'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
'resources/assets/vendor/libs/select2/select2.js',
'resources/assets/vendor/libs/@form-validation/popular.js',
'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
'resources/assets/vendor/libs/@form-validation/auto-focus.js',
'resources/assets/vendor/libs/cleavejs/cleave.js',
'resources/assets/vendor/libs/cleavejs/cleave-phone.js'
])
@endsection

@section('page-script')
@vite('resources/assets/js/app-ecommerce-customer-all.js')
@endsection

@section('content')
<!-- customers List Table -->
<div class="card">
  <div class="card-datatable table-responsive">
    <table class="datatables-customers table">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th>Customer</th>
          <th class="text-nowrap">Customer Id</th>
          <th>Country</th>
          <th>Order</th>
          <th class="text-nowrap">Total Spent</th>
        </tr>
      </thead>
    </table>
  </div>
  <!-- Offcanvas to add new customer -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCustomerAdd" aria-labelledby="offcanvasEcommerceCustomerAddLabel">
    <div class="offcanvas-header border-bottom">
      <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">Add Customer</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0">
      <form class="ecommerce-customer-add pt-0" id="eCommerceCustomerAddForm" onsubmit="return false">
        <div class="ecommerce-customer-add-basic mb-5">
          <h6 class="mb-5">Basic Information</h6>
          <div class="form-floating form-floating-outline mb-5">
            <input type="text" class="form-control" id="ecommerce-customer-add-name" placeholder="John Doe" name="customerName" aria-label="John Doe" />
            <label for="ecommerce-customer-add-name">Name*</label>
          </div>
          <div class="form-floating form-floating-outline mb-5">
            <input type="text" id="ecommerce-customer-add-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="customerEmail" />
            <label for="ecommerce-customer-add-email">Email*</label>
          </div>
          <div class="form-floating form-floating-outline">
            <input type="text" id="ecommerce-customer-add-contact" class="form-control phone-mask" placeholder="+(123) 456-7890" aria-label="+(123) 456-7890" name="customerContact" />
            <label for="ecommerce-customer-add-contact">Mobile</label>
          </div>
        </div>
        <div class="ecommerce-customer-add-shiping mb-5">
          <h6 class="mb-5">Shipping Information</h6>
          <div class="form-floating form-floating-outline mb-5">
            <input type="text" id="ecommerce-customer-add-address" class="form-control" placeholder="45 Roker Terrace" aria-label="45 Roker Terrace" name="customerAddress1" />
            <label for="ecommerce-customer-add-address">Address Line 1</label>
          </div>
          <div class="form-floating form-floating-outline mb-5">
            <input type="text" id="ecommerce-customer-add-address-2" class="form-control" placeholder="Address 2" aria-label="address2" name="customerAddress2" />
            <label for="ecommerce-customer-add-address-2">Address Line 2</label>
          </div>
          <div class="form-floating form-floating-outline mb-5">
            <input type="text" id="ecommerce-customer-add-town" class="form-control" placeholder="New York" aria-label="New York" name="customerTown" />
            <label for="ecommerce-customer-add-town">Town</label>
          </div>
          <div class="form-floating form-floating-outline mb-5">
            <input type="text" id="ecommerce-customer-add-state" class="form-control" placeholder="Southern tip" aria-label="Southern tip" name="customerState" />
            <label for="ecommerce-customer-add-state">State / Province</label>
          </div>
          <div class="form-floating form-floating-outline mb-5">
            <input type="text" id="ecommerce-customer-add-post-code" class="form-control" placeholder="734990" aria-label="734990" name="pin" pattern="[0-9]{8}" maxlength="8" />
            <label for="ecommerce-customer-add-post-code">Post Code</label>
          </div>
          <div class="form-floating form-floating-outline">
            <select id="ecommerce-customer-add-country" class="select2 form-select">
              <option value="">Select</option>
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
            <label for="ecommerce-customer-add-country">Country</label>
          </div>
        </div>
        <div class="d-sm-flex mb-5">
          <div class="me-auto mb-2 mb-md-0">
            <h6 class="mb-1">Use as a billing address?</h6>
            <small>If you need more info, please check budget.</small>
          </div>
          <div class="form-check form-switch my-auto me-n2">
            <input type="checkbox" class="form-check-input" />
          </div>
        </div>
        <div>
          <button type="submit" class="btn btn-primary me-3 data-submit">Add</button>
          <button type="reset" class="btn btn-outline-danger" data-bs-dismiss="offcanvas">Discard</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

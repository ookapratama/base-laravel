@extends('layouts/layoutMaster')

@section('title', 'DataTables - Tables')

<!-- Vendor Styles -->
@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
  'resources/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss'
])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/flatpickr/flatpickr.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js'
])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/tables-datatables-basic.js'])
@endsection

@section('content')
<!-- DataTable with Buttons -->
<div class="card">
  <div class="card-datatable table-responsive pt-0">
    <table class="datatables-basic table table-bordered">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th>id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Date</th>
          <th>Salary</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!-- Modal to add new record -->
<div class="offcanvas offcanvas-end" id="add-new-record">
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title" id="exampleModalLabel">New Record</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body flex-grow-1">
    <form class="add-new-record pt-0 row g-3" id="form-add-new-record" onsubmit="return false">
      <div class="col-sm-12">
        <div class="input-group input-group-merge">
          <span id="basicFullname2" class="input-group-text"><i class="ri-user-line ri-18px"></i></span>
          <div class="form-floating form-floating-outline">
            <input type="text" id="basicFullname" class="form-control dt-full-name" name="basicFullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
            <label for="basicFullname">Full Name</label>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="input-group input-group-merge">
          <span id="basicPost2" class="input-group-text"><i class='ri-briefcase-line ri-18px'></i></span>
          <div class="form-floating form-floating-outline">
            <input type="text" id="basicPost" name="basicPost" class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer" aria-describedby="basicPost2" />
            <label for="basicPost">Post</label>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="input-group input-group-merge">
          <span class="input-group-text"><i class="ri-mail-line ri-18px"></i></span>
          <div class="form-floating form-floating-outline">
            <input type="text" id="basicEmail" name="basicEmail" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
            <label for="basicEmail">Email</label>
          </div>
        </div>
        <div class="form-text">
          You can use letters, numbers & periods
        </div>
      </div>
      <div class="col-sm-12">
        <div class="input-group input-group-merge">
          <span id="basicDate2" class="input-group-text"><i class='ri-calendar-2-line ri-18px'></i></span>
          <div class="form-floating form-floating-outline">
            <input type="text" class="form-control dt-date" id="basicDate" name="basicDate" aria-describedby="basicDate2" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
            <label for="basicDate">Joining Date</label>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="input-group input-group-merge">
          <span id="basicSalary2" class="input-group-text"><i class='ri-money-dollar-circle-line ri-18px'></i></span>
          <div class="form-floating form-floating-outline">
            <input type="number" id="basicSalary" name="basicSalary" class="form-control dt-salary" placeholder="12000" aria-label="12000" aria-describedby="basicSalary2" />
            <label for="basicSalary">Salary</label>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary data-submit me-sm-4 me-1">Submit</button>
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
      </div>
    </form>

  </div>
</div>
<!--/ DataTable with Buttons -->

<hr class="my-12">

<!-- Complex Headers -->
<div class="card">
  <h5 class="card-header text-center text-md-start">Complex Headers</h5>
  <div class="card-datatable text-nowrap">
    <table class="dt-complex-header table table-bordered">
      <thead>
        <tr>
          <th rowspan="2">Name</th>
          <th colspan="2">Contact</th>
          <th colspan="3">HR Information</th>
          <th rowspan="2">Action</th>
        </tr>
        <tr>
          <th>E-mail</th>
          <th>City</th>
          <th>Position</th>
          <th>Salary</th>
          <th class="border-1">Status</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!--/ Complex Headers -->

<hr class="my-12">

<!-- Row grouping -->
<div class="card">
  <h5 class="card-header text-center text-md-start">Row Grouping</h5>
  <div class="card-datatable table-responsive">
    <table class="dt-row-grouping table table-bordered">
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Position</th>
          <th>Email</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Position</th>
          <th>Email</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<!--/ Row grouping -->

<hr class="my-12">

<!-- Multilingual -->
<div class="card">
  <h5 class="card-header text-center text-md-start">Multilingual</h5>
  <div class="card-datatable table-responsive">
    <table class="dt-multilingual table table-bordered">
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Position</th>
          <th>Email</th>
          <th>Date</th>
          <th>Salary</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!--/ Multilingual -->
@endsection

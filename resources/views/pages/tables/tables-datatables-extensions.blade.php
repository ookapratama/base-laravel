@extends('layouts/layoutMaster')

@section('title', 'DataTables - Tables')

<!-- Vendor Styles -->
@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-select-bs5/select.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss',
  'resources/assets/vendor/libs/datatables-fixedcolumns-bs5/fixedcolumns.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-fixedheader-bs5/fixedheader.bootstrap5.scss'
])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite(['resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/tables-datatables-extensions.js'])
@endsection

@section('content')
<!-- Scrollable -->
<div class="card">
  <h5 class="card-header text-center text-md-start pb-md-0">Scrollable Table</h5>
  <div class="card-datatable text-nowrap">
    <table class="dt-scrollableTable table table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Email</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
          <th>Age</th>
          <th>Experience</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!--/ Scrollable -->

<hr class="my-12">

<!-- Fixed Header -->
<div class="card">
  <h5 class="card-header text-center text-md-start pb-md-0">Fixed Header</h5>
  <div class="card-datatable table-responsive">
    <table class="dt-fixedheader table table-bordered">
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
      <tfoot>
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
      </tfoot>
    </table>
  </div>
</div>
<!--/ Fixed Header -->

<hr class="my-12">

<!-- Fixed Columns -->
<div class="card">
  <h5 class="card-header pb-0">Fixed Columns</h5>
  <div class="card-datatable text-nowrap">
    <table class="dt-fixedcolumns table table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Email</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
          <th>Age</th>
          <th>Experience</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!--/ Fixed Columns -->

<hr class="my-12">

<!-- Select -->
<div class="card">
  <h5 class="card-header text-center text-md-start pb-md-0">Select</h5>
  <div class="card-datatable dataTable_select text-nowrap">
    <table class="dt-select-table table table-bordered">
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
        </tr>
      </thead>
    </table>
  </div>
</div>
<!--/ Select -->
@endsection

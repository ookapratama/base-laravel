@extends('layouts/layoutMaster')

@section('title', 'Shepherd tour - Extended UI')

<!-- Vendor Styles -->
@section('vendor-style')
@vite('resources/assets/vendor/libs/shepherd/shepherd.scss')
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite('resources/assets/vendor/libs/shepherd/shepherd.js')
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite('resources/assets/js/extended-ui-tour.js')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card tour-card">
      <h5 class="card-header">Tour</h5>
      <div class="card-body">
        <button class="btn btn-primary" id="shepherd-example">
          Start tour
        </button>
      </div>
    </div>
  </div>
</div>
@endsection

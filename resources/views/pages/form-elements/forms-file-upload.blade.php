@extends('layouts/layoutMaster')

@section('title', 'File upload - Forms')

<!-- Vendor Styles -->
@section('vendor-style')
@vite(['resources/assets/vendor/libs/dropzone/dropzone.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite(['resources/assets/vendor/libs/dropzone/dropzone.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/forms-file-upload.js'])
@endsection

@section('content')
<div class="row">
  <!-- Basic  -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">Basic</h5>
      <div class="card-body">
        <form action="/upload" class="dropzone needsclick" id="dropzone-basic">
          <div class="dz-message needsclick">
            Drop files here or click to upload
            <span class="note needsclick">(This is just a demo dropzone. Selected files are <span class="fw-medium">not</span> actually uploaded.)</span>
          </div>
          <div class="fallback">
            <input name="file" type="file" />
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Basic  -->
  <!-- Multi  -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Multiple</h5>
      <div class="card-body">
        <form action="/upload" class="dropzone needsclick" id="dropzone-multi">
          <div class="dz-message needsclick">
            Drop files here or click to upload
            <span class="note needsclick">(This is just a demo dropzone. Selected files are <span class="fw-medium">not</span> actually uploaded.)</span>
          </div>
          <div class="fallback">
            <input name="file" type="file" />
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Multi  -->
</div>
@endsection

@extends('layouts/layoutMaster')

@section('title', 'Treeview - Extended UI')

<!-- Vendor Styles -->
@section('vendor-style')
@vite('resources/assets/vendor/libs/jstree/jstree.scss')
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite('resources/assets/vendor/libs/jstree/jstree.js')
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite('resources/assets/js/extended-ui-treeview.js')
@endsection

@section('content')
<!-- JSTree -->
<div class="row">
  <!-- Basic -->
  <div class="col-md-6 col-12">
    <div class="card mb-6">
      <h5 class="card-header">Basic</h5>
      <div class="card-body">
        <div id="jstree-basic">
          <ul>
            <li data-jstree='{"icon" : "ri-folder-3-line"}'>css
              <ul>
                <li data-jstree='{"icon" : "ri-folder-3-line"}'>app.css</li>
                <li data-jstree='{"icon" : "ri-folder-3-line"}'>style.css</li>
              </ul>
            </li>
            <li class="jstree-open" data-jstree='{"icon" : "ri-folder-3-line"}'>img
              <ul data-jstree='{"icon" : "ri-folder-3-line"}'>
                <li data-jstree='{"icon" : "ri-folder-3-line"}'>bg.jpg</li>
                <li data-jstree='{"icon" : "ri-folder-3-line"}'>logo.png</li>
                <li data-jstree='{"icon" : "ri-folder-3-line"}'>avatar.png</li>
              </ul>
            </li>
            <li class="jstree-open" data-jstree='{"icon" : "ri-folder-3-line"}'>js
              <ul>
                <li data-jstree='{"icon" : "ri-folder-3-line"}'>jquery.js</li>
                <li data-jstree='{"icon" : "ri-folder-3-line"}'>app.js</li>
              </ul>
            </li>
            <li data-jstree='{"icon" : "ri-file-text-line"}'>index.html</li>
            <li data-jstree='{"icon" : "ri-file-text-line"}'>page-one.html</li>
            <li data-jstree='{"icon" : "ri-file-text-line"}'>page-two.html</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- /Basic -->
  <!-- Custom Icons -->
  <div class="col-md-6 col-12">
    <div class="card mb-6">
      <h5 class="card-header">Custom Icons</h5>
      <div class="card-body">
        <div id="jstree-custom-icons"></div>
      </div>
    </div>
  </div>
  <!-- /Custom Icons -->
</div>

<div class="row">
  <!-- Context Menu -->
  <div class="col-md-6 col-12">
    <div class="card mb-6">
      <h5 class="card-header">Context Menu</h5>
      <div class="card-body">
        <div id="jstree-context-menu" class="overflow-auto"></div>
      </div>
    </div>
  </div>
  <!-- /Context Menu -->
  <!-- Drag & Drop -->
  <div class="col-md-6 col-12">
    <div class="card mb-6">
      <h5 class="card-header">Drag & Drop</h5>
      <div class="card-body">
        <div id="jstree-drag-drop" class="overflow-auto"></div>
      </div>
    </div>
  </div>
  <!-- /Drag & Drop -->
</div>

<div class="row">
  <!-- Checkbox -->
  <div class="col-md-6 col-12">
    <div class="card mb-md-0 mb-6">
      <h5 class="card-header">Checkboxes</h5>
      <div class="card-body">
        <div id="jstree-checkbox"></div>
      </div>
    </div>
  </div>
  <!-- /Checkbox -->
  <!-- Ajax -->
  <div class="col-md-6 col-12">
    <div class="card">
      <h5 class="card-header">Ajax</h5>
      <div class="card-body">
        <div id="jstree-ajax"></div>
      </div>
    </div>
  </div>
  <!-- Ajax -->
</div>
<!-- /JSTree -->
@endsection

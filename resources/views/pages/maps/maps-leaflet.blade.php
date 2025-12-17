@extends('layouts/layoutMaster')

@section('title', 'Leaflet - Maps')

<!-- Vendor Styles -->
@section('vendor-style')
@vite(['resources/assets/vendor/libs/leaflet/leaflet.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite(['resources/assets/vendor/libs/leaflet/leaflet.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/maps-leaflet.js'])
@endsection

@section('content')
<div class="row">
  <!-- Basic -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">Basic Map</h5>
      <div class="card-body">
        <div class="leaflet-map" id="basicMap"></div>
      </div>
    </div>
  </div>
  <!-- /Basic -->

  <!-- Marker Circle & Polygon -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">Marker Circle & Polygon</h5>
      <div class="card-body">
        <div class="leaflet-map" id="shapeMap"></div>
      </div>
    </div>
  </div>
  <!-- /Marker Circle & Polygon -->

  <!-- Draggable Marker With Popup -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">Draggable Marker With Popup</h5>
      <div class="card-body">
        <div class="leaflet-map" id="dragMap"></div>
      </div>
    </div>
  </div>
  <!-- /Draggable Marker With Popup -->

  <!-- User Location -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">User Location</h5>
      <div class="card-body">
        <div class="leaflet-map" id="userLocation"></div>
      </div>
    </div>
  </div>
  <!-- /User Location -->

  <!-- Custom Icons -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">Custom Icons</h5>
      <div class="card-body">
        <div class="leaflet-map" id="customIcons"></div>
      </div>
    </div>
  </div>
  <!-- /Custom Icons -->

  <!-- GeoJson -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">GeoJson</h5>
      <div class="card-body">
        <div class="leaflet-map" id="geoJson"></div>
      </div>
    </div>
  </div>
  <!-- /GeoJson -->

  <!-- Layer Control -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Layer Control</h5>
      <div class="card-body">
        <div class="leaflet-map" id="layerControl"></div>
      </div>
    </div>
  </div>
  <!-- /Layer Control -->
</div>
@endsection

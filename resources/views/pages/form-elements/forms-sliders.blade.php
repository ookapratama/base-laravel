@extends('layouts/layoutMaster')

@section('title', 'Sliders - Forms')

<!-- Vendor Styles -->
@section('vendor-style')
@vite(['resources/assets/vendor/libs/nouislider/nouislider.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite(['resources/assets/vendor/libs/nouislider/nouislider.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/forms-sliders.js'])
@endsection

@section('content')
<!-- Noui Slider -->
<div class="row">
  <!-- Basic -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">Basic</h5>
      <div class="card-body">
        <small class="text-light fw-medium">Basic</small>
        <div id="slider-basic" class="my-6"></div>
        <small class="text-light fw-medium">Handles</small>
        <div id="slider-handles" class="mt-6 mb-12"></div>
        <small class="text-light fw-medium">Snapping between steps</small>
        <div id="slider-steps" class="mt-6"></div>
      </div>
    </div>
  </div>
  <!-- /Basic -->

  <!-- Behaviour -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">Behaviour</h5>
      <div class="card-body">
        <small class="text-light fw-medium">Tap</small>
        <div id="slider-tap" class="mt-6 mb-12"></div>

        <small class="text-light fw-medium">Drag</small>
        <div id="slider-drag" class="mt-6 mb-12"></div>

        <small class="text-light fw-medium">Fixed Dragging</small>
        <div id="slider-fixed-drag" class="mt-6 mb-12"></div>

        <small class="text-light fw-medium">Combined Options</small>
        <div id="slider-combined-options" class="mt-6 mb-12"></div>

        <small class="text-light fw-medium">Hover</small>
        <div id="slider-hover" class="mt-6 mb-2"></div>
        <small>Hovered value: <span id="slider-val">null</span></small>
      </div>
    </div>
  </div>
  <!-- /Behaviour -->

  <!-- Scale & Pips -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">Scale & Pips</h5>
      <div class="card-body pb-12">
        <div class="my-4" id="slider-pips"></div>
      </div>
    </div>
  </div>
  <!-- /Scale & Pips -->

  <!-- Colors -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">Colors</h5>
      <div class="card-body pb-12">
        <small class="text-light fw-medium">Primary</small>
        <div class="noUi-primary mt-6 mb-12" id="slider-primary"></div>
        <small class="text-light fw-medium">Success</small>
        <div class="noUi-success mt-6 mb-12" id="slider-success"></div>
        <small class="text-light fw-medium">Danger</small>
        <div class="noUi-danger mt-6 mb-12" id="slider-danger"></div>
        <small class="text-light fw-medium">Warning</small>
        <div class="noUi-warning mt-6 mb-12" id="slider-warning"></div>
        <small class="text-light fw-medium">Info</small>
        <div class="noUi-info mt-6 mb-12" id="slider-info"></div>
      </div>
    </div>
  </div>
  <!-- /Colors -->

  <!-- Dynamic -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">Dynamic</h5>
      <div class="card-body">
        <div class="mb-4" id="slider-dynamic"></div>
        <div class="row">
          <div class="col-xl-3 col-md-4 col-sm-12 slider-select d-sm-flex d-block">
            <select class="form-select me-2 mt-2 d-inline-block" id="slider-select">
              <option value="-20">-20</option>
              <option value="-19">-19</option>
              <option value="-18">-18</option>
              <option value="-17">-17</option>
              <option value="-16">-16</option>
              <option value="-15">-15</option>
              <option value="-14">-14</option>
              <option value="-13">-13</option>
              <option value="-12">-12</option>
              <option value="-11">-11</option>
              <option value="-10">-10</option>
              <option value="-9">-9</option>
              <option value="-8">-8</option>
              <option value="-7">-7</option>
              <option value="-6">-6</option>
              <option value="-5">-5</option>
              <option value="-4">-4</option>
              <option value="-3">-3</option>
              <option value="-2">-2</option>
              <option value="-1">-1</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
              <option value="32">32</option>
              <option value="33">33</option>
              <option value="34">34</option>
              <option value="35">35</option>
              <option value="36">36</option>
              <option value="37">37</option>
              <option value="38">38</option>
              <option value="39">39</option>
              <option value="40">40</option>
            </select>
            <input class="form-control d-inline-block mt-4 mt-sm-2" type="number" min="-20" max="40" step="1" id="slider-input" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Dynamic -->
</div>

<!-- Vertical -->
<div class="row">
  <div class="col-xl-3 col-md-6 col-12">
    <div class="card mb-xl-0 mb-6">
      <h5 class="card-header">Vertical Default</h5>
      <div class="card-body">
        <div class="mx-auto" id="slider-vertical"></div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 col-12">
    <div class="card mb-xl-0 mb-6">
      <h5 class="card-header">Vertical Upper Connect</h5>
      <div class="card-body">
        <div class="mx-auto" id="slider-connect-upper"></div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-md-0 mb-6 col-12">
    <div class="card">
      <h5 class="card-header">Vertical Tooltip</h5>
      <div class="card-body">
        <div class="mx-auto" id="slider-vertical-tooltip"></div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 col-12">
    <div class="card">
      <h5 class="card-header">Vertical Limit</h5>
      <div class="card-body">
        <div class="mx-auto" id="slider-vertical-limit"></div>
      </div>
    </div>
  </div>
</div>
<!-- /Vertical -->
<!-- /Noui Slider -->
@endsection

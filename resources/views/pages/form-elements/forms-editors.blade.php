@extends('layouts/layoutMaster')

@section('title', 'Editors - Forms')

<!-- Vendor Styles -->
@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/quill/typography.scss',
  'resources/assets/vendor/libs/quill/katex.scss',
  'resources/assets/vendor/libs/quill/editor.scss'
])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/quill/katex.js',
  'resources/assets/vendor/libs/quill/quill.js'
])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/forms-editors.js'])
@endsection

@section('content')
<div class="row">
  <!-- Snow Theme -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">Snow Theme</h5>
      <div class="card-body">
        <div id="snow-toolbar">
          <span class="ql-formats">
            <select class="ql-font"></select>
            <select class="ql-size"></select>
          </span>
          <span class="ql-formats">
            <button class="ql-bold"></button>
            <button class="ql-italic"></button>
            <button class="ql-underline"></button>
            <button class="ql-strike"></button>
          </span>
          <span class="ql-formats">
            <select class="ql-color"></select>
            <select class="ql-background"></select>
          </span>
          <span class="ql-formats">
            <button class="ql-script" value="sub"></button>
            <button class="ql-script" value="super"></button>
          </span>
          <span class="ql-formats">
            <button class="ql-header" value="1"></button>
            <button class="ql-header" value="2"></button>
            <button class="ql-blockquote"></button>
            <button class="ql-code-block"></button>
          </span>
        </div>
        <div id="snow-editor">
          <h6>Quill Rich Text Editor</h6>
          <p> Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy I love. </p>
        </div>
      </div>
    </div>
  </div>
  <!-- /Snow Theme -->
  <!-- Bubble Theme -->
  <div class="col-12">
    <div class="card mb-6">
      <h5 class="card-header">Bubble Theme</h5>
      <div class="card-body">
        <div id="bubble-toolbar">
          <span class="ql-formats">
            <select class="ql-font"></select>
            <select class="ql-size"></select>
          </span>
          <span class="ql-formats">
            <button class="ql-bold"></button>
            <button class="ql-italic"></button>
            <button class="ql-underline"></button>
            <button class="ql-strike"></button>
          </span>
          <span class="ql-formats">
            <select class="ql-color"></select>
            <select class="ql-background"></select>
          </span>
          <span class="ql-formats">
            <button class="ql-script" value="sub"></button>
            <button class="ql-script" value="super"></button>
          </span>
          <span class="ql-formats">
            <button class="ql-header" value="1"></button>
            <button class="ql-header" value="2"></button>
            <button class="ql-blockquote"></button>
            <button class="ql-code-block"></button>
          </span>
        </div>
        <div id="bubble-editor">
          <h6>Quill Rich Text Editor</h6>
          <p> Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy I love. </p>
        </div>
      </div>
    </div>
  </div>
  <!-- /Bubble Theme -->
  <!-- Full Editor -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Full Editor</h5>
      <div class="card-body">
        <div id="full-editor">
          <h6>Quill Rich Text Editor</h6>
          <p> Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy I love. </p>
        </div>
      </div>
    </div>
  </div>
  <!-- /Full Editor -->
</div>
@endsection

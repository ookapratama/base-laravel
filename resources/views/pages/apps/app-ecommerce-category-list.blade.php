@extends('layouts/layoutMaster')

@section('title', 'eCommerce Category List - Apps')

@section('vendor-style')
@vite([
'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss',
'resources/assets/vendor/libs/select2/select2.scss',
'resources/assets/vendor/libs/@form-validation/form-validation.scss',
'resources/assets/vendor/libs/quill/typography.scss',
'resources/assets/vendor/libs/quill/katex.scss',
'resources/assets/vendor/libs/quill/editor.scss'
])
@endsection

@section('page-style')
@vite(['resources/assets/vendor/scss/pages/app-ecommerce.scss'])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js',
  'resources/assets/vendor/libs/quill/katex.js',
  'resources/assets/vendor/libs/quill/quill.js'
  ])
@endsection

@section('page-script')
@vite('resources/assets/js/app-ecommerce-category-list.js')
@endsection

@section('content')
<div class="app-ecommerce-category">
  <!-- Category List Table -->
  <div class="card">
    <div class="card-datatable table-responsive">
      <table class="datatables-category-list table">
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th>Categories</th>
            <th class="text-nowrap text-sm-end">Total Products &nbsp;</th>
            <th class="text-nowrap text-sm-end">Total Earning</th>
            <th class="text-lg-center">Actions</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
  <!-- Offcanvas to add new customer -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList" aria-labelledby="offcanvasEcommerceCategoryListLabel">
    <!-- Offcanvas Header -->
    <div class="offcanvas-header">
      <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Add Category</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- Offcanvas Body -->
    <div class="offcanvas-body border-top">
      <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return false">
        <!-- Title -->

        <div class="form-floating form-floating-outline mb-5">
          <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter category title" name="categoryTitle" aria-label="category title">
          <label for="ecommerce-category-title">Title</label>
        </div>

        <!-- Slug -->
        <div class="form-floating form-floating-outline mb-5">
          <input type="text" id="ecommerce-category-slug" class="form-control" placeholder="Enter slug" aria-label="slug" name="slug">
          <label for="ecommerce-category-slug">Slug</label>
        </div>

        <!-- Image -->
        <div class="form-floating form-floating-outline mb-5">
          <input class="form-control" type="file" id="ecommerce-category-image">
          <label for="ecommerce-category-image">Attachment</label>
        </div>
        <!-- Parent category -->
        <div class="mb-5 ecommerce-select2-dropdown">
          <div class="form-floating form-floating-outline">
            <select id="ecommerce-category-parent-category" class="select2 form-select" data-placeholder="Select parent category" data-allow-clear="true">
              <option value="">Select parent Category</option>
              <option value="Household">Household</option>
              <option value="Management">Management</option>
              <option value="Electronics">Electronics</option>
              <option value="Office">Office</option>
              <option value="Automotive">Automotive</option>
            </select>
            <label for="ecommerce-category-parent-category">Parent category</label>
          </div>
        </div>
        <!-- Description -->
        <div class="mb-5">
          <div class="form-control p-0 pt-1">
            <div class="comment-editor border-0" id="ecommerce-category-description">
            </div>
            <div class="comment-toolbar border-0 rounded">
              <div class="d-flex justify-content-end">
                <span class="ql-formats me-0">
                  <button class="ql-bold"></button>
                  <button class="ql-italic"></button>
                  <button class="ql-underline"></button>
                  <button class="ql-list" value="ordered"></button>
                  <button class="ql-list" value="bullet"></button>
                  <button class="ql-link"></button>
                  <button class="ql-image"></button>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- Status -->
        <div class="mb-5 ecommerce-select2-dropdown">
          <div class="form-floating form-floating-outline">
            <select id="ecommerce-category-status" class="select2 form-select" data-placeholder="Select category status">
              <option value="">Select category status</option>
              <option value="Scheduled">Scheduled</option>
              <option value="Publish">Publish</option>
              <option value="Inactive">Inactive</option>
            </select>
            <label for="ecommerce-category-status">Parent status</label>
          </div>
        </div>
        <!-- Submit and reset -->
        <div>
          <button type="submit" class="btn btn-primary me-3 data-submit">Add</button>
          <button type="reset" class="btn btn-outline-danger" data-bs-dismiss="offcanvas">Discard</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@extends('layouts/layoutMaster')

@section('title', 'Roles - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  ])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js',
  ])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/app-access-roles.js',
  'resources/assets/js/modal-add-role.js',
  ])
@endsection

@section('content')
<h4 class="mb-1">Roles List</h4>
<p class="mb-6">A role provided access to predefined menus and features so that depending on assigned role an administrator can have access to what user needs.</p>
<!-- Role cards -->
<div class="row g-6">
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <p class="mb-0">Total 4 users</p>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar">
            </li>
            <li class="avatar">
              <span class="avatar-initial rounded-circle pull-up bg-lighter text-body" data-bs-toggle="tooltip" data-bs-placement="bottom" title="3 more">+3</span>
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="role-heading">
            <h5 class="mb-1">Administrator</h5>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal">
              <p class="mb-0">Edit Role</p>
            </a>
          </div>
          <a href="javascript:void(0);" class="text-secondary"><i class="ri-file-copy-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <p class="mb-0">Total 7 users</p>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Jimmy Ressula" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/4.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="John Doe" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kristi Lawker" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/2.png')}}" alt="Avatar">
            </li>
            <li class="avatar">
              <span class="avatar-initial rounded-circle pull-up bg-lighter text-body" data-bs-toggle="tooltip" data-bs-placement="bottom" title="3 more">+3</span>
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="role-heading">
            <h5 class="mb-1">Editor</h5>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal">
              <p class="mb-0">Edit Role</p>
            </a>
          </div>
          <a href="javascript:void(0);" class="text-secondary"><i class="ri-file-copy-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <p class="mb-0">Total 5 users</p>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Andrew Tye" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Rishi Swaat" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/9.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Rossie Kim" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar">
            </li>
            <li class="avatar">
              <span class="avatar-initial rounded-circle pull-up bg-lighter text-body" data-bs-toggle="tooltip" data-bs-placement="bottom" title="3 more">+3</span>
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="role-heading">
            <h5 class="mb-1">Users</h5>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal">
              <p class="mb-0">Edit Role</p>
            </a>
          </div>
          <a href="javascript:void(0);" class="text-secondary"><i class="ri-file-copy-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <p class="mb-0">Total 3 users</p>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/3.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Katy Turner" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/9.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Peter Adward" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/15.png')}}" alt="Avatar">
            </li>
            <li class="avatar">
              <span class="avatar-initial rounded-circle pull-up bg-lighter text-body" data-bs-toggle="tooltip" data-bs-placement="bottom" title="3 more">+3</span>
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="role-heading">
            <h5 class="mb-1">Support</h5>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal">
              <p class="mb-0">Edit Role</p>
            </a>
          </div>
          <a href="javascript:void(0);" class="text-secondary"><i class="ri-file-copy-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <p class="mb-0">Total 2 users</p>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Merchent" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/10.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Sam D'souza" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/13.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Nurvi Karlos" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/15.png')}}" alt="Avatar">
            </li>
            <li class="avatar">
              <span class="avatar-initial rounded-circle pull-up bg-lighter text-body" data-bs-toggle="tooltip" data-bs-placement="bottom" title="3 more">+3</span>
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="role-heading">
            <h5 class="mb-1">Restricted User</h5>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal">
              <p class="mb-0">Edit Role</p>
            </a>
          </div>
          <a href="javascript:void(0);" class="text-secondary"><i class="ri-file-copy-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card h-100">
      <div class="row h-100">
        <div class="col-5">
          <div class="d-flex align-items-end h-100 justify-content-center">
            <img src="{{asset('assets/img/illustrations/add-new-role-illustration.png')}}" class="img-fluid" alt="Image" width="68">
          </div>
        </div>
        <div class="col-7">
          <div class="card-body text-sm-end text-center ps-sm-0">
            <button data-bs-target="#addRoleModal" data-bs-toggle="modal" class="btn btn-sm btn-primary mb-4 text-nowrap add-new-role">Add Role</button>
            <p class="mb-0">Add new role,<br> if it doesn't exist</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12">
    <h4 class="mt-6 mb-1">Total users with their roles</h4>
    <p class="mb-0">Find all of your company’s administrator accounts and their associate roles.</p>
  </div>
  <div class="col-12">
    <!-- Role Table -->
    <div class="card">
      <div class="card-datatable table-responsive">
        <table class="datatables-users table">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>User</th>
              <th>Email</th>
              <th>Role</th>
              <th>Plan</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <!--/ Role Table -->
  </div>
</div>
<!--/ Role cards -->

<!-- Add Role Modal -->
@include('_partials/_modals/modal-add-role')
<!-- / Add Role Modal -->
@endsection

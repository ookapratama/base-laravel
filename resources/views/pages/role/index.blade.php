@extends('layouts/layoutMaster')

@section('title', 'Manajemen Role')

@section('content')
   <div class="container-xxl flex-grow-1 container-p-y">

      {{-- Header Section --}}
      <div class="row mb-6">
         <div class="col-12">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
               <div>
                  <h4 class="mb-1">Manajemen Role</h4>
                  <p class="text-muted mb-0">Kelola role pengguna dan atur hak akses berdasarkan kebutuhan.</p>
               </div>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                     <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Role</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>

      {{-- Alert Messages --}}
      @if (session('success'))
         <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
            <i class="ri-checkbox-circle-line me-2 ri-22px"></i>
            <span>{{ session('success') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif

      @if (session('error'))
         <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
            <i class="ri-error-warning-line me-2 ri-22px"></i>
            <span>{{ session('error') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif

      {{-- Role Cards --}}
      <div class="row g-6">
         @foreach ($roles as $index => $role)
            <div class="col-xl-4 col-lg-6 col-md-6">
               <div class="card h-100">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start mb-4">
                        <div>
                           <span
                              class="badge bg-label-{{ $index % 6 == 0 ? 'primary' : ($index % 6 == 1 ? 'success' : ($index % 6 == 2 ? 'info' : ($index % 6 == 3 ? 'warning' : ($index % 6 == 4 ? 'danger' : 'secondary')))) }} rounded-pill mb-2">
                              {{ $role->users_count ?? $role->users()->count() }} pengguna
                           </span>
                           <h5 class="card-title mb-0">{{ $role->name }}</h5>
                        </div>
                        <div class="dropdown">
                           <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow"
                              data-bs-toggle="dropdown">
                              <i class="ri-more-2-fill ri-20px"></i>
                           </button>
                           <ul class="dropdown-menu dropdown-menu-end">
                              <li>
                                 <a href="{{ route('role.edit', $role->id) }}" class="dropdown-item">
                                    <i class="ri-pencil-line me-2"></i> Edit Role
                                 </a>
                              </li>
                              <li>
                                 <a href="{{ route('permission.index', ['role_id' => $role->id]) }}" class="dropdown-item">
                                    <i class="ri-shield-keyhole-line me-2"></i> Kelola Akses
                                 </a>
                              </li>
                              @if ($role->slug !== 'super-admin')
                                 <li>
                                    <hr class="dropdown-divider">
                                 </li>
                                 <li>
                                    <button type="button" class="dropdown-item text-danger delete-record"
                                       data-action="{{ route('role.destroy', $role->id) }}">
                                       <i class="ri-delete-bin-line me-2"></i> Hapus Role
                                    </button>
                                 </li>
                              @endif
                           </ul>
                        </div>
                     </div>

                     <div class="d-flex align-items-center mb-3">
                        <code class="text-body bg-lighter px-2 py-1 rounded">{{ $role->slug }}</code>
                     </div>

                     <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center">
                           <div class="avatar avatar-sm me-2">
                              <span class="avatar-initial rounded-circle bg-label-primary">
                                 <i class="ri-menu-search-line ri-16px"></i>
                              </span>
                           </div>
                           <small class="text-muted">{{ $role->menus_count ?? $role->menus()->count() }} menu
                              tersedia</small>
                        </div>
                     </div>

                     <div class="d-grid gap-2">
                        <a href="{{ route('role.edit', $role->id) }}" class="btn btn-outline-primary">
                           <i class="ri-pencil-line me-1"></i> Edit Role
                        </a>
                        <a href="{{ route('permission.index', ['role_id' => $role->id]) }}"
                           class="btn btn-label-secondary">
                           <i class="ri-shield-keyhole-line me-1"></i> Kelola Akses Menu
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         @endforeach

         {{-- Add New Role Card --}}
         <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card h-100 border-dashed">
               <div class="card-body d-flex flex-column justify-content-center align-items-center text-center py-5">
                  <div class="avatar avatar-lg mb-4">
                     <span class="avatar-initial rounded-circle bg-label-primary">
                        <i class="ri-add-line ri-28px"></i>
                     </span>
                  </div>
                  <h5 class="mb-2">Tambah Role Baru</h5>
                  <p class="text-muted mb-4 small">Buat role baru untuk mengatur<br>hak akses pengguna</p>
                  <a href="{{ route('role.create') }}" class="btn btn-primary">
                     <i class="ri-add-line me-1"></i> Tambah Role
                  </a>
               </div>
            </div>
         </div>
      </div>

      {{-- Role Table (Alternative View) --}}
      <div class="card mt-6">
         <div class="card-header border-bottom">
            <div class="d-flex justify-content-between align-items-center">
               <h5 class="card-title mb-0">Daftar Semua Role</h5>
               <a href="{{ route('role.create') }}" class="btn btn-primary btn-sm">
                  <i class="ri-add-line me-1"></i> Tambah Role
               </a>
            </div>
         </div>
         <div class="table-responsive">
            <table class="table table-hover mb-0">
               <thead class="table-light">
                  <tr>
                     <th style="width: 60px;">#</th>
                     <th>Nama Role</th>
                     <th>Slug</th>
                     <th class="text-center" style="width: 120px;">Pengguna</th>
                     <th class="text-center" style="width: 120px;">Menu</th>
                     <th class="text-center" style="width: 150px;">Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($roles as $index => $role)
                     <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                           <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-3">
                                 <span
                                    class="avatar-initial rounded-circle bg-label-{{ $index % 6 == 0 ? 'primary' : ($index % 6 == 1 ? 'success' : ($index % 6 == 2 ? 'info' : ($index % 6 == 3 ? 'warning' : ($index % 6 == 4 ? 'danger' : 'secondary')))) }}">
                                    <i class="ri-shield-user-line ri-16px"></i>
                                 </span>
                              </div>
                              <strong>{{ $role->name }}</strong>
                           </div>
                        </td>
                        <td><code>{{ $role->slug }}</code></td>
                        <td class="text-center">
                           <span
                              class="badge bg-label-secondary rounded-pill">{{ $role->users_count ?? $role->users()->count() }}</span>
                        </td>
                        <td class="text-center">
                           <span
                              class="badge bg-label-primary rounded-pill">{{ $role->menus_count ?? $role->menus()->count() }}</span>
                        </td>
                        <td class="text-center">
                           <div class="d-flex justify-content-center gap-1">
                              <a href="{{ route('role.edit', $role->id) }}" class="btn btn-sm btn-icon btn-text-primary"
                                 data-bs-toggle="tooltip" title="Edit Role">
                                 <i class="ri-pencil-line ri-20px"></i>
                              </a>
                              <a href="{{ route('permission.index', ['role_id' => $role->id]) }}"
                                 class="btn btn-sm btn-icon btn-text-info" data-bs-toggle="tooltip"
                                 title="Kelola Akses">
                                 <i class="ri-shield-keyhole-line ri-20px"></i>
                              </a>
                              @if ($role->slug !== 'super-admin')
                                 <button type="button" class="btn btn-sm btn-icon btn-text-danger delete-record"
                                    data-action="{{ route('role.destroy', $role->id) }}" data-bs-toggle="tooltip"
                                    title="Hapus Role">
                                    <i class="ri-delete-bin-line ri-20px"></i>
                                 </button>
                              @endif
                           </div>
                        </td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>

   </div>
@endsection

@section('page-script')
   @vite(['resources/assets/js/app-role-index.js'])
   <script>
      // Initialize tooltips
      document.addEventListener('DOMContentLoaded', function() {
         var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
         var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
         });
      });
   </script>
@endsection

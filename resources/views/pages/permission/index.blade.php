@extends('layouts/layoutMaster')

@section('title', 'Hak Akses Role')

@section('vendor-style')
   @vite(['resources/assets/vendor/libs/select2/select2.scss'])
@endsection

@section('vendor-script')
   @vite(['resources/assets/vendor/libs/select2/select2.js'])
@endsection

@section('content')
   <div class="container-xxl flex-grow-1 container-p-y">

      {{-- Header Section --}}
      <div class="row mb-6">
         <div class="col-12">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
               <div>
                  <h4 class="mb-1">Manajemen Hak Akses</h4>
                  <p class="text-muted mb-0">Kelola permission untuk setiap role berdasarkan menu yang tersedia.</p>
               </div>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                     <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Hak Akses</li>
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

      @if (session('warning'))
         <div class="alert alert-warning alert-dismissible fade show d-flex align-items-center" role="alert">
            <i class="ri-alert-line me-2 ri-22px"></i>
            <span>{{ session('warning') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif

      {{-- Role Cards Overview --}}
      <div class="row g-6 mb-6">
         @foreach ($roles as $role)
            <div class="col-xl-4 col-lg-6 col-md-6">
               <div class="card h-100 {{ request('role_id') == $role->id ? 'border-primary shadow-sm' : '' }}">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start mb-4">
                        <div class="d-flex align-items-center">
                           <div class="avatar avatar-sm me-3">
                              <span
                                 class="avatar-initial rounded-circle bg-label-{{ $loop->index % 6 == 0 ? 'primary' : ($loop->index % 6 == 1 ? 'success' : ($loop->index % 6 == 2 ? 'info' : ($loop->index % 6 == 3 ? 'warning' : ($loop->index % 6 == 4 ? 'danger' : 'secondary')))) }}">
                                 <i class="ri-shield-user-line ri-20px"></i>
                              </span>
                           </div>
                           <div>
                              <h5 class="mb-0">{{ $role->name }}</h5>
                              <small class="text-muted">{{ $role->users_count ?? 0 }} pengguna</small>
                           </div>
                        </div>
                        @if ($role->slug !== 'super-admin')
                           <span
                              class="badge bg-label-{{ request('role_id') == $role->id ? 'primary' : 'secondary' }} rounded-pill">
                              {{ $role->menus_count ?? $role->menus->count() }} menu
                           </span>
                        @else
                           <span class="badge bg-label-success rounded-pill">Full Access</span>
                        @endif
                     </div>
                     <p class="text-muted mb-4 small">
                        <code class="text-body">{{ $role->slug }}</code>
                     </p>
                     <a href="{{ route('permission.index', ['role_id' => $role->id]) }}"
                        class="btn btn-{{ request('role_id') == $role->id ? 'primary' : 'outline-primary' }} w-100">
                        <i class="ri-settings-3-line me-1"></i>
                        {{ request('role_id') == $role->id ? 'Sedang Diedit' : 'Kelola Akses' }}
                     </a>
                  </div>
               </div>
            </div>
         @endforeach
      </div>

      {{-- Permission Matrix Section --}}
      @if ($selectedRole)
         <form action="{{ route('permission.update') }}" method="POST" id="permissionForm">
            @csrf
            @method('PUT')
            <input type="hidden" name="role_id" value="{{ $selectedRole->id }}">

            <div class="card">
               <div class="card-header border-bottom">
                  <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                     <div class="d-flex align-items-center gap-3">
                        <div class="avatar avatar-md">
                           <span class="avatar-initial rounded bg-label-primary">
                              <i class="ri-shield-keyhole-line ri-24px"></i>
                           </span>
                        </div>
                        <div>
                           <h5 class="mb-0">Hak Akses: {{ $selectedRole->name }}</h5>
                           <small class="text-muted">Atur permission CRUD untuk setiap menu</small>
                        </div>
                     </div>
                     <div class="d-flex gap-2">
                        <button type="button" class="btn btn-label-secondary" id="checkAllBtn">
                           <i class="ri-check-double-line me-1"></i> Check All
                        </button>
                        <button type="button" class="btn btn-label-danger" id="uncheckAllBtn">
                           <i class="ri-close-line me-1"></i> Uncheck All
                        </button>
                     </div>
                  </div>
               </div>

               <div class="card-body p-0">
                  <div class="table-responsive">
                     <table class="table table-hover mb-0">
                        <thead class="table-light">
                           <tr>
                              <th class="ps-4" style="min-width: 280px;">
                                 <span class="fw-semibold">Menu</span>
                              </th>
                              <th class="text-center" style="width: 100px;">
                                 <div class="d-flex flex-column align-items-center">
                                    <div class="form-check mb-1">
                                       <input type="checkbox" class="form-check-input check-col cursor-pointer"
                                          data-col="c" id="check-all-c" title="Check All Create">
                                    </div>
                                    <span class="badge bg-success rounded-pill">Create</span>
                                 </div>
                              </th>
                              <th class="text-center" style="width: 100px;">
                                 <div class="d-flex flex-column align-items-center">
                                    <div class="form-check mb-1">
                                       <input type="checkbox" class="form-check-input check-col cursor-pointer"
                                          data-col="r" id="check-all-r" title="Check All Read">
                                    </div>
                                    <span class="badge bg-info rounded-pill">Read</span>
                                 </div>
                              </th>
                              <th class="text-center" style="width: 100px;">
                                 <div class="d-flex flex-column align-items-center">
                                    <div class="form-check mb-1">
                                       <input type="checkbox" class="form-check-input check-col cursor-pointer"
                                          data-col="u" id="check-all-u" title="Check All Update">
                                    </div>
                                    <span class="badge bg-warning rounded-pill">Update</span>
                                 </div>
                              </th>
                              <th class="text-center pe-4" style="width: 100px;">
                                 <div class="d-flex flex-column align-items-center">
                                    <div class="form-check mb-1">
                                       <input type="checkbox" class="form-check-input check-col cursor-pointer"
                                          data-col="d" id="check-all-d" title="Check All Delete">
                                    </div>
                                    <span class="badge bg-danger rounded-pill">Delete</span>
                                 </div>
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($menus as $menu)
                              @php
                                 $pivot = $selectedRole->menus->find($menu->id)?->pivot;
                                 $hasChildren = $menu->children && $menu->children->count() > 0;
                              @endphp

                              {{-- Parent Menu Row --}}
                              <tr class="table-active">
                                 <td class="ps-4">
                                    <div class="d-flex align-items-center">
                                       @if ($menu->icon)
                                          <div class="avatar avatar-xs me-3">
                                             <span class="avatar-initial rounded bg-label-primary">
                                                <i class="{{ $menu->icon }} ri-16px"></i>
                                             </span>
                                          </div>
                                       @endif
                                       <div>
                                          <span class="fw-semibold text-heading">{{ $menu->name }}</span>
                                          @if ($menu->path)
                                             <br><small class="text-muted">{{ $menu->path }}</small>
                                          @endif
                                       </div>
                                       @if ($hasChildren)
                                          <span
                                             class="badge bg-label-secondary ms-2 rounded-pill">{{ $menu->children->count() }}</span>
                                       @endif
                                    </div>
                                 </td>
                                 <td class="text-center">
                                    <div class="form-check d-flex justify-content-center">
                                       <input type="checkbox"
                                          name="permissions[{{ $selectedRole->id }}][{{ $menu->id }}][c]"
                                          value="1" {{ $pivot?->can_create ? 'checked' : '' }}
                                          class="form-check-input perm-check perm-c parent-check cursor-pointer"
                                          data-menu-id="{{ $menu->id }}">
                                    </div>
                                 </td>
                                 <td class="text-center">
                                    <div class="form-check d-flex justify-content-center">
                                       <input type="checkbox"
                                          name="permissions[{{ $selectedRole->id }}][{{ $menu->id }}][r]"
                                          value="1" {{ $pivot?->can_read ? 'checked' : '' }}
                                          class="form-check-input perm-check perm-r parent-check cursor-pointer"
                                          data-menu-id="{{ $menu->id }}">
                                    </div>
                                 </td>
                                 <td class="text-center">
                                    <div class="form-check d-flex justify-content-center">
                                       <input type="checkbox"
                                          name="permissions[{{ $selectedRole->id }}][{{ $menu->id }}][u]"
                                          value="1" {{ $pivot?->can_update ? 'checked' : '' }}
                                          class="form-check-input perm-check perm-u parent-check cursor-pointer"
                                          data-menu-id="{{ $menu->id }}">
                                    </div>
                                 </td>
                                 <td class="text-center pe-4">
                                    <div class="form-check d-flex justify-content-center">
                                       <input type="checkbox"
                                          name="permissions[{{ $selectedRole->id }}][{{ $menu->id }}][d]"
                                          value="1" {{ $pivot?->can_delete ? 'checked' : '' }}
                                          class="form-check-input perm-check perm-d parent-check cursor-pointer"
                                          data-menu-id="{{ $menu->id }}">
                                    </div>
                                 </td>
                              </tr>

                              {{-- Child Menu Rows --}}
                              @foreach ($menu->children as $child)
                                 @php
                                    $pivotChild = $selectedRole->menus->find($child->id)?->pivot;
                                 @endphp
                                 <tr class="child-row" data-parent-id="{{ $menu->id }}">
                                    <td class="ps-5">
                                       <div class="d-flex align-items-center">
                                          <span class="text-muted me-2">└</span>
                                          @if ($child->icon)
                                             <div class="avatar avatar-xs me-2">
                                                <span class="avatar-initial rounded bg-label-secondary">
                                                   <i class="{{ $child->icon }} ri-14px"></i>
                                                </span>
                                             </div>
                                          @endif
                                          <div>
                                             <span class="text-body">{{ $child->name }}</span>
                                             @if ($child->path)
                                                <br><small class="text-muted">{{ $child->path }}</small>
                                             @endif
                                          </div>
                                       </div>
                                    </td>
                                    <td class="text-center">
                                       <div class="form-check d-flex justify-content-center">
                                          <input type="checkbox"
                                             name="permissions[{{ $selectedRole->id }}][{{ $child->id }}][c]"
                                             value="1" {{ $pivotChild?->can_create ? 'checked' : '' }}
                                             class="form-check-input perm-check perm-c child-check cursor-pointer"
                                             data-parent-id="{{ $menu->id }}">
                                       </div>
                                    </td>
                                    <td class="text-center">
                                       <div class="form-check d-flex justify-content-center">
                                          <input type="checkbox"
                                             name="permissions[{{ $selectedRole->id }}][{{ $child->id }}][r]"
                                             value="1" {{ $pivotChild?->can_read ? 'checked' : '' }}
                                             class="form-check-input perm-check perm-r child-check cursor-pointer"
                                             data-parent-id="{{ $menu->id }}">
                                       </div>
                                    </td>
                                    <td class="text-center">
                                       <div class="form-check d-flex justify-content-center">
                                          <input type="checkbox"
                                             name="permissions[{{ $selectedRole->id }}][{{ $child->id }}][u]"
                                             value="1" {{ $pivotChild?->can_update ? 'checked' : '' }}
                                             class="form-check-input perm-check perm-u child-check cursor-pointer"
                                             data-parent-id="{{ $menu->id }}">
                                       </div>
                                    </td>
                                    <td class="text-center pe-4">
                                       <div class="form-check d-flex justify-content-center">
                                          <input type="checkbox"
                                             name="permissions[{{ $selectedRole->id }}][{{ $child->id }}][d]"
                                             value="1" {{ $pivotChild?->can_delete ? 'checked' : '' }}
                                             class="form-check-input perm-check perm-d child-check cursor-pointer"
                                             data-parent-id="{{ $menu->id }}">
                                       </div>
                                    </td>
                                 </tr>
                              @endforeach
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>

               <div class="card-footer border-top bg-light">
                  <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                     <div>
                        <span class="text-muted small">
                           <i class="ri-information-line me-1"></i>
                           Centang permission yang ingin diberikan untuk role <strong>{{ $selectedRole->name }}</strong>
                        </span>
                     </div>
                     <div class="d-flex gap-2">
                        <a href="{{ route('permission.index') }}" class="btn btn-outline-secondary">
                           <i class="ri-arrow-left-line me-1"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                           <i class="ri-save-line me-1"></i> Simpan Perubahan
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      @else
         {{-- Empty State --}}
         <div class="card">
            <div class="card-body text-center py-5">
               <div class="mb-4">
                  <div class="avatar avatar-xl mx-auto">
                     <span class="avatar-initial rounded-circle bg-label-primary">
                        <i class="ri-shield-keyhole-line ri-40px"></i>
                     </span>
                  </div>
               </div>
               <h5 class="mb-2">Pilih Role untuk Mengelola Hak Akses</h5>
               <p class="text-muted mb-4">Klik tombol "Kelola Akses" pada salah satu role di atas<br>untuk mengatur
                  permission CRUD.</p>
               <div class="row justify-content-center">
                  <div class="col-md-6">
                     <div class="alert alert-primary border-0 d-flex align-items-start" role="alert">
                        <i class="ri-lightbulb-line me-2 ri-20px"></i>
                        <div class="text-start">
                           <strong>Tips:</strong> Setiap role dapat memiliki kombinasi permission yang berbeda untuk setiap
                           menu. Permission <code>Read</code> diperlukan agar menu muncul di sidebar.
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      @endif

   </div>

@endsection

@section('page-script')
   <script>
      document.addEventListener('DOMContentLoaded', function() {
         const checkAllBtn = document.getElementById('checkAllBtn');
         const uncheckAllBtn = document.getElementById('uncheckAllBtn');
         const checkboxes = document.querySelectorAll('.perm-check');
         const columnChecks = document.querySelectorAll('.check-col');

         // Check All Button
         if (checkAllBtn) {
            checkAllBtn.addEventListener('click', function() {
               checkboxes.forEach(cb => cb.checked = true);
               columnChecks.forEach(cb => cb.checked = true);
            });
         }

         // Uncheck All Button
         if (uncheckAllBtn) {
            uncheckAllBtn.addEventListener('click', function() {
               checkboxes.forEach(cb => cb.checked = false);
               columnChecks.forEach(cb => cb.checked = false);
            });
         }

         // Column Check All (header checkboxes)
         columnChecks.forEach(colCheck => {
            colCheck.addEventListener('change', function() {
               const col = this.dataset.col;
               const targetCheckboxes = document.querySelectorAll('.perm-' + col);
               targetCheckboxes.forEach(cb => cb.checked = this.checked);
            });
         });

         // Sync column header checkbox state
         const syncColumnHeader = (col) => {
            const header = document.querySelector('#check-all-' + col);
            if (!header) return;
            const colChecks = document.querySelectorAll('.perm-' + col);
            header.checked = Array.from(colChecks).every(cb => cb.checked);
         };

         // Individual checkbox change - sync header state
         checkboxes.forEach(cb => {
            cb.addEventListener('change', function() {
               const classList = Array.from(this.classList);
               const colClass = classList.find(c => c.startsWith('perm-') && c.length === 6);
               if (colClass) {
                  syncColumnHeader(colClass.split('-')[1]);
               }
            });
         });

         // Initial sync of all column headers
         ['c', 'r', 'u', 'd'].forEach(col => syncColumnHeader(col));

         // Parent row checkbox toggle - sync all children in the same column
         document.querySelectorAll('.parent-check').forEach(parentCheck => {
            parentCheck.addEventListener('change', function() {
               const menuId = this.dataset.menuId;
               const colClass = Array.from(this.classList).find(c => c.startsWith('perm-') && c
                  .length === 6);
               if (!colClass || !menuId) return;

               const col = colClass.split('-')[1];
               const childChecks = document.querySelectorAll(
                  `.child-check.perm-${col}[data-parent-id="${menuId}"]`);
               const isChecked = this.checked;

               childChecks.forEach(cb => {
                  cb.checked = isChecked;
               });

               // Trigger header sync
               syncColumnHeader(col);
            });
         });

         // Optional: Child checkbox change - check parent if all children are checked
         document.querySelectorAll('.child-check').forEach(childCheck => {
            childCheck.addEventListener('change', function() {
               const parentId = this.dataset.parentId;
               const colClass = Array.from(this.classList).find(c => c.startsWith('perm-') && c
                  .length === 6);
               if (!colClass || !parentId) return;

               const col = colClass.split('-')[1];
               const parentCheck = document.querySelector(
                  `.parent-check.perm-${col}[data-menu-id="${parentId}"]`);
               if (!parentCheck) return;

               const siblingChecks = document.querySelectorAll(
                  `.child-check.perm-${col}[data-parent-id="${parentId}"]`);
               const allChecked = Array.from(siblingChecks).every(cb => cb.checked);
               const anyChecked = Array.from(siblingChecks).some(cb => cb.checked);

               // Logic: if any child is checked, the parent should probably also be 'considered' for that permission?
               // But usually, it's either all or manually group.
               // Let's at least make the parent checked if ALL children are checked.
               if (allChecked) parentCheck.checked = true;
               else if (!anyChecked) parentCheck.checked = false;

               syncColumnHeader(col);
            });
         });
      });
   </script>
@endsection

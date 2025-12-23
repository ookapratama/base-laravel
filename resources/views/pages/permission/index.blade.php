@extends('layouts/layoutMaster')

@section('title', 'Hak Akses Role')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  @if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">
      <span class="text-muted fw-light">Manajemen /</span> Hak Akses
    </h4>
  </div>

  <div class="card mb-4">
    <div class="card-body">
      <form action="{{ route('permission.index') }}" method="GET" id="roleFilterForm">
        <div class="row align-items-end">
          <div class="col-md-4">
            <label class="form-label" for="role_id">Pilih Role</label>
            <select name="role_id" id="role_id" class="form-select" onchange="document.getElementById('roleFilterForm').submit()">
              <option value="">-- Pilih Role --</option>
              @foreach($roles as $role)
                <option value="{{ $role->id }}" {{ request('role_id') == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-8 text-end">
            @if($selectedRole)
              <button type="button" class="btn btn-outline-secondary" id="checkAllBtn">
                <i class="ri-check-double-line me-1"></i> Check All
              </button>
            @endif
          </div>
        </div>
      </form>
    </div>
  </div>

  @if($selectedRole)
  <form action="{{ route('permission.update') }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="role_id" value="{{ $selectedRole->id }}">
    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-bordered table-hover">
          <thead class="table-light">
            <tr>
              <th rowspan="2" class="text-center align-middle" style="width: 40%">Menu</th>
              <th colspan="4" class="text-center">{{ $selectedRole->name }}</th>
            </tr>
            <tr>
              <th class="text-center">C</th>
              <th class="text-center">R</th>
              <th class="text-center">U</th>
              <th class="text-center">D</th>
            </tr>
          </thead>
          <tbody>
            @foreach($menus as $menu)
              <tr class="table-secondary">
                <td><strong>{{ $menu->name }}</strong></td>
                @php
                  $pivot = $selectedRole->menus->find($menu->id)?->pivot;
                @endphp
                <td class="text-center">
                  <input type="checkbox" name="permissions[{{ $selectedRole->id }}][{{ $menu->id }}][c]" value="1" {{ $pivot?->can_create ? 'checked' : '' }} class="form-check-input perm-check">
                </td>
                <td class="text-center">
                  <input type="checkbox" name="permissions[{{ $selectedRole->id }}][{{ $menu->id }}][r]" value="1" {{ $pivot?->can_read ? 'checked' : '' }} class="form-check-input perm-check">
                </td>
                <td class="text-center">
                  <input type="checkbox" name="permissions[{{ $selectedRole->id }}][{{ $menu->id }}][u]" value="1" {{ $pivot?->can_update ? 'checked' : '' }} class="form-check-input perm-check">
                </td>
                <td class="text-center">
                  <input type="checkbox" name="permissions[{{ $selectedRole->id }}][{{ $menu->id }}][d]" value="1" {{ $pivot?->can_delete ? 'checked' : '' }} class="form-check-input perm-check">
                </td>
              </tr>
              @foreach($menu->children as $child)
                <tr>
                  <td class="ps-5">— {{ $child->name }}</td>
                  @php
                    $pivotChild = $selectedRole->menus->find($child->id)?->pivot;
                  @endphp
                  <td class="text-center">
                    <input type="checkbox" name="permissions[{{ $selectedRole->id }}][{{ $child->id }}][c]" value="1" {{ $pivotChild?->can_create ? 'checked' : '' }} class="form-check-input perm-check">
                  </td>
                  <td class="text-center">
                    <input type="checkbox" name="permissions[{{ $selectedRole->id }}][{{ $child->id }}][r]" value="1" {{ $pivotChild?->can_read ? 'checked' : '' }} class="form-check-input perm-check">
                  </td>
                  <td class="text-center">
                    <input type="checkbox" name="permissions[{{ $selectedRole->id }}][{{ $child->id }}][u]" value="1" {{ $pivotChild?->can_update ? 'checked' : '' }} class="form-check-input perm-check">
                  </td>
                  <td class="text-center">
                    <input type="checkbox" name="permissions[{{ $selectedRole->id }}][{{ $child->id }}][d]" value="1" {{ $pivotChild?->can_delete ? 'checked' : '' }} class="form-check-input perm-check">
                  </td>
                </tr>
              @endforeach
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
    </div>
  </form>
  @else
    <div class="alert alert-info border-0 shadow-sm" role="alert">
      <i class="ri-information-line me-1"></i> Silakan pilih role terlebih dahulu untuk mengelola hak akses.
    </div>
  @endif
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const checkAllBtn = document.getElementById('checkAllBtn');
  if (checkAllBtn) {
    checkAllBtn.addEventListener('click', function() {
      const checkboxes = document.querySelectorAll('.perm-check');
      const allChecked = Array.from(checkboxes).every(cb => cb.checked);
      
      checkboxes.forEach(cb => {
        cb.checked = !allChecked;
      });
      
      this.innerHTML = !allChecked 
        ? '<i class="ri-checkbox-blank-line me-1"></i> Uncheck All' 
        : '<i class="ri-check-double-line me-1"></i> Check All';
    });
  }
});
</script>
</div>
@endsection

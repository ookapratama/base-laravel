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

  <form action="{{ route('permission.update') }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead class="table-light">
            <tr>
              <th rowspan="2" class="text-center align-middle">Menu</th>
              <th colspan="{{ count($roles) }}" class="text-center">Roles</th>
            </tr>
            <tr>
              @foreach($roles as $role)
                <th class="text-center">{{ $role->name }}</th>
              @endforeach
            </tr>
          </thead>
          <tbody>
            @foreach($menus as $menu)
              <tr class="table-secondary">
                <td><strong>{{ $menu->name }}</strong></td>
                @foreach($roles as $role)
                  <td class="text-center">
                    <input type="checkbox" name="permissions[{{ $role->id }}][{{ $menu->id }}]" value="1" 
                      {{ $role->menus->contains($menu->id) ? 'checked' : '' }} class="form-check-input">
                  </td>
                @endforeach
              </tr>
              @foreach($menu->children as $child)
                <tr>
                  <td class="ps-5">— {{ $child->name }}</td>
                  @foreach($roles as $role)
                    <td class="text-center">
                      <input type="checkbox" name="permissions[{{ $role->id }}][{{ $child->id }}]" value="1" 
                        {{ $role->menus->contains($child->id) ? 'checked' : '' }} class="form-check-input">
                    </td>
                  @endforeach
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
</div>
@endsection

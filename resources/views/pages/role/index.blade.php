@extends('layouts/layoutMaster')

@section('title', 'Manajemen Role')

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
      <span class="text-muted fw-light">Manajemen /</span> Role
    </h4>
    <a href="{{ route('role.create') }}" class="btn btn-primary">
      <i class="ri-add-line me-1"></i> Tambah Role
    </a>
  </div>

  <div class="card">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Role</th>
            <th>Slug</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($roles as $index => $role)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td><strong>{{ $role->name }}</strong></td>
            <td><code>{{ $role->slug }}</code></td>
            <td>
              <a href="{{ route('role.edit', $role->id) }}" class="btn btn-sm btn-outline-primary">
                <i class="ri-pencil-line"></i>
              </a>
              <form action="{{ route('role.destroy', $role->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus role ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger">
                  <i class="ri-delete-bin-line"></i>
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

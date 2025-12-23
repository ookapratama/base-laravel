@extends('layouts/layoutMaster')

@section('title', 'Edit Role')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">
      <span class="text-muted fw-light">Role /</span> Edit
    </h4>
    <a href="{{ route('role.index') }}" class="btn btn-outline-secondary">Kembali</a>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="{{ route('role.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4 form-floating form-floating-outline">
          <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $role->name) }}" required>
          <label for="name">Nama Role</label>
          @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-4 form-floating form-floating-outline">
          <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $role->slug) }}" required>
          <label for="slug">Slug</label>
          @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
</div>
@endsection

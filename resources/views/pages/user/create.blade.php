@extends('layouts/layoutMaster')

@section('title', 'Tambah User')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  {{-- Header --}}
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">
      <span class="text-muted fw-light">User /</span> Tambah User Baru
    </h4>
    <a href="{{ route('user.index') }}" class="btn btn-outline-secondary">
      <i class="ri-arrow-left-line me-1"></i> Kembali
    </a>
  </div>

  {{-- Form Card --}}
  <div class="card">
    <div class="card-header">
      <h5 class="card-title mb-0">Form Tambah User</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="form-floating form-floating-outline">
              <input type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="name"
                name="name"
                placeholder="Masukkan nama"
                value="{{ old('name') }}"
                required>
              <label for="name">Nama Lengkap</label>
              @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="form-floating form-floating-outline">
              <input type="email"
                class="form-control @error('email') is-invalid @enderror"
                id="email"
                name="email"
                placeholder="contoh@email.com"
                value="{{ old('email') }}"
                required>
              <label for="email">Email</label>
              @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="form-floating form-floating-outline">
              <input type="password"
                class="form-control @error('password') is-invalid @enderror"
                id="password"
                name="password"
                placeholder="Masukkan password"
                required>
              <label for="password">Password</label>
              @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-end gap-2 mt-3">
          <a href="{{ route('user.index') }}" class="btn btn-outline-secondary">Batal</a>
          <button type="submit" class="btn btn-primary">
            <i class="ri-save-line me-1"></i> Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

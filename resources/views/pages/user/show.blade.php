@extends('layouts/layoutMaster')

@section('title', 'Detail User')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  {{-- Header --}}
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">
      <span class="text-muted fw-light">User /</span> Detail User
    </h4>
    <a href="{{ route('user.index') }}" class="btn btn-outline-secondary">
      <i class="ri-arrow-left-line me-1"></i> Kembali
    </a>
  </div>

  <div class="row">
    {{-- User Info Card --}}
    <div class="col-xl-4 col-lg-5 col-md-5">
      <div class="card mb-4">
        <div class="card-body text-center pt-5">
          <div class="avatar avatar-xl mx-auto mb-3">
            <span class="avatar-initial rounded-circle bg-label-primary fs-2">
              {{ strtoupper(substr($user->name, 0, 2)) }}
            </span>
          </div>
          <h5 class="mb-1">{{ $user->name }}</h5>
          <span class="badge bg-label-success rounded-pill mb-3">Active</span>

          <div class="d-flex justify-content-center gap-2">
            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm">
              <i class="ri-pencil-line me-1"></i> Edit
            </a>
            <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline"
              onsubmit="return confirm('Yakin ingin menghapus user ini?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-outline-danger btn-sm">
                <i class="ri-delete-bin-line me-1"></i> Hapus
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    {{-- User Details --}}
    <div class="col-xl-8 col-lg-7 col-md-7">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Informasi User</h5>
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-sm-3">
              <p class="mb-0 text-heading fw-medium">ID</p>
            </div>
            <div class="col-sm-9">
              <p class="mb-0">#{{ $user->id }}</p>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-sm-3">
              <p class="mb-0 text-heading fw-medium">Nama</p>
            </div>
            <div class="col-sm-9">
              <p class="mb-0">{{ $user->name }}</p>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-sm-3">
              <p class="mb-0 text-heading fw-medium">Email</p>
            </div>
            <div class="col-sm-9">
              <p class="mb-0">{{ $user->email }}</p>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-sm-3">
              <p class="mb-0 text-heading fw-medium">Email Verified</p>
            </div>
            <div class="col-sm-9">
              @if($user->email_verified_at)
              <span class="badge bg-label-success">Verified</span>
              <small class="text-muted ms-1">{{ $user->email_verified_at->format('d M Y, H:i') }}</small>
              @else
              <span class="badge bg-label-warning">Not Verified</span>
              @endif
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-sm-3">
              <p class="mb-0 text-heading fw-medium">Dibuat Pada</p>
            </div>
            <div class="col-sm-9">
              <p class="mb-0">{{ $user->created_at->format('d M Y, H:i:s') }}</p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0 text-heading fw-medium">Terakhir Update</p>
            </div>
            <div class="col-sm-9">
              <p class="mb-0">{{ $user->updated_at->format('d M Y, H:i:s') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

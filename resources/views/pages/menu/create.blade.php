@extends('layouts/layoutMaster')

@section('title', 'Tambah Menu')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">
      <span class="text-muted fw-light">Menu /</span> Tambah
    </h4>
    <a href="{{ route('menu.index') }}" class="btn btn-outline-secondary">Kembali</a>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="{{ route('menu.store') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="form-floating form-floating-outline">
              <select name="parent_id" id="parent_id" class="form-select">
                <option value="">No Parent (Root)</option>
                @foreach($parentMenus as $pm)
                  <option value="{{ $pm->id }}">{{ $pm->name }}</option>
                @endforeach
              </select>
              <label for="parent_id">Parent Menu</label>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="form-floating form-floating-outline">
              <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required>
              <label for="name">Nama Menu</label>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="form-floating form-floating-outline">
              <input type="text" name="icon" id="icon" class="form-control" placeholder="ri-home-line">
              <label for="icon">Icon (Remix Icon Class)</label>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="form-floating form-floating-outline">
              <input type="text" name="url" id="url" class="form-control" placeholder="/dashboard">
              <label for="url">URL</label>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="form-floating form-floating-outline">
              <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" required>
              <label for="slug">Slug (for Active State)</label>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="form-floating form-floating-outline">
              <input type="number" name="order_no" id="order_no" class="form-control" value="0" required>
              <label for="order_no">Order No</label>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="form-floating form-floating-outline">
              <select name="is_active" id="is_active" class="form-select">
                <option value="1">Aktif</option>
                <option value="0">Non-aktif</option>
              </select>
              <label for="is_active">Status</label>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection

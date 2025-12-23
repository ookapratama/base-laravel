@extends('layouts/layoutMaster')

@section('title', 'Manajemen Menu')

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
      <span class="text-muted fw-light">Manajemen /</span> Menu
    </h4>
    <a href="{{ route('menu.create') }}" class="btn btn-primary">
      <i class="ri-add-line me-1"></i> Tambah Menu
    </a>
  </div>

  <div class="card">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Urutan</th>
            <th>Nama</th>
            <th>Icon</th>
            <th>URL</th>
            <th>Slug</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($menus as $menu)
            <tr>
              <td>{{ $menu->order_no }}</td>
              <td><strong>{{ $menu->name }}</strong></td>
              <td><i class="{{ $menu->icon }}"></i></td>
              <td><code>{{ $menu->url }}</code></td>
              <td>{{ $menu->slug }}</td>
              <td>
                <span class="badge bg-label-{{ $menu->is_active ? 'success' : 'danger' }}">
                  {{ $menu->is_active ? 'Aktif' : 'Non-aktif' }}
                </span>
              </td>
              <td>
                <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-sm btn-outline-primary"><i class="ri-pencil-line"></i></a>
              </td>
            </tr>
            @foreach($menu->children as $child)
              <tr>
                <td>{{ $menu->order_no }}.{{ $child->order_no }}</td>
                <td class="ps-5">— {{ $child->name }}</td>
                <td><i class="{{ $child->icon }}"></i></td>
                <td><code>{{ $child->url }}</code></td>
                <td>{{ $child->slug }}</td>
                <td>
                  <span class="badge bg-label-{{ $child->is_active ? 'success' : 'danger' }}">
                    {{ $child->is_active ? 'Aktif' : 'Non-aktif' }}
                  </span>
                </td>
                <td>
                  <a href="{{ route('menu.edit', $child->id) }}" class="btn btn-sm btn-outline-primary"><i class="ri-pencil-line"></i></a>
                </td>
              </tr>
            @endforeach
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

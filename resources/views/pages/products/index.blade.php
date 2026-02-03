@extends('layouts/layoutMaster')

@section('title', 'Manajemen Produk')

@section('content')
   <div class="container-xxl flex-grow-1 container-p-y">
      <div class="d-flex justify-content-between align-items-center mb-4">
         <h4 class="fw-bold mb-0">
            <span class="text-muted fw-light">Katalog /</span> Daftar Produk
         </h4>
         <div class="d-flex gap-2">
            <div class="dropdown">
               <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <i class="ri-download-line me-1"></i> Export
               </button>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('products.export.excel') }}"><i
                           class="ri-file-excel-line me-2 text-success"></i> Excel</a></li>
                  <li><a class="dropdown-item" href="{{ route('products.export.pdf') }}"><i
                           class="ri-file-pdf-line me-2 text-danger"></i> PDF</a></li>
               </ul>
            </div>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#importModal">
               <i class="ri-upload-line me-1"></i> Import
            </button>
            <a href="{{ route('products.create') }}" class="btn btn-primary">
               <i class="ri-add-line me-1"></i> Tambah Produk
            </a>
         </div>
      </div>

      <div class="card">
         <div class="card-header border-bottom">
            <h5 class="card-title mb-0">Daftar Produk</h5>
         </div>
         <div class="table-responsive">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th style="width: 50px">#</th>
                     <th>Cover</th>
                     <th>Nama</th>
                     <th>Harga</th>
                     <th>Stok</th>
                     <th>Status</th>
                     <th class="text-center">Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  @forelse($data as $index => $item)
                     <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                           @if ($item->cover)
                              <img src="{{ Storage::url($item->cover) }}" alt="cover" class="rounded"
                                 style="width: 50px; height: 50px; object-fit: cover;">
                           @else
                              <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                 style="width: 50px; height: 50px">
                                 <i class="ri-image-line text-muted"></i>
                              </div>
                           @endif
                        </td>
                        <td>
                           <span class="fw-bold">{{ $item->name }}</span>
                           <br>
                           <small class="text-muted text-truncate d-inline-block"
                              style="max-width: 200px">{{ $item->description }}</small>
                        </td>
                        <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                        <td>
                           @if ($item->quantity <= 5)
                              <span class="badge bg-label-danger">{{ $item->quantity }} (Low)</span>
                           @else
                              <span class="badge bg-label-success">{{ $item->quantity }}</span>
                           @endif
                        </td>
                        <td>
                           @if ($item->is_active)
                              <span class="badge bg-success">Aktif</span>
                           @else
                              <span class="badge bg-secondary">Non-Aktif</span>
                           @endif
                        </td>
                        <td class="text-center">
                           <div class="d-flex justify-content-center gap-2">
                              <a href="{{ route('products.edit', $item->id) }}" class="btn btn-sm btn-outline-primary">
                                 <i class="ri-pencil-line"></i>
                              </a>
                              <button type="button" class="btn btn-sm btn-outline-danger delete-record"
                                 data-id="{{ $item->id }}" data-name="{{ $item->name }}">
                                 <i class="ri-delete-bin-line"></i>
                              </button>
                           </div>
                        </td>
                     </tr>
                  @empty
                     <tr>
                        <td colspan="7" class="text-center py-5">
                           <div class="text-muted">
                              <i class="ri-file-search-line ri-3x mb-2"></i>
                              <p>Belum ada produk yang ditambahkan.</p>
                           </div>
                        </td>
                     </tr>
                  @endforelse
               </tbody>
            </table>
         </div>
      </div>
   </div>

   <!-- Import Modal -->
   <div class="modal fade" id="importModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Import Produk dari Excel</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('products.import.excel') }}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="modal-body">
                  <div class="mb-3">
                     <label class="form-label">Pilih File (XLSX, XLS, CSV)</label>
                     <input type="file" name="file" class="form-control" accept=".xlsx, .xls, .csv" required>
                     <div class="form-text mt-2">
                        Gunakan format kolom: <code>nama_produk</code>, <code>deskripsi</code>, <code>harga</code>,
                        <code>stok</code>, <code>status</code> (Aktif/Non-Aktif).
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Mulai Import</button>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection

@section('page-script')
   <script>
      document.addEventListener('DOMContentLoaded', function() {
         // Handle Delete Confirmation
         $('.delete-record').on('click', function() {
            let id = $(this).data('id');
            let name = $(this).data('name');
            let url = "{{ route('products.destroy', ':id') }}".replace(':id', id);

            window.AlertHandler.confirm(
               'Hapus Produk?',
               `Apakah Anda yakin ingin menghapus "${name}"? Data yang dihapus tidak dapat dikembalikan.`,
               'Ya, Hapus!',
               function() {
                  $.ajax({
                     url: url,
                     method: 'DELETE',
                     data: {
                        _token: '{{ csrf_token() }}'
                     },
                     success: function(response) {
                        window.AlertHandler.handle(response);
                        setTimeout(() => {
                           window.location.reload();
                        }, 1500);
                     },
                     error: function(xhr) {
                        window.AlertHandler.handle(xhr.responseJSON);
                     }
                  });
               }
            );
         });

         // Show toast for session success deleted from here as it is handled globally in scripts.blade.php
      });
   </script>
@endsection

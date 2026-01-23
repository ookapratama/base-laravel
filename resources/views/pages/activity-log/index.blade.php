@extends('layouts/layoutMaster')

@section('title', 'Activity Log')

@section('content')
   <div class="container-xxl flex-grow-1 container-p-y">
      {{-- Header --}}
      <div class="d-flex justify-content-between align-items-center mb-4">
         <h4 class="fw-bold mb-0">
            <span class="text-muted fw-light">Dashboard /</span> Activity Log
         </h4>
      </div>

      {{-- Filter Card --}}
      <div class="card mb-4">
         <div class="card-header">
            <h5 class="card-title mb-0">
               <i class="ri-filter-2-line me-1"></i> Filter
            </h5>
         </div>
         <div class="card-body">
            <form action="{{ route('activity-log.index') }}" method="GET">
               <div class="row g-3">
                  <div class="col-md-3">
                     <label class="form-label">Aksi</label>
                     <select name="action" class="form-select">
                        <option value="">Semua Aksi</option>
                        @foreach ($actions as $action)
                           <option value="{{ $action }}"
                              {{ ($filters['action'] ?? '') == $action ? 'selected' : '' }}>
                              {{ ucfirst($action) }}
                           </option>
                        @endforeach
                     </select>
                  </div>
                  <div class="col-md-3">
                     <label class="form-label">User</label>
                     <select name="user_id" class="form-select">
                        <option value="">Semua User</option>
                        @foreach ($users as $user)
                           <option value="{{ $user->id }}"
                              {{ ($filters['user_id'] ?? '') == $user->id ? 'selected' : '' }}>
                              {{ $user->name }}
                           </option>
                        @endforeach
                     </select>
                  </div>
                  <div class="col-md-2">
                     <label class="form-label">Dari Tanggal</label>
                     <input type="date" name="start_date" class="form-control"
                        value="{{ $filters['start_date'] ?? '' }}">
                  </div>
                  <div class="col-md-2">
                     <label class="form-label">Sampai Tanggal</label>
                     <input type="date" name="end_date" class="form-control" value="{{ $filters['end_date'] ?? '' }}">
                  </div>
                  <div class="col-md-2 d-flex align-items-end gap-2">
                     <button type="submit" class="btn btn-primary">
                        <i class="ri-search-line me-1"></i> Filter
                     </button>
                     <a href="{{ route('activity-log.index') }}" class="btn btn-outline-secondary">
                        <i class="ri-refresh-line"></i>
                     </a>
                  </div>
               </div>
            </form>
         </div>
      </div>

      {{-- Activity Log Table --}}
      <div class="card">
         <div class="card-header border-bottom">
            <h5 class="card-title mb-0">
               <i class="ri-history-line me-1"></i> Riwayat Aktivitas
            </h5>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-hover">
                  <thead class="table-light">
                     <tr>
                        <th width="180">Waktu</th>
                        <th width="120">User</th>
                        <th width="100">Aksi</th>
                        <th>Deskripsi</th>
                        <th width="120">IP Address</th>
                        <th width="80">Detail</th>
                     </tr>
                  </thead>
                  <tbody>
                     @forelse($logs as $log)
                        <tr>
                           <td>
                              <small class="text-muted">
                                 {{ $log->created_at->format('d M Y') }}<br>
                                 <strong>{{ $log->created_at->format('H:i:s') }}</strong>
                              </small>
                           </td>
                           <td>
                              @if ($log->user)
                                 <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm me-2">
                                       <span class="avatar-initial rounded-circle bg-label-primary">
                                          {{ strtoupper(substr($log->user->name, 0, 2)) }}
                                       </span>
                                    </div>
                                    <div>
                                       <span class="fw-medium d-block">{{ $log->user->name }}</span>
                                       @if (isset($log->properties['is_impersonation']) && $log->properties['is_impersonation'])
                                          <span class="badge bg-label-danger xsmall-badge" style="font-size: 0.6rem;">
                                             Oleh Admin
                                          </span>
                                       @endif
                                    </div>
                                 </div>
                              @else
                                 <span class="text-muted">System</span>
                              @endif
                           </td>
                           <td>
                              <span class="badge bg-label-{{ $log->action_color }}">
                                 {{ $log->action_label }}
                              </span>
                           </td>
                           <td>
                              {{ $log->description ?? '-' }}
                              @if ($log->subject_type)
                                 <br><small class="text-muted">{{ class_basename($log->subject_type) }}
                                    #{{ $log->subject_id }}</small>
                              @endif
                           </td>
                           <td>
                              <small class="text-muted">{{ $log->ip_address ?? '-' }}</small>
                           </td>
                           <td>
                              @if ($log->old_values || $log->new_values)
                                 <button type="button" class="btn btn-sm btn-icon btn-outline-primary"
                                    data-bs-toggle="modal" data-bs-target="#detailModal{{ $log->id }}">
                                    <i class="ri-eye-line"></i>
                                 </button>

                                 {{-- Detail Modal --}}
                                 <div class="modal fade" id="detailModal{{ $log->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title">Detail Perubahan</h5>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                          </div>
                                          <div class="modal-body">
                                             <div class="row">
                                                @if ($log->old_values)
                                                   <div class="col-md-6">
                                                      <h6 class="text-danger">Data Sebelum:</h6>
                                                      <pre class="bg-light p-3 rounded"><code>{{ json_encode($log->old_values, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</code></pre>
                                                   </div>
                                                @endif
                                                @if ($log->new_values)
                                                   <div class="col-md-6">
                                                      <h6 class="text-success">Data Sesudah:</h6>
                                                      <pre class="bg-light p-3 rounded"><code>{{ json_encode($log->new_values, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</code></pre>
                                                   </div>
                                                @endif
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              @else
                                 <span class="text-muted">-</span>
                              @endif
                           </td>
                        </tr>
                     @empty
                        <tr>
                           <td colspan="6" class="text-center py-4">
                              <div class="text-muted">
                                 <i class="ri-history-line ri-48px mb-2 d-block"></i>
                                 <p>Belum ada aktivitas tercatat.</p>
                              </div>
                           </td>
                        </tr>
                     @endforelse
                  </tbody>
               </table>
            </div>

            {{-- Pagination --}}
            @if ($logs->hasPages())
               <div class="d-flex justify-content-between align-items-center mt-4">
                  <div class="text-muted">
                     Menampilkan {{ $logs->firstItem() }} - {{ $logs->lastItem() }} dari {{ $logs->total() }} aktivitas
                  </div>
                  {{ $logs->withQueryString()->links() }}
               </div>
            @endif
         </div>
      </div>
   </div>
@endsection

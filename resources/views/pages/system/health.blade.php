@extends('layouts/layoutMaster')

@section('title', 'System Health & Backup')

@section('content')
   <div class="container-xxl flex-grow-1 container-p-y">
      <div class="d-flex justify-content-between align-items-center mb-4">
         <h4 class="fw-bold mb-0">
            <span class="text-muted fw-light">Sistem /</span> Status & Backup
         </h4>
         <a href="{{ route('system.backup') }}" class="btn btn-primary">
            <i class="ri-database-2-line me-1"></i> Backup Database (.sql)
         </a>
      </div>

      <div class="row g-4">
         <!-- Environment Info -->
         <div class="col-md-4">
            <div class="card h-100">
               <div class="card-body text-center">
                  <div class="avatar avatar-lg bg-label-primary mx-auto mb-3">
                     <i class="ri-server-line ri-24px"></i>
                  </div>
                  <h5>Environment</h5>
                  <div class="d-flex flex-column gap-2 text-start mt-4">
                     <div class="d-flex justify-content-between">
                        <span class="text-muted">Laravel Version</span>
                        <span class="fw-medium">{{ $health['laravel_version'] }}</span>
                     </div>
                     <div class="d-flex justify-content-between">
                        <span class="text-muted">PHP Version</span>
                        <span class="fw-medium">{{ $health['php_version'] }}</span>
                     </div>
                     <div class="d-flex justify-content-between">
                        <span class="text-muted">OS</span>
                        <span class="fw-medium">{{ $health['os'] }}</span>
                     </div>
                     <div class="d-flex justify-content-between">
                        <span class="text-muted">Uptime</span>
                        <span class="fw-medium text-end" style="font-size: 0.8rem">{{ $health['uptime'] }}</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- System Resource -->
         <div class="col-md-4">
            <div class="card h-100">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                     <h5 class="mb-0">Resources</h5>
                     <i class="ri-pie-chart-2-line text-muted"></i>
                  </div>

                  <div class="mb-4">
                     <div class="d-flex justify-content-between mb-1">
                        <span class="text-muted">Disk Usage ({{ $health['disk']['used'] }} /
                           {{ $health['disk']['total'] }})</span>
                        <span class="fw-medium">{{ $health['disk']['percentage'] }}%</span>
                     </div>
                     <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-{{ $health['disk']['percentage'] > 80 ? 'danger' : 'success' }}"
                           role="progressbar" style="width: {{ $health['disk']['percentage'] }}%"
                           aria-valuenow="{{ $health['disk']['percentage'] }}" aria-valuemin="0" aria-valuemax="100">
                        </div>
                     </div>
                  </div>

                  <div class="d-flex flex-column gap-2">
                     <div class="d-flex justify-content-between">
                        <span class="text-muted">Memory Usage</span>
                        <span class="fw-medium font-monospace">{{ $health['memory_usage'] }}</span>
                     </div>
                     <div class="d-flex justify-content-between">
                        <span class="text-muted">Free Storage</span>
                        <span class="fw-medium text-success">{{ $health['disk']['free'] }}</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Database & Security -->
         <div class="col-md-4">
            <div class="card h-100">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center mb-4">
                     <h5 class="mb-0">Database Status</h5>
                     <span
                        class="badge bg-{{ $health['db_connection']['class'] }}">{{ $health['db_connection']['status'] }}</span>
                  </div>

                  <div class="p-3 bg-label-secondary rounded mb-4 text-center">
                     <i class="ri-database-line ri-32px mb-2 d-block"></i>
                     <span class="fw-bold d-block">{{ $health['db_connection']['database'] ?? 'N/A' }}</span>
                     <small class="text-muted">Active Database Connection</small>
                  </div>

                  <div class="alert alert-warning mb-0" role="alert">
                     <div class="d-flex">
                        <i class="ri-error-warning-line me-2"></i>
                        <div>
                           <h6 class="alert-heading mb-1">Backup Reminder</h6>
                           <p class="mb-0 small">Disarankan melakukan backup rutin sebelum melakukan update besar.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Additional Info Cards -->
      <div class="row mt-4 g-4">
         <div class="col-12">
            <div class="card">
               <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">System Configuration</h5>
                  <button class="btn btn-sm btn-outline-secondary" onclick="window.location.reload()">
                     <i class="ri-refresh-line me-1"></i> Refresh Data
                  </button>
               </div>
               <div class="card-body p-0">
                  <div class="table-responsive">
                     <table class="table table-flush">
                        <tbody>
                           <tr>
                              <td width="30%" class="text-muted">Application URL</td>
                              <td class="fw-bold">{{ config('app.url') }}</td>
                           </tr>
                           <tr>
                              <td class="text-muted">Environment</td>
                              <td><span class="badge bg-label-info">{{ config('app.env') }}</span></td>
                           </tr>
                           <tr>
                              <td class="text-muted">Debug Mode</td>
                              <td>
                                 @if (config('app.debug'))
                                    <span class="text-danger fw-bold">Enabled (High Security Risk)</span>
                                 @else
                                    <span class="text-success">Disabled</span>
                                 @endif
                              </td>
                           </tr>
                           <tr>
                              <td class="text-muted">Timezone</td>
                              <td>{{ config('app.timezone') }}</td>
                           </tr>
                           <tr>
                              <td class="text-muted">Cache Driver</td>
                              <td>{{ config('cache.default') }}</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection

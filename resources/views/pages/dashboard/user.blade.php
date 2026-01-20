@php
   $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Dashboard')

@section('page-style')
   @vite(['resources/assets/vendor/scss/pages/cards-statistics.scss'])
   <style>
      .welcome-bg {
         background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.1) 0%, rgba(var(--bs-primary-rgb), 0) 100%);
      }
   </style>
@endsection

@section('content')
   <div class="row g-6">
      <!-- Welcome Banner -->
      <div class="col-12">
         <div class="card welcome-bg border-0">
            <div class="card-body p-8">
               <div class="row align-items-center">
                  <div class="col-md-8">
                     <h3 class="mb-2 text-primary">Selamat Melanjutkan Pekerjaan, {{ auth()->user()->name }}! ✨</h3>
                     <p class="mb-5 fs-5">Senang melihat Anda kembali. Silakan akses menu di sebelah kiri untuk mulai
                        mengelola data sesuai hak akses Anda.</p>
                     <div class="d-flex align-items-center flex-wrap gap-4 mt-6">
                        <div class="d-flex align-items-center me-4">
                           <div class="avatar avatar-sm me-2">
                              <span class="avatar-initial rounded bg-label-primary">
                                 <i class="ri-shield-user-line ri-20px"></i>
                              </span>
                           </div>
                           <span class="h6 mb-0">{{ auth()->user()->role->name ?? 'User' }} Access</span>
                        </div>
                        <div class="d-flex align-items-center">
                           <div class="avatar avatar-sm me-2">
                              <span class="avatar-initial rounded bg-label-success">
                                 <i class="ri-time-line ri-20px"></i>
                              </span>
                           </div>
                           <span class="h6 mb-0">Login Terakhir: {{ now()->format('H:i') }}</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 text-center d-none d-md-block">
                     <img src="{{ asset('assets/img/illustrations/faq-illustration.png') }}" alt="Welcome image"
                        width="200" class="img-fluid">
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Role Permissions Info -->
      <div class="col-md-4">
         <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
               <h5 class="card-title m-0">Menu Akses Anda</h5>
               <i class="ri-information-line ri-22px text-muted"></i>
            </div>
            <div class="card-body">
               <p class="small text-muted mb-4">Berikut adalah beberapa area yang dapat Anda akses:</p>
               <ul class="list-unstyled mb-0">
                  @forelse(auth()->user()->role->menus->take(5) as $menu)
                     <li class="mb-4 d-flex align-items-center">
                        <div class="avatar avatar-xs me-3">
                           <span class="avatar-initial rounded bg-label-secondary"><i
                                 class="{{ $menu->icon ?? 'ri-circle-line' }} ri-14px"></i></span>
                        </div>
                        <span class="text-heading fw-medium">{{ $menu->name }}</span>
                     </li>
                  @empty
                     <li class="text-muted small italic">Belum ada menu yang diberikan.</li>
                  @endforelse
                  @if (auth()->user()->role->menus->count() > 5)
                     <li class="text-primary small">+ {{ auth()->user()->role->menus->count() - 5 }} menu lainnya</li>
                  @endif
               </ul>
            </div>
         </div>
      </div>

      <!-- Personal Activity Placeholder -->
      <div class="col-md-8">
         <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
               <h5 class="card-title m-0">Pusat Informasi</h5>
               <span class="badge bg-label-primary rounded-pill">New Update</span>
            </div>
            <div class="card-body">
               <div class="d-flex align-items-start gap-4 mb-6">
                  <div class="avatar avatar-md">
                     <span class="avatar-initial rounded-circle bg-label-primary"><i
                           class="ri-notification-3-line ri-24px"></i></span>
                  </div>
                  <div class="flex-grow-1">
                     <h6 class="mb-1">Pembaruan Sistem v1.2</h6>
                     <p class="mb-0 text-muted small">Kami telah memperbarui tampilan dashboard untuk kenyamanan Anda. Menu
                        navigasi sekarang lebih responsif.</p>
                  </div>
                  <small class="text-muted text-nowrap">Tadi</small>
               </div>
               <hr>
               <div class="d-flex align-items-center justify-content-between p-4 bg-lighter rounded">
                  <div>
                     <h6 class="mb-1">Butuh Bantuan?</h6>
                     <p class="mb-0 text-muted small">Hubungi admin jika Anda kesulitan mengakses menu tertentu.</p>
                  </div>
                  <a href="javascript:;" class="btn btn-primary btn-sm">Support</a>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection

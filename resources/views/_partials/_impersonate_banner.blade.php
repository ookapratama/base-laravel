@php
   $impersonateService = app(\App\Services\ImpersonateService::class);
@endphp

@if ($impersonateService->isImpersonating())
   <div class="bg-danger text-white py-2 px-4 d-flex justify-content-between align-items-center w-100"
      style="z-index: 1050; position: relative;">
      <div>
         <i class="ri-error-warning-line me-2"></i>
         <strong>Mode Penyamaran:</strong> Anda sedang login sebagai <strong>{{ auth()->user()->name }}</strong>
         (Admin Asli: {{ $impersonateService->getOriginalAdmin()->name }})
      </div>
      <a href="{{ route('impersonate.stop') }}" class="btn btn-sm btn-light text-danger fw-bold">
         <i class="ri-logout-box-r-line me-1"></i> Kembali ke Admin
      </a>
   </div>
@endif

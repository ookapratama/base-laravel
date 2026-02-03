@extends('layouts/layoutMaster')

@section('title', 'Website Settings')

@section('content')
   <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4">
         <span class="text-muted fw-light">Sistem /</span> Pengaturan Website
      </h4>

      <div class="row">
         <div class="col-md-12">
            <div class="card mb-4">
               <div class="card-header border-bottom">
                  <ul class="nav nav-pills card-header-pills" role="tablist">
                     <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                           data-bs-target="#navs-general" aria-controls="navs-general" aria-selected="true">
                           <i class="ri-global-line me-1"></i> Umum
                        </button>
                     </li>
                     <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                           data-bs-target="#navs-contact" aria-controls="navs-contact" aria-selected="false">
                           <i class="ri-contacts-line me-1"></i> Kontak & Sosmed
                        </button>
                     </li>
                     <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                           data-bs-target="#navs-system" aria-controls="navs-system" aria-selected="false">
                           <i class="ri-settings-4-line me-1"></i> Sistem
                        </button>
                     </li>
                  </ul>
               </div>
               <div class="card-body">
                  <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="tab-content p-0">
                        {{-- General Settings --}}
                        <div class="tab-pane fade show active" id="navs-general" role="tabpanel">
                           <div class="row g-4 mt-1">
                              @foreach ($groupedSettings['general'] as $setting)
                                 <div class="col-md-6">
                                    <label class="form-label">{{ $setting->label }}</label>
                                    @if ($setting->type === 'text')
                                       <input type="text" name="{{ $setting->key }}" class="form-control"
                                          value="{{ $setting->value }}">
                                    @elseif($setting->type === 'textarea')
                                       <textarea name="{{ $setting->key }}" class="form-control" rows="3">{{ $setting->value }}</textarea>
                                    @elseif($setting->type === 'color')
                                       <input type="color" name="{{ $setting->key }}" class="form-control"
                                          value="{{ $setting->value }}">
                                    @elseif($setting->type === 'image')
                                       <div class="d-flex align-items-start align-items-sm-center gap-4">
                                          @if ($setting->value)
                                             <img src="{{ asset('storage/' . $setting->value) }}" alt="image"
                                                class="d-block rounded" height="60" width="60">
                                          @else
                                             <div
                                                class="bg-label-secondary rounded d-flex align-items-center justify-content-center"
                                                style="height: 60px; width: 60px;">
                                                <i class="ri-image-line ri-24px"></i>
                                             </div>
                                          @endif
                                          <div class="button-wrapper">
                                             <input type="file" name="{{ $setting->key }}"
                                                class="form-control form-control-sm">
                                             <div class="text-muted small mt-1">Hanya JPG atau PNG. Maks 800KB.</div>
                                          </div>
                                       </div>
                                    @endif
                                 </div>
                              @endforeach
                           </div>
                        </div>

                        {{-- Contact Settings --}}
                        <div class="tab-pane fade" id="navs-contact" role="tabpanel">
                           <div class="row g-4 mt-1">
                              @foreach ($groupedSettings['contact'] as $setting)
                                 <div class="col-md-6">
                                    <label class="form-label">{{ $setting->label }}</label>
                                    <div class="input-group input-group-merge">
                                       <span class="input-group-text"><i
                                             class="{{ $setting->key == 'contact_email' ? 'ri-mail-line' : ($setting->key == 'contact_phone' ? 'ri-whatsapp-line' : 'ri-instagram-line') }}"></i></span>
                                       <input type="text" name="{{ $setting->key }}" class="form-control"
                                          value="{{ $setting->value }}">
                                    </div>
                                 </div>
                              @endforeach
                           </div>
                        </div>

                        {{-- System Settings --}}
                        <div class="tab-pane fade" id="navs-system" role="tabpanel">
                           <div class="row g-4 mt-1">
                              @foreach ($groupedSettings['system'] as $setting)
                                 <div class="col-md-6">
                                    <div class="form-check form-switch mt-4">
                                       <input type="hidden" name="{{ $setting->key }}" value="0">
                                       <input class="form-check-input" type="checkbox" name="{{ $setting->key }}"
                                          id="{{ $setting->key }}" value="1"
                                          {{ $setting->value == '1' ? 'checked' : '' }}>
                                       <label class="form-check-label fw-medium"
                                          for="{{ $setting->key }}">{{ $setting->label }}</label>
                                    </div>
                                    <small class="text-muted d-block mt-1">Mengaktifkan fitur ini akan berdampak pada
                                       akses
                                       publik aplikasi.</small>
                                 </div>
                              @endforeach
                           </div>
                        </div>
                     </div>

                     <div class="mt-8 border-top pt-4">
                        <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
                        <a href="{{ route('settings.clear-cache') }}" class="btn btn-outline-warning me-2">Bersihkan
                           Cache</a>
                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                     </div>
                  </form>
               </div>
            </div>

            {{-- Info Alert --}}
            <div class="alert alert-primary d-flex align-items-center" role="alert">
               <span class="alert-icon me-2">
                  <i class="ri-information-line ri-22px"></i>
               </span>
               <span>Perubahan pada pengaturan ini akan disimpan dan diterapkan secara instan ke seluruh sistem melalui
                  mekanisme cache.</span>
            </div>
         </div>
      </div>
   </div>
@endsection

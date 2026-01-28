<!-- BEGIN: Vendor JS-->

@vite(['resources/assets/vendor/libs/jquery/jquery.js', 'resources/assets/vendor/libs/popper/popper.js', 'resources/assets/vendor/js/bootstrap.js', 'resources/assets/vendor/libs/node-waves/node-waves.js', 'resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js', 'resources/assets/vendor/libs/hammer/hammer.js', 'resources/assets/vendor/libs/typeahead-js/typeahead.js', 'resources/assets/vendor/js/menu.js'])

@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
@vite(['resources/js/app.js', 'resources/assets/js/main.js'])

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
@stack('pricing-script')
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->
<!-- Global Alert Handler Integration -->
<script>
   document.addEventListener('DOMContentLoaded', function() {
      const showMessage = () => {
         if (!window.AlertHandler) {
            // If AlertHandler not ready yet (deferred module), wait a tiny bit
            setTimeout(showMessage, 50);
            return;
         }

         // Check for success message
         @if (session('success'))
            window.AlertHandler.showSuccess("{{ session('success') }}", true);
         @endif

         // Check for error message
         @if (session('error'))
            window.AlertHandler.showError("{{ session('error') }}");
         @endif

         // Check for warning message
         @if (session('warning'))
            window.AlertHandler.showWarning("{{ session('warning') }}");
         @endif

         // Check for validation errors
         @if ($errors->any())
            const validationErrors = {};
            @foreach ($errors->messages() as $key => $messages)
               validationErrors['{{ $key }}'] = @json($messages);
            @endforeach
            window.AlertHandler.showError('Please check your input', validationErrors);
         @endif
      };

      showMessage();
   });

   // Custom Theme Color Integration
   window.addEventListener('load', function() {
      const checkCustomizer = setInterval(() => {
         const customizerPanel = document.querySelector('.template-customizer-inner');
         if (customizerPanel && window.templateCustomizer) {
            clearInterval(checkCustomizer);

            // Add Theme Color section
            const themesSection = customizerPanel.querySelector('.template-customizer-themes');
            if (themesSection) {
               const colorSection = document.createElement('div');
               colorSection.className = 'template-customizer-color mb-4';
               colorSection.innerHTML = `
                  <hr class="m-0">
                  <div class="m-4">
                     <label class="form-label d-block mb-2">Warna Utama (Primary)</label>
                     <div class="d-flex align-items-center gap-2">
                        <input type="color" class="form-control form-control-color" id="customizer-theme-color" value="{{ $configData['themeColor'] ?? '#666cff' }}" title="Pilih warna tema" style="width: 50px; height: 38px; padding: 0.2rem;">
                        <span class="text-muted small fw-medium" id="customizer-theme-color-text">{{ $configData['themeColor'] ?? '#666cff' }}</span>
                     </div>
                     <div class="mt-2 small text-muted">Hanya untuk preview. Simpan di <a href="{{ route('settings.index') }}">Pengaturan</a> untuk permanen.</div>
                  </div>
               `;
               themesSection.parentNode.insertBefore(colorSection, themesSection.nextSibling);

               const colorInput = document.getElementById('customizer-theme-color');
               const colorText = document.getElementById('customizer-theme-color-text');

               colorInput.addEventListener('input', function(e) {
                  const color = e.target.value;
                  colorText.textContent = color;
                  updateDynamicTheme(color);
                  // Save to cookie for preview
                  document.cookie = "themeColor=" + color + "; path=/; max-age=" + (60 * 60 * 24 *
                     365);
               });
            }
         }
      }, 500);

      function updateDynamicTheme(color) {
         const styleTag = document.getElementById('dynamic-theme-style');
         if (styleTag) {
            const rgb = hexToRgb(color);
            const rgbStr = `${rgb.r}, ${rgb.g}, ${rgb.b}`;

            styleTag.innerHTML = `
               :root {
                  --bs-primary: ${color};
                  --bs-primary-rgb: ${rgbStr};
                  --bs-primary-bg-subtle: rgba(${rgbStr}, 0.08);
                  --bs-primary-border-subtle: rgba(${rgbStr}, 0.2);
                  --bs-primary-text-emphasis: ${color};
               }

               .btn-primary {
                  background-color: ${color} !important;
                  border-color: ${color} !important;
                  color: #fff !important;
               }

               .btn-outline-primary {
                  color: ${color} !important;
                  border-color: ${color} !important;
               }

               .btn-outline-primary:hover {
                  background-color: rgba(${rgbStr}, 0.08) !important;
               }

               .bg-primary {
                  background-color: ${color} !important;
               }

               .text-primary {
                  color: ${color} !important;
               }

               .bg-label-primary {
                  background-color: rgba(${rgbStr}, 0.12) !important;
                  color: ${color} !important;
               }

               .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
                  background-color: ${color} !important;
                  color: #fff !important;
               }

               .form-check-input:checked {
                  background-color: ${color} !important;
                  border-color: ${color} !important;
               }

               .layout-menu .menu-inner > .menu-item.active > .menu-link {
                  background-color: rgba(${rgbStr}, 0.08) !important;
                  color: ${color} !important;
               }

               .layout-menu .menu-inner > .menu-item.active > .menu-link::before {
                  background-color: ${color} !important;
               }
               
               .layout-menu .menu-item.active > .menu-link:not(.menu-toggle) {
                  background: linear-gradient(72.47deg, ${color} 22.16%, rgba(${rgbStr}, 0.7) 76.47%) !important;
                  color: #fff !important;
               }

               .app-brand .layout-menu-toggle i {
                  color: ${color} !important;
               }
               
               .pagination .page-item.active .page-link {
                  background-color: ${color} !important;
                  border-color: ${color} !important;
               }
            `;
         }
      }

      function hexToRgb(hex) {
         const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
         return result ? {
            r: parseInt(result[1], 16),
            g: parseInt(result[2], 16),
            b: parseInt(result[3], 16)
         } : null;
      }
   });
</script>

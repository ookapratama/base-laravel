<!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">

@vite(['resources/assets/vendor/fonts/remixicon/remixicon.scss', 'resources/assets/vendor/fonts/flag-icons.scss', 'resources/assets/vendor/libs/node-waves/node-waves.scss'])
<!-- Core CSS -->
@vite(['resources/assets/vendor/scss' . $configData['rtlSupport'] . '/core' . ($configData['style'] !== 'light' ? '-' . $configData['style'] : '') . '.scss', 'resources/assets/vendor/scss' . $configData['rtlSupport'] . '/' . $configData['theme'] . ($configData['style'] !== 'light' ? '-' . $configData['style'] : '') . '.scss', 'resources/assets/css/demo.css'])

@php
   $themeColor = $configData['themeColor'] ?? '#666cff';
   [$r, $g, $b] = sscanf($themeColor, '#%02x%02x%02x');
   $themeColorRgb = "$r, $g, $b";
@endphp
<style id="dynamic-theme-style">
   :root {
      --bs-primary: {{ $themeColor }};
      --bs-primary-rgb: {{ $themeColorRgb }};
      --bs-primary-bg-subtle: rgba({{ $themeColorRgb }}, 0.08);
      --bs-primary-border-subtle: rgba({{ $themeColorRgb }}, 0.2);
      --bs-primary-text-emphasis: {{ $themeColor }};
   }

   .btn-primary {
      background-color: {{ $themeColor }} !important;
      border-color: {{ $themeColor }} !important;
      color: #fff !important;
   }

   .btn-outline-primary {
      color: {{ $themeColor }} !important;
      border-color: {{ $themeColor }} !important;
   }

   .btn-outline-primary:hover {
      background-color: rgba({{ $themeColorRgb }}, 0.08) !important;
   }

   .bg-primary {
      background-color: {{ $themeColor }} !important;
   }

   .text-primary {
      color: {{ $themeColor }} !important;
   }

   .bg-label-primary {
      background-color: rgba({{ $themeColorRgb }}, 0.12) !important;
      color: {{ $themeColor }} !important;
   }

   .nav-pills .nav-link.active,
   .nav-pills .show>.nav-link {
      background-color: {{ $themeColor }} !important;
      color: #fff !important;
   }

   .form-check-input:checked {
      background-color: {{ $themeColor }} !important;
      border-color: {{ $themeColor }} !important;
   }

   .layout-menu .menu-inner>.menu-item.active>.menu-link {
      background-color: rgba({{ $themeColorRgb }}, 0.08) !important;
      color: {{ $themeColor }} !important;
   }

   .layout-menu .menu-inner>.menu-item.active>.menu-link::before {
      background-color: {{ $themeColor }} !important;
   }

   .layout-menu .menu-item.active>.menu-link:not(.menu-toggle) {
      background: linear-gradient(72.47deg, {{ $themeColor }} 22.16%, rgba({{ $themeColorRgb }}, 0.7) 76.47%) !important;
      color: #fff !important;
   }

   .app-brand .layout-menu-toggle i {
      color: {{ $themeColor }} !important;
   }

   .pagination .page-item.active .page-link {
      background-color: {{ $themeColor }} !important;
      border-color: {{ $themeColor }} !important;
   }
</style>


<!-- Vendor Styles -->
@vite(['resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.scss', 'resources/assets/vendor/libs/typeahead-js/typeahead.scss'])
@yield('vendor-style')

<!-- Page Styles -->
@yield('page-style')

@php
   $themeColor = $configData['themeColor'] ?? '#666cff';
   [$r, $g, $b] = sscanf($themeColor, '#%02x%02x%02x');
   $themeColorRgb = "$r, $g, $b";

   // Warna hover (10% lebih gelap)
   $darkerR = max(0, floor($r * 0.9));
   $darkerG = max(0, floor($g * 0.9));
   $darkerB = max(0, floor($b * 0.9));
   $themeColorDarker = sprintf('#%02x%02x%02x', $darkerR, $darkerG, $darkerB);
@endphp

<!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">

@vite(['resources/assets/vendor/fonts/remixicon/remixicon.scss', 'resources/assets/vendor/fonts/flag-icons.scss', 'resources/assets/vendor/libs/node-waves/node-waves.scss'])
<!-- Core CSS -->
@vite(['resources/assets/vendor/scss' . $configData['rtlSupport'] . '/core' . ($configData['style'] !== 'light' ? '-' . $configData['style'] : '') . '.scss', 'resources/assets/vendor/scss' . $configData['rtlSupport'] . '/' . $configData['theme'] . ($configData['style'] !== 'light' ? '-' . $configData['style'] : '') . '.scss', 'resources/assets/css/demo.css'])


<!-- Vendor Styles -->
@vite(['resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.scss', 'resources/assets/vendor/libs/typeahead-js/typeahead.scss'])
@yield('vendor-style')

<!-- Page Styles -->
@yield('page-style')

<style id="dynamic-theme-style">
   :root {
      --bs-primary: {{ $themeColor }};
      --bs-primary-rgb: {{ $themeColorRgb }};
      --bs-primary-border-color: {{ $themeColor }};
      --bs-primary-hover: {{ $themeColorDarker }};
      --primary-color: {{ $themeColor }};
      --bs-primary-bg-subtle: rgba({{ $themeColorRgb }}, 0.08);
      --bs-primary-border-subtle: rgba({{ $themeColorRgb }}, 0.2);
   }

   /* 1. Warna Edit Button (Btn-Primary) & Hover */
   .btn-primary {
      background-color: {{ $themeColor }} !important;
      border-color: {{ $themeColor }} !important;
      color: #fff !important;
   }

   .btn-primary:hover,
   .btn-primary:focus,
   .btn-primary:active {
      background-color: {{ $themeColorDarker }} !important;
      border-color: {{ $themeColorDarker }} !important;
      color: #fff !important;
   }

   /* 2. Field Form Input On-Focus (Border & Shadow) */
   .form-control:focus,
   .form-select:focus,
   .input-group:focus-within .input-group-text,
   .input-group:focus-within .form-control {
      border-color: {{ $themeColor }} !important;
      box-shadow: 0 0 0.25rem 0.05rem rgba({{ $themeColorRgb }}, 0.1) !important;
   }

   /* Menangani label melayang agar warnanya senada saat aktif */
   .form-floating>.form-control:focus~label,
   .form-floating>.form-control:not(:placeholder-shown)~label {
      color: {{ $themeColor }} !important;
   }

   /* Sidebar Active State */
   .layout-menu .menu-item.active>.menu-link:not(.menu-toggle) {
      background: linear-gradient(72.47deg, {{ $themeColor }} 22.16%, rgba({{ $themeColorRgb }}, 0.7) 76.47%) !important;
   }

   .layout-menu .menu-inner>.menu-item.active>.menu-link {
      background-color: rgba({{ $themeColorRgb }}, 0.08) !important;
      color: {{ $themeColor }} !important;
   }
</style>

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
</script>

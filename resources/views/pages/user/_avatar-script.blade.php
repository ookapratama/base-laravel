{{-- Live preview for the avatar upload field (used in create & edit). --}}
<script>
   document.addEventListener('DOMContentLoaded', function() {
      (function() {
         let accountUserImage = document.getElementById('uploadedAvatar');
         const fileInput = document.querySelector('.account-file-input');
         if (accountUserImage && fileInput) {
            fileInput.onchange = () => {
               if (fileInput.files[0]) {
                  accountUserImage.src = window.URL.createObjectURL(fileInput.files[0]);
               }
            };
         }
      })();
   });
</script>

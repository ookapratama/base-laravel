{{-- Shared avatar upload + live preview. Expects optional $user for the current image. --}}
<div class="d-flex align-items-start align-items-sm-center gap-4 mb-4">
   <img src="{{ isset($user) && $user->avatar ? asset('storage/' . $user->avatar) : asset('assets/img/avatars/1.png') }}"
      alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
   <div class="button-wrapper">
      <label for="upload" class="btn btn-primary me-2 mb-2" tabindex="0">
         <span class="d-none d-sm-block">Upload foto</span>
         <i class="ri-upload-2-line d-block d-sm-none"></i>
         <input type="file" id="upload" name="avatar" class="account-file-input" hidden
            accept="image/png, image/jpeg" />
      </label>
      <p class="text-muted mb-0 small">JPG, GIF atau PNG. Maks 2MB</p>
      @error('avatar')
         <div class="text-danger small mt-1">{{ $message }}</div>
      @enderror
   </div>
</div>

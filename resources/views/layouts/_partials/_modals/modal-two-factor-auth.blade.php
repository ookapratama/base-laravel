<!-- Two Factor Auth Modal -->

<div class="modal fade" id="twoFactorAuth" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-0">
        <div class="text-center mb-6">
          <h4 class="mb-2">Select Authentication Method</h4>
          <p>You also need to select a method by which the proxy authenticates to the directory serve.</p>
        </div>
        <div class="row pt-1">
          <div class="col-12 mb-6">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content" for="customRadioTemp1" data-bs-target="#twoFactorAuthOne" data-bs-toggle="modal">
                <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="customRadioTemp1" checked />
                <span class="custom-option-header">
                  <span class="h6 mb-0 d-flex align-items-center"><i class="ri-settings-3-line ri-20px me-1"></i>Authenticator Apps</span>
                </span>
                <span class="custom-option-body">
                  <small>Get code from an app like Google Authenticator or Microsoft Authenticator.</small>
                </span>
              </label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content" for="customRadioTemp2" data-bs-target="#twoFactorAuthTwo" data-bs-toggle="modal">
                <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="customRadioTemp2" />
                <span class="custom-option-header">
                  <span class="h6 mb-0 d-flex align-items-center"><i class="ri-wechat-line ri-20px me-1"></i>SMS</span>
                </span>
                <span class="custom-option-body">
                  <small>We will send a code via SMS if you need to use your backup login method.</small>
                </span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Authentication App -->
<div class="modal fade" id="twoFactorAuthOne" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-0">
        <div class="text-center mb-6">
          <h4 class="mb-0">Add Authenticator App</h4>
        </div>
        <h5 class="mb-2 text-break">Authenticator Apps</h5>
        <p class="mb-6">Using an authenticator app like Google Authenticator, Microsoft Authenticator, Authy, or 1Password, scan the QR code. It will generate a 6-digit code for you to enter below.</p>
        <div class="text-center mb-6">
          <img src="{{asset('assets/img/icons/misc/authentication-QR.png')}}" alt="QR Code" width="150">
        </div>
        <div class="alert alert-warning alert-dismissible mb-4" role="alert">
          <h5 class="alert-heading mb-1 text-break">ASDLKNASDA9AHS678dGhASD78AB</h5>
          <p class="mb-0">If you're having trouble using the QR code, select manual entry on your app</p>
        </div>
        <div class="form-floating form-floating-outline mb-6">
          <input type="email" class="form-control" id="twoFactorAuthInput" placeholder="Enter Authentication Code">
          <label for="twoFactorAuthInput">Enter Authentication Code</label>
        </div>
        <div class="col-12 d-flex flex-wrap justify-content-start justify-content-sm-end gap-4 row-gap-4">
          <button type="button" class="btn btn-outline-secondary me-3" data-bs-toggle="modal" data-bs-target="#twoFactorAuth"><span class="align-middle">cancel</span></button>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close"><span class="align-middle">submit</span><i class="ri-check-line ms-1"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Authentication via SMS -->
<div class="modal fade" id="twoFactorAuthTwo" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-0">
        <h5 class="mb-2">Verify Your Mobile Number for SMS</h5>
        <p class="mb-6 text-truncate">Enter your mobile phone number with country code, and we will send you a verification code.</p>
        <div class="form-floating form-floating-outline mb-6">
          <input type="text" class="form-control" id="twoFactorAuthInputSms" placeholder="Phone Number">
          <label for="twoFactorAuthInputSms">Phone Number</label>
        </div>
        <div class="col-12 d-flex flex-wrap justify-content-start justify-content-sm-end gap-4 row-gap-4">
          <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#twoFactorAuth"><span class="align-middle">cancel</span></button>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close"><span class="align-middle">submit</span><i class="ri-check-line ms-1"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Two Factor Auth Modal -->
<script type="module">
  // Check selected custom option
  setTimeout(() => {
    window.Helpers.initCustomOptionCheck();
  }, 200);

</script>

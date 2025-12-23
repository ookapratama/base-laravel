<!-- Enable OTP Modal -->
<div class="modal fade" id="enableOTP" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-0">
        <div class="text-center mb-6">
          <h4 class="mb-2">Enable One Time Password</h4>
          <p>Verify Your Mobile Number for SMS</p>
        </div>
        <p class="mb-5">Enter your mobile phone number with country code and we will send you a verification code.</p>
        <form id="enableOTPForm" class="row g-5" onsubmit="return false">
          <div class="col-12">
            <div class="input-group input-group-merge">
              <span class="input-group-text">US (+1)</span>
              <div class="form-floating form-floating-outline">
                <input type="text" id="modalEnableOTPPhone" name="modalEnableOTPPhone" class="form-control phone-number-otp-mask" placeholder="202 555 0111" />
                <label for="modalEnableOTPPhone">Phone Number</label>
              </div>
            </div>
          </div>
          <div class="col-12 d-flex flex-wrap justify-content-center gap-4 row-gap-4">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Enable OTP Modal -->

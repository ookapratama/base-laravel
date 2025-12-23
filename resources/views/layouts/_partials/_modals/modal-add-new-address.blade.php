<!-- Add New Address Modal -->
<div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-0">
        <div class="text-center mb-6">
          <h4 class="address-title mb-2">Add New Address</h4>
          <p class="address-subtitle">Add new address for express delivery</p>
        </div>
        <form id="addNewAddressForm" class="row g-5" onsubmit="return false">

          <div class="col-12">
            <div class="row g-5">
              <div class="col-md mb-md-0">
                <div class="form-check custom-option custom-option-basic">
                  <label class="form-check-label custom-option-content" for="customRadioHome">
                    <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="customRadioHome" checked />
                    <span class="custom-option-header">
                      <span class="h6 mb-0 d-flex align-items-center"><i class="ri-home-smile-2-line ri-20px me-1"></i>Home</span>
                    </span>
                    <span class="custom-option-body">
                      <small>Delivery time (9am – 9pm)</small>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-0">
                <div class="form-check custom-option custom-option-basic">
                  <label class="form-check-label custom-option-content" for="customRadioOffice">
                    <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="customRadioOffice" />
                    <span class="custom-option-header">
                      <span class="h6 mb-0 d-flex align-items-center"><i class="ri-building-line ri-20px me-1"></i>Office</span>
                    </span>
                    <span class="custom-option-body">
                      <small>Delivery time (9am – 5pm) </small>
                    </span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control" placeholder="John" />
              <label for="modalAddressFirstName">First Name</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressLastName" name="modalAddressLastName" class="form-control" placeholder="Doe" />
              <label for="modalAddressLastName">Last Name</label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-floating form-floating-outline">
              <select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select" data-allow-clear="true">
                <option value="">Select</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Belarus">Belarus</option>
                <option value="Brazil">Brazil</option>
                <option value="Canada">Canada</option>
                <option value="China">China</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Japan">Japan</option>
                <option value="Korea">Korea, Republic of</option>
                <option value="Mexico">Mexico</option>
                <option value="Philippines">Philippines</option>
                <option value="Russia">Russian Federation</option>
                <option value="South Africa">South Africa</option>
                <option value="Thailand">Thailand</option>
                <option value="Turkey">Turkey</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
              </select>
              <label for="modalAddressCountry">Country</label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control" placeholder="12, Business Park" />
              <label for="modalAddressAddress1">Address Line 1</label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control" placeholder="Mall Road" />
              <label for="modalAddressAddress2">Address Line 2</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressLandmark" name="modalAddressLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe" />
              <label for="modalAddressLandmark">Landmark</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressCity" name="modalAddressCity" class="form-control" placeholder="Los Angeles" />
              <label for="modalAddressCity">City</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressState" name="modalAddressState" class="form-control" placeholder="California" />
              <label for="modalAddressLandmark">State</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressZipCode" name="modalAddressZipCode" class="form-control" placeholder="99950" />
              <label for="modalAddressZipCode">Zip Code</label>
            </div>
          </div>
          <div class="col-12 mt-6">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="billingAddress" />
              <label for="billingAddress">Use as a billing address?</label>
            </div>
          </div>
          <div class="col-12 mt-6 d-flex flex-wrap justify-content-center gap-4 row-gap-4">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Address Modal -->

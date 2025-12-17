<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-0">
        <div class="text-center mb-6">
          <h4 class="mb-2">Edit User Information</h4>
          <p class="mb-6">Updating user details will receive a privacy audit.</p>
        </div>
        <form id="editUserForm" class="row g-5" onsubmit="return false">
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" value="Oliver" placeholder="Oliver" />
              <label for="modalEditUserFirstName">First Name</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" value="Queen" placeholder="Queen" />
              <label for="modalEditUserLastName">Last Name</label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" value="oliver.queen" placeholder="oliver.queen" />
              <label for="modalEditUserName">Username</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" value="oliverqueen@gmail.com" placeholder="oliverqueen@gmail.com" />
              <label for="modalEditUserEmail">Email</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
                <option value="1" selected>Active</option>
                <option value="2">Inactive</option>
                <option value="3">Suspended</option>
              </select>
              <label for="modalEditUserStatus">Status</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
              <label for="modalEditTaxID">Tax ID</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="input-group input-group-merge">
              <span class="input-group-text">US (+1)</span>
              <div class="form-floating form-floating-outline">
                <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" value="+1 609 933 4422" placeholder="+1 609 933 4422" />
                <label for="modalEditUserPhone">Phone Number</label>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input id="TagifyLanguageSuggestion" name="TagifyLanguageSuggestion" class="form-control h-auto" placeholder="select language" value="English">
              <label for="TagifyLanguageSuggestion">Language</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">
                <option value="">Select</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Belarus">Belarus</option>
                <option value="Brazil">Brazil</option>
                <option value="Canada">Canada</option>
                <option value="China">China</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="India" selected>India</option>
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
              <label for="modalEditUserCountry">Country</label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="editBillingAddress" />
              <label for="editBillingAddress" class="text-heading">Use as a billing address?</label>
            </div>
          </div>
          <div class="col-12 text-center d-flex flex-wrap justify-content-center gap-4 row-gap-4">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->

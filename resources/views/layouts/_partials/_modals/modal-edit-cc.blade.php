<!-- Add New Credit Card Modal -->
<div class="modal fade" id="editCCModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-simple modal-add-new-cc">
    <div class="modal-content p-4 p-md-12">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-md-0">
        <div class="text-center mb-6">
          <h3 class="mb-2 pb-1">Edit Card</h3>
          <p>Edit your saved card details</p>
        </div>
        <form id="editCCForm" class="row g-4" onsubmit="return false">
          <div class="col-12">
            <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                <input id="modalEditCard" name="modalEditCard" class="form-control credit-card-mask-edit" type="text" placeholder="4356 3215 6548 7898" value="4356 3215 6548 7898" aria-describedby="modalEditCard2" />
                <label for="modalEditCard">Card Number</label>
              </div>
              <span class="input-group-text cursor-pointer" id="modalEditCard2"><span class="card-type-edit"></span></span>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditName" class="form-control" placeholder="John Doe" value="John Doe" />
              <label for="modalEditName">Name</label>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditExpiryDate" class="form-control expiry-date-mask-edit" placeholder="MM/YY" value="08/28" />
              <label for="modalEditExpiryDate">Exp. Date</label>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                <input type="text" id="modalEditCvv" class="form-control cvv-code-mask-edit" maxlength="3" placeholder="654" value="XXX" />
                <label for="modalEditCvv">CVV Code</label>
              </div>
              <span class="input-group-text cursor-pointer" id="modalEditCvv2"><i class="ri-question-line text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
            </div>
          </div>
          <div class="col-12">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="editPrimaryCard" />
              <label for="editPrimaryCard">Set as primary card</label>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-4 me-1">Submit</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->

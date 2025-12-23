<!-- Add New Credit Card Modal -->
<div class="modal fade" id="addNewCCModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-0">
        <div class="text-center mb-6">
          <h4 class="mb-2">Add New Card</h4>
          <p>Add new card to complete payment</p>
        </div>
        <form id="addNewCCForm" class="row g-5" onsubmit="return false">
          <div class="col-12">
            <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                <input id="modalAddCard" name="modalAddCard" class="form-control credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAddCard2" />
                <label for="modalAddCard">Card Number</label>
              </div>
              <span class="input-group-text cursor-pointer p-1" id="modalAddCard2"><span class="card-type"></span></span>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddCardName" class="form-control" placeholder="John Doe" />
              <label for="modalAddCardName">Name</label>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddCardExpiryDate" class="form-control expiry-date-mask" placeholder="MM/YY" />
              <label for="modalAddCardExpiryDate">Expiry</label>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                <input type="text" id="modalAddCardCvv" class="form-control cvv-code-mask" maxlength="3" placeholder="654" />
                <label for="modalAddCardCvv" class="pe-1_5">CVV</label>
              </div>
              <span class="input-group-text cursor-pointer ps-0" id="modalAddCardCvv2"><i class="ri-question-line" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
            </div>
          </div>
          <div class="col-12">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="futureAddress" />
              <label for="futureAddress" class="text-heading">Save card for future billing?</label>
            </div>
          </div>
          <div class="col-12 d-flex flex-wrap justify-content-center gap-4 row-gap-4">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-outline-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->

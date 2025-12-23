<!-- Upgrade Plan -->
<div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
    <div class="modal-content p-8 p-md-12">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body pt-md-0 px-0">
        <div class="text-center mb-6">
          <h4 class="mb-2">Upgrade Plan</h4>
          <p class="mb-10">Choose the best plan for user.</p>
        </div>
        <form id="upgradePlanForm" class="row g-4 d-flex align-items-center" onsubmit="return false">
          <div class="col-sm-9">
            <select id="choosePlan" name="choosePlan" class="form-select form-select-sm" aria-label="Choose Plan">
              <option selected>Choose Plan</option>
              <option value="standard">Standard - $99/month</option>
              <option value="exclusive">Exclusive - $249/month</option>
              <option value="Enterprise">Enterprise - $499/month</option>
            </select>
          </div>
          <div class="col-sm-3 d-flex align-items-end">
            <button type="submit" class="btn btn-primary">Upgrade</button>
          </div>
        </form>
      </div>
      <hr class="my-1">
      <div class="modal-body pb-md-0 px-0">
        <p class="mb-1">User current plan is standard plan</p>
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <div class="d-flex justify-content-center me-2 mt-4">
            <sup class="h5 pricing-currency mt-5 mb-0 me-1 text-primary">$</sup>
            <h1 class="mb-0 text-primary">99</h1>
            <sub class="h5 pricing-duration mt-auto mb-3 small fw-normal">/month</sub>
          </div>
          <button class="btn btn-outline-danger cancel-subscription mt-4">Cancel Subscription</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Upgrade Plan -->

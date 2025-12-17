@php
$configData = Helper::appClasses();
@endphp
<!-- Create App Modal -->
<div class="modal fade" id="createApp" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-simple modal-upgrade-plan">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-0">
        <div class="text-center">
          <h4 class="mb-2">Create App</h4>
          <p class="mb-6">Provide data with this form to create your app.</p>
        </div>
        <!-- Property Listing Wizard -->
        <div id="wizard-create-app" class="bs-stepper vertical wizard-vertical-icons mt-2 shadow-none">
          <div class="bs-stepper-header border-0 p-1">
            <div class="step" data-target="#details">
              <button type="button" class="step-trigger">
                <span class="avatar">
                  <span class="avatar-initial rounded-3">
                    <i class="ri-file-text-line ri-24px"></i>
                  </span>
                </span>
                <span class="bs-stepper-label flex-column align-items-start gap-1 ms-4">
                  <span class="bs-stepper-title text-uppercase">Details</span>
                  <small class="bs-stepper-subtitle">Enter Details</small>
                </span>
              </button>
            </div>
            <div class="step" data-target="#frameworks">
              <button type="button" class="step-trigger">
                <span class="avatar">
                  <span class="avatar-initial rounded-3">
                    <i class="ri-star-smile-line ri-24px"></i>
                  </span>
                </span>
                <span class="bs-stepper-label flex-column align-items-start gap-1 ms-4">
                  <span class="bs-stepper-title text-uppercase">Frameworks</span>
                  <small class="bs-stepper-subtitle">Select Framework</small>
                </span>
              </button>
            </div>
            <div class="step" data-target="#database">
              <button type="button" class="step-trigger">
                <span class="avatar">
                  <span class="avatar-initial rounded-3">
                    <i class="ri-pie-chart-2-line ri-24px"></i>
                  </span>
                </span>
                <span class="bs-stepper-label flex-column align-items-start gap-1 ms-4">
                  <span class="bs-stepper-title text-uppercase">Database</span>
                  <small class="bs-stepper-subtitle">Select Database</small>
                </span>
              </button>
            </div>
            <div class="step" data-target="#billing">
              <button type="button" class="step-trigger">
                <span class="avatar">
                  <span class="avatar-initial rounded-3">
                    <i class="ri-bank-card-line ri-24px"></i>
                  </span>
                </span>
                <span class="bs-stepper-label flex-column align-items-start gap-1 ms-4">
                  <span class="bs-stepper-title text-uppercase">Billing</span>
                  <small class="bs-stepper-subtitle">Payment Details</small>
                </span>
              </button>
            </div>
            <div class="step" data-target="#submit">
              <button type="button" class="step-trigger">
                <span class="avatar">
                  <span class="avatar-initial rounded-3">
                    <i class="ri-check-double-line ri-24px"></i>
                  </span>
                </span>
                <span class="bs-stepper-label flex-column align-items-start gap-1 ms-4">
                  <span class="bs-stepper-title text-uppercase">Submit</span>
                  <small class="bs-stepper-subtitle">Submit</small>
                </span>
              </button>
            </div>
          </div>
          <div class="bs-stepper-content p-1">
            <form onSubmit="return false">
              <!-- Details -->
              <div id="details" class="content pt-4 pt-lg-0">
                <div class="form-floating form-floating-outline mb-6">
                  <input type="text" class="form-control form-control-lg" id="modalAppName" placeholder="Application Name">
                  <label for="modalAppName">Application Name</label>
                </div>
                <h5>Category</h5>
                <ul class="p-0 m-0">
                  <li class="d-flex align-items-center mb-4">
                    <div class="avatar avatar-md bg-label-info d-flex align-items-center justify-content-center flex-shrink-0 me-4 rounded-3"><i class="ri-bar-chart-box-line ri-30px"></i></div>
                    <div class="d-flex justify-content-between w-100">
                      <div class="me-2">
                        <h6 class="mb-0">CRM Application</h6>
                        <small>Scales with any business</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline me-0">
                          <input name="details-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-center mb-4">
                    <div class="avatar avatar-md bg-label-success d-flex align-items-center justify-content-center flex-shrink-0 me-4 rounded-3"><i class="ri-shopping-cart-line ri-30px"></i></div>
                    <div class="d-flex justify-content-between w-100">
                      <div class="me-2">
                        <h6 class="mb-0">eCommerce Platforms</h6>
                        <small>Grow Your Business With App</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline me-0">
                          <input name="details-radio" class="form-check-input" type="radio" value="" checked />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-center">
                    <div class="avatar avatar-md bg-label-danger d-flex align-items-center justify-content-center flex-shrink-0 me-4 rounded-3"><i class="ri-video-upload-line ri-30px"></i></div>
                    <div class="d-flex justify-content-between w-100">
                      <div class="me-2">
                        <h6 class="mb-0">Online Learning platform</h6>
                        <small>Start learning today</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline me-0">
                          <input name="details-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="col-12 d-flex justify-content-between mt-6">
                  <button class="btn btn-outline-secondary btn-prev" disabled> <i class="ri-arrow-left-line ri-16px"></i>
                    <span class="align-middle d-sm-block d-none ms-2">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-block d-none me-2">Next</span> <i class="ri-arrow-right-line ri-16px"></i></button>
                </div>
              </div>

              <!-- Frameworks -->
              <div id="frameworks" class="content pt-4 pt-lg-0">
                <h5>Select Framework</h5>
                <ul class="p-0 m-0">
                  <li class="d-flex align-items-center mb-4">
                    <div class="avatar avatar-md bg-label-info d-flex align-items-center justify-content-center flex-shrink-0 me-4 rounded-3"><i class="ri-reactjs-line ri-30px"></i></div>
                    <div class="d-flex justify-content-between w-100">
                      <div class="me-2">
                        <h6 class="mb-0">React Native</h6>
                        <small>Create truly native apps</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline me-0">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-center mb-4">
                    <div class="avatar avatar-md bg-label-danger d-flex align-items-center justify-content-center flex-shrink-0 me-4 rounded-3"><i class="ri-angularjs-fill ri-30px"></i></div>
                    <div class="d-flex justify-content-between w-100">
                      <div class="me-2">
                        <h6 class="mb-0">Angular</h6>
                        <small>Most suited for your application</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline me-0">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" checked="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-center mb-4">
                    <div class="avatar avatar-md bg-label-warning d-flex align-items-center justify-content-center flex-shrink-0 me-4 rounded-3"><i class="ri-html5-line ri-30px"></i></div>
                    <div class="d-flex justify-content-between w-100">
                      <div class="me-2">
                        <h6 class="mb-0">HTML</h6>
                        <small>Progressive Framework</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline me-0">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" checked />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start">
                    <div class="avatar avatar-md bg-label-success d-flex align-items-center justify-content-center flex-shrink-0 me-4 rounded-3"><i class="ri-vuejs-fill ri-30px"></i></div>
                    <div class="d-flex justify-content-between w-100">
                      <div class="me-2">
                        <h6 class="mb-0">VueJs</h6>
                        <small>JS web frameworks</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline me-0">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>

                <div class="col-12 d-flex justify-content-between mt-6">
                  <button class="btn btn-outline-secondary btn-prev"> <i class="ri-arrow-left-line ri-16px"></i> <span class="align-middle d-sm-block d-none ms-2">Previous</span> </button>
                  <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-block d-none me-2">Next</span> <i class="ri-arrow-right-line ri-16px"></i></button>
                </div>
              </div>

              <!-- Database -->
              <div id="database" class="content pt-4 pt-lg-0">
                <div class="form-floating form-floating-outline mb-6">
                  <input type="text" class="form-control form-control-lg" id="modalAppDatabaseName" placeholder="Database Name">
                  <label for="modalAppDatabaseName">Database Name</label>
                </div>
                <h5>Select Database Engine</h5>
                <ul class="p-0 m-0">
                  <li class="d-flex align-items-center mb-4">
                    <div class="avatar avatar-md d-flex align-items-center justify-content-center flex-shrink-0 bg-label-danger me-4 rounded-3"><i class="ri-fire-fill ri-30px"></i></div>
                    <div class="d-flex justify-content-between w-100">
                      <div class="me-2">
                        <h6 class="mb-0">Firebase</h6>
                        <small>Cloud Firestone</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline me-0">
                          <input name="database-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-center mb-4">
                    <div class="avatar avatar-md d-flex align-items-center justify-content-center flex-shrink-0 bg-label-warning me-4 rounded-3"><i class="ri-amazon-line ri-30px"></i></div>
                    <div class="d-flex justify-content-between w-100">
                      <div class="me-2">
                        <h6 class="mb-0">AWS</h6>
                        <small>Amazon Fast NoSQL Database</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline me-0">
                          <input name="database-radio" class="form-check-input" type="radio" value="" checked />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start">
                    <div class="avatar avatar-md d-flex align-items-center justify-content-center flex-shrink-0 bg-label-info me-4 rounded-3"><i class="ri-database-2-fill ri-30px"></i></div>
                    <div class="d-flex justify-content-between w-100">
                      <div class="me-2">
                        <h6 class="mb-0">MySQL</h6>
                        <small>Basic MySQL database</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline me-0">
                          <input name="database-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="col-12 d-flex justify-content-between mt-6">
                  <button class="btn btn-outline-secondary btn-prev"> <i class="ri-arrow-left-line ri-16px"></i> <span class="align-middle d-sm-block d-none ms-2">Previous</span> </button>
                  <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-block d-none me-2">Next</span> <i class="ri-arrow-right-line ri-16px"></i></button>
                </div>
              </div>

              <!-- billing -->
              <div id="billing" class="content">
                <div id="AppNewCCForm" class="row g-5 pt-4 pt-lg-6 mb-6" onsubmit="return false">
                  <div class="col-12">
                    <div class="input-group input-group-merge">
                      <div class="form-floating form-floating-outline">
                        <input class="form-control app-credit-card-mask" id="modalAppAddCardNumber" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAppAddCard" />
                        <label for="modalAppAddCardNumber">Card Number</label>
                      </div>
                      <span class="input-group-text cursor-pointer p-1" id="modalAppAddCard"><span class="app-card-type"></span></span>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="form-floating form-floating-outline">
                      <input type="text" class="form-control" id="modalAppAddCardName" placeholder="John Doe" />
                      <label for="modalAppAddCardName">Name on Card</label>
                    </div>
                  </div>
                  <div class="col-6 col-lg-3">
                    <div class="form-floating form-floating-outline">
                      <input type="text" class="form-control app-expiry-date-mask" id="modalAppAddCardDate" placeholder="MM/YY" />
                      <label for="modalAppAddCardDate">Expiry</label>
                    </div>
                  </div>
                  <div class="col-6 col-lg-3">
                    <div class="input-group input-group-merge">
                      <div class="form-floating form-floating-outline">
                        <input type="text" id="modalAppAddCardCvv" class="form-control app-cvv-code-mask" maxlength="3" placeholder="654" />
                        <label for="modalAppAddCardCvv" class="pe-1_5">CVV</label>
                      </div>
                      <span class="input-group-text cursor-pointer ps-0" id="modalAppAddCardCvv2"><i class="ri-question-line" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check form-switch">
                      <input type="checkbox" class="form-check-input" id="appFutureAddress" checked />
                      <label for="appFutureAddress" class="text-heading">Save card for future billing?</label>
                    </div>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-between mt-6">
                  <button class="btn btn-outline-secondary btn-prev"> <i class="ri-arrow-left-line ri-16px"></i> <span class="align-middle d-sm-block d-none ms-2">Previous</span> </button>
                  <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-block d-none me-2">Next</span> <i class="ri-arrow-right-line ri-16px"></i></button>
                </div>
              </div>

              <!-- submit -->
              <div id="submit" class="content text-center pt-4 pt-lg-0">
                <h5 class="mb-1 mt-4">Submit</h5>
                <p class="small">Submit to kick start your project.</p>
                <!-- image -->
                <img src="{{ asset('assets/img/illustrations/create-app-modal-illustration-'.$configData['style'].'.png')}}" alt="Create App img" width="265" class="img-fluid" data-app-light-img="illustrations/create-app-modal-illustration-light.png" data-app-dark-img="illustrations/create-app-modal-illustration-dark.png">
                <div class="col-12 d-flex justify-content-between mt-4 pt-2">
                  <button class="btn btn-outline-secondary btn-prev"> <i class="ri-arrow-left-line ri-16px"></i> <span class="align-middle d-none d-sm-block ms-2">Previous</span> </button>
                  <button class="btn btn-success btn-submit"><span class="align-middle d-none d-sm-block me-2">Submit</span><i class="ri-check-line"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--/ Property Listing Wizard -->
    </div>
  </div>
</div>
<!--/ Create App Modal -->

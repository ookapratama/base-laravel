@extends('layouts/layoutMaster')

@section('title', 'Add - Invoice')

@section('vendor-style')
@vite('resources/assets/vendor/libs/flatpickr/flatpickr.scss')
@endsection

@section('page-style')
@vite('resources/assets/vendor/scss/pages/app-invoice.scss')
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/flatpickr/flatpickr.js',
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/cleavejs/cleave-phone.js',
  'resources/assets/vendor/libs/jquery-repeater/jquery-repeater.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/offcanvas-send-invoice.js',
  'resources/assets/js/app-invoice-add.js'
])
@endsection

@section('content')
<div class="row invoice-add">
  <!-- Invoice Add-->
  <div class="col-lg-9 col-12 mb-lg-0 mb-6">
    <div class="card invoice-preview-card p-sm-12 p-6">
      <div class="card-body invoice-preview-header rounded-4 text-heading p-6 px-3">
        <div class="row mx-0 px-3 row-gap-6">
          <div class="col-md-8 ps-0">
            <div class="d-flex svg-illustration align-items-center gap-2 mb-6">
              <span class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'var(--bs-primary)'])</span>
              <span class="mb-0 app-brand-text demo fw-semibold">{{ config('variables.templateName') }}</span>
            </div>
            <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
            <p class="mb-1">San Diego County, CA 91905, USA</p>
            <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
          </div>
          <div class="col-md-4 col-8 pe-0 ps-0 ps-md-2">
            <dl class="row mb-0 gx-4">
              <dt class="col-sm-5 mb-2 d-md-flex align-items-center justify-content-start">
                <span class="h5 text-capitalize mb-0 text-nowrap">Invoice</span>
              </dt>
              <dd class="col-sm-7">
                <div class="input-group input-group-merge input-group-sm">
                  <span class="input-group-text">#</span>
                  <input type="text" class="form-control" placeholder="45678" id="invoiceId" />
                </div>
              </dd>
              <dt class="col-sm-5 mb-2 d-md-flex align-items-center justify-content-start">
                <span class="fw-normal">Date Issued:</span>
              </dt>
              <dd class="col-sm-7">
                <input type="text" class="form-control form-control-sm invoice-date" placeholder="12/13/2013" />
              </dd>
              <dt class="col-sm-5 d-md-flex align-items-center justify-content-start">
                <span class="fw-normal text-nowrap">Due Date:</span>
              </dt>
              <dd class="col-sm-7 mb-0">
                <input type="text" class="form-control form-control-sm due-date" placeholder="4/23/2023" />
              </dd>
            </dl>
          </div>
        </div>
      </div>

      <div class="card-body py-6 px-0">

        <div class="row">
          <div class="col-md-6 col-sm-5 col-12 mb-sm-0 mb-6">
            <h6>Invoice To:</h6>
            <select class="form-select mb-4 w-50">
              <option value="Thomas shelby">Thomas shelby</option>
              <option value="Wesley Burland">Wesley Burland</option>
              <option value="Vladamir Koschek">Vladamir Koschek</option>
              <option value="Tyne Widmore">Tyne Widmore</option>
            </select>
            <p class="mb-1">Shelby Company Limited</p>
            <p class="mb-1">Small Heath, B10 0HF, UK</p>
            <p class="mb-1">718-986-6062</p>
            <p class="mb-0">peakyFBlinders@gmail.com</p>
          </div>
          <div class="col-md-6 col-sm-7">
            <h6>Bill To:</h6>
            <table>
              <tbody>
                <tr>
                  <td class="pe-4">Total Due:</td>
                  <td>$12,110.55</td>
                </tr>
                <tr>
                  <td class="pe-4">Bank name:</td>
                  <td>American Bank</td>
                </tr>
                <tr>
                  <td class="pe-4">Country:</td>
                  <td>United States</td>
                </tr>
                <tr>
                  <td class="pe-4">IBAN:</td>
                  <td>ETD95476213874685</td>
                </tr>
                <tr>
                  <td class="pe-4">SWIFT code:</td>
                  <td>BR91905</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <hr class="mt-0 mb-6">
      <div class="card-body p-0 pb-6">
        <form class="source-item">
          <div class="mb-4" data-repeater-list="group-a">
            <div class="repeater-wrapper pt-0 pt-md-9" data-repeater-item>
              <div class="d-flex border rounded position-relative pe-0">
                <div class="row w-100 p-5 gx-5">
                  <div class="col-md-6 col-12 mb-md-0 mb-4">
                    <p class="h6 repeater-title">Item</p>
                    <select class="form-select item-details mb-5">
                      <option selected disabled>Select Item</option>
                      <option value="App Design">App Design</option>
                      <option value="App Customization">App Customization</option>
                      <option value="ABC Template">ABC Template</option>
                      <option value="App Development">App Development</option>
                    </select>
                    <textarea class="form-control" rows="2" placeholder="Item Information"></textarea>
                  </div>
                  <div class="col-md-3 col-12 mb-md-0 mb-4">
                    <p class="h6 repeater-title">Cost</p>
                    <input type="text" class="form-control invoice-item-price mb-5" placeholder="00" min="12" />
                    <div>
                      <div class="mb-1">Discount:</div>
                      <span class="discount me-2">0%</span>
                      <span class="tax-1 me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 1">0%</span>
                      <span class="tax-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 2">0%</span>
                    </div>
                  </div>
                  <div class="col-md-2 col-12 mb-md-0 mb-4">
                    <p class="h6 repeater-title">Qty</p>
                    <input type="text" class="form-control invoice-item-qty" placeholder="1" min="1" max="50" />
                  </div>
                  <div class="col-md-1 col-12 pe-0">
                    <p class="h6 repeater-title">Price</p>
                    <p class="mb-0 mt-2 text-heading">$24.00</p>
                  </div>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                  <i class="ri-close-line cursor-pointer" data-repeater-delete></i>
                  <div class="dropdown">
                    <i class="ri-settings-3-line cursor-pointer more-options-dropdown" role="button" id="dropdownMenuButton" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    </i>
                    <div class="dropdown-menu dropdown-menu-end w-px-300 p-4" aria-labelledby="dropdownMenuButton">

                      <div class="row g-3">
                        <div class="col-12">
                          <label for="discountInput" class="form-label">Discount(%)</label>
                          <input type="number" class="form-control" id="discountInput" min="0" max="100" />
                        </div>
                        <div class="col-md-6">
                          <label for="taxInput1" class="form-label">Tax 1</label>
                          <select name="tax-1-input" id="taxInput1" class="form-select tax-select">
                            <option value="0%" selected>0%</option>
                            <option value="1%">1%</option>
                            <option value="10%">10%</option>
                            <option value="18%">18%</option>
                            <option value="40%">40%</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="taxInput2" class="form-label">Tax 2</label>
                          <select name="tax-2-input" id="taxInput2" class="form-select tax-select">
                            <option value="0%" selected>0%</option>
                            <option value="1%">1%</option>
                            <option value="10%">10%</option>
                            <option value="18%">18%</option>
                            <option value="40%">40%</option>
                          </select>
                        </div>
                      </div>
                      <div class="dropdown-divider my-4"></div>
                      <button type="button" class="btn btn-outline-primary btn-apply-changes">Apply</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="button" class="btn btn-sm btn-primary" data-repeater-create><i class="ri-add-line ri-14px me-1_5"></i> Add Item</button>
            </div>
          </div>
        </form>
      </div>

      <hr class="my-1" />
      <div class="card-body px-0 pb-6">
        <div class="row row-gap-4">
          <div class="col-md-6 mb-md-0 mb-3">
            <div class="d-flex align-items-center mb-4">
              <label for="salesperson" class="me-2 h6 mb-0">Salesperson:</label>
              <input type="text" class="form-control" id="salesperson" placeholder="Tommy Shelby" />
            </div>
            <input type="text" class="form-control" id="invoiceMsg" placeholder="Thanks for your business" />
          </div>
          <div class="col-md-6 d-flex justify-content-md-end mt-2">
            <div class="invoice-calculations">
              <div class="d-flex justify-content-between mb-1">
                <span class="w-px-100">Subtotal:</span>
                <h6 class="mb-0">$5000.25</h6>
              </div>
              <div class="d-flex justify-content-between mb-1">
                <span class="w-px-100">Discount:</span>
                <h6 class="mb-0">$00.00</h6>
              </div>
              <div class="d-flex justify-content-between mb-1">
                <span class="w-px-100">Tax:</span>
                <h6 class="mb-0">$100.00</h6>
              </div>
              <hr class="my-2" />
              <div class="d-flex justify-content-between">
                <span class="w-px-100">Total:</span>
                <h6 class="mb-0">$5100.25</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-0" />
      <div class="card-body py-6 px-0">
        <div class="row">
          <div class="col-12">
            <div>
              <label for="note" class="fw-medium text-heading mb-1">Note:</label>
              <textarea class="form-control" rows="2" id="note" placeholder="Invoice note">It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Invoice Add-->

  <!-- Invoice Actions -->
  <div class="col-lg-3 col-12 invoice-actions">
    <div class="card mb-6">
      <div class="card-body">
        <button class="btn btn-primary d-grid w-100 mb-4" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
          <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="ri-send-plane-line ri-16px scaleX-n1-rtl me-2"></i>Send Invoice</span>
        </button>
        <a href="{{url('app/invoice/preview')}}" class="btn btn-outline-secondary d-grid w-100 mb-4">Preview</a>
        <button type="button" class="btn btn-outline-secondary d-grid w-100">Save</button>
      </div>
    </div>
    <div>
      <div class="form-floating form-floating-outline mb-6">
        <select class="form-select mb-4" id="select-payment-add">
          <option value="Accept payments via">Accept payments via</option>
          <option value="Bank Account">Bank Account</option>
          <option value="Paypal">Paypal</option>
          <option value="Card">Credit/Debit Card</option>
          <option value="UPI Transfer">UPI Transfer</option>
        </select>
      </div>
      <div class="d-flex justify-content-between mb-4">
        <label for="payment-terms">Payment Terms</label>
        <div class="form-check form-switch me-n2 mb-0">
          <input type="checkbox" class="form-check-input" id="payment-terms" checked />
        </div>
      </div>
      <div class="d-flex justify-content-between mb-4">
        <label for="client-notes">Client Notes</label>
        <div class="form-check form-switch me-n2 mb-0">
          <input type="checkbox" class="form-check-input" id="client-notes" checked />
        </div>
      </div>
      <div class="d-flex justify-content-between">
        <label for="payment-stub">Payment Stub</label>
        <div class="form-check form-switch me-n2 mb-0">
          <input type="checkbox" class="form-check-input" id="payment-stub" checked />
        </div>
      </div>
    </div>
  </div>
  <!-- /Invoice Actions -->
</div>

<!-- Offcanvas -->
@include('_partials/_offcanvas/offcanvas-send-invoice')
<!-- /Offcanvas -->
@endsection

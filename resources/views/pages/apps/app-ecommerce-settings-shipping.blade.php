@extends('layouts/layoutMaster')

@section('title', 'eCommerce Settings Shipping & Delivery - Apps')

@section('page-script')
@vite('resources/assets/js/app-ecommerce-settings.js')
@endsection

@section('content')
<div class="row gx-6">

  <!-- Navigation -->
  <div class="col-12 col-lg-4">
    <div class="d-flex justify-content-between flex-column mb-4 mb-md-0">
      <h5 class="mb-4">Getting Started</h5>
      <ul class="nav nav-align-left nav-pills flex-column">
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/details')}}">
            <i class="ri-store-2-line me-2"></i>
            <span class="align-middle">Store details</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/payments')}}">
            <i class="ri-bank-card-line me-2"></i>
            <span class="align-middle">Payments</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/checkout')}}">
            <i class="ri-shopping-cart-line me-2"></i>
            <span class="align-middle">Checkout</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link active" href="javascript:void(0);">
            <i class="ri-car-line me-2"></i>
            <span class="align-middle">Shipping & delivery</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/locations')}}">
            <i class="ri-map-pin-2-line me-2"></i>
            <span class="align-middle">Locations</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/notifications')}}">
            <i class="ri-notification-4-line me-2"></i>
            <span class="align-middle">Notifications</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- /Navigation -->

  <!-- Options -->
  <div class="col-12 col-lg-8 pt-6 pt-lg-0">
    <div class="tab-content p-0">
      <!-- Shipping & delivery Tab -->
      <div class="tab-pane fade show active" id="shipping_delivery" role="tabpanel">
        <div class="card mb-6">
          <div class="card-header d-flex justify-content-between align-items-center">
            <div class="card-title m-0">
              <h5 class="m-0">Shipping zones</h5>
              <p class="card-subtitle mt-0">Choose where you ship and how much you charge for shipping at check out.</p>
            </div>
            <a href="javascript:void(0);" class="fw-medium text-nowrap">Create zone</a>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-sm me-2">
                  <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                </div>
                <div class="d-flex flex-column">
                  <h6 class="m-0">Domestic</h6>
                  <small class="mb-0">United states of America</small>
                </div>
              </div>
              <div>
                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-text-secondary rounded-pill me-1"><i class='ri-pencil-line ri-22px'></i></a>
                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-text-secondary rounded-pill"><i class='ri-delete-bin-7-line ri-22px'></i></a>
              </div>
            </div>

            <div class="mb-4">
              <div class="table-responsive text-nowrap border rounded-4">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Rate Name</th>
                      <th>Condition</th>
                      <th>Price</th>
                      <th class="text-end">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Weight</td>
                      <td>5kg -10kg</td>
                      <td>
                        $9
                      </td>
                      <td class="text-end">
                        <div class="dropdown pe-4">
                          <button type="button" class="btn btn-sm btn-icon btn-text-secondary rounded-pill p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-pencil-line me-1"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-7-line me-1"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>VAT</td>
                      <td>12%</td>
                      <td>
                        $25
                      </td>
                      <td class="text-end">
                        <div class="dropdown pe-4">
                          <button type="button" class="btn btn-sm btn-icon btn-text-secondary rounded-pill p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-pencil-line me-2"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-7-line me-2"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="border-transparent">
                      <td>Duty</td>
                      <td>-</td>
                      <td>-</td>
                      <td class="text-end">
                        <div class="dropdown pe-4">
                          <button type="button" class="btn btn-sm btn-icon btn-text-secondary rounded-pill p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-pencil-line me-2"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-7-line me-2"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <button class="btn btn-sm btn-outline-primary mb-6">Add rate</button>

            <div class="d-flex justify-content-between align-items-center mb-4">
              <div class="d-flex align-items-center">
                <div class="me-2">
                  <i class="fi fi-us fis rounded-circle fs-3"></i>
                </div>
                <div class="d-flex flex-column">
                  <h6 class="m-0">International</h6>
                  <small class="mb-0">United states of America</small>
                </div>
              </div>
              <div>
                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-text-secondary rounded-pill me-1"><i class='ri-pencil-line ri-22px'></i></a>
                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-text-secondary rounded-pill"><i class='ri-delete-bin-7-line ri-22px'></i></a>
              </div>
            </div>

            <div class="mb-4">
              <div class="table-responsive text-nowrap border rounded-4">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Rate Name</th>
                      <th>Condition</th>
                      <th>Price</th>
                      <th class="text-end">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Weight</td>
                      <td>5kg -10kg</td>
                      <td>
                        $19
                      </td>
                      <td class="text-end">
                        <div class="dropdown pe-4">
                          <button type="button" class="btn btn-sm btn-icon btn-text-secondary rounded-pill p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-pencil-line me-1"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-7-line me-1"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>VAT</td>
                      <td>12%</td>
                      <td>
                        $25
                      </td>
                      <td class="text-end">
                        <div class="dropdown pe-4">
                          <button type="button" class="btn btn-sm btn-icon btn-text-secondary rounded-pill p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-pencil-line me-2"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-7-line me-2"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="border-transparent">
                      <td>Duty</td>
                      <td>Japan</td>
                      <td>$49</td>
                      <td class="text-end">
                        <div class="dropdown pe-4">
                          <button type="button" class="btn btn-sm btn-icon btn-text-secondary rounded-pill p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-pencil-line me-2"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-7-line me-2"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <button class="btn btn-sm btn-outline-primary">Add rate</button>
          </div>
        </div>

        <div class="d-flex justify-content-end gap-4">
          <button type="reset" class="btn btn-outline-secondary">Discard</button>
          <a class="btn btn-primary" href="locations">Save Changes</a>
        </div>
      </div>
    </div>
    <!-- /Options-->
  </div>
</div>

@endsection

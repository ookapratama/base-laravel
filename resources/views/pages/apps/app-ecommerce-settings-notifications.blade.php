@extends('layouts/layoutMaster')

@section('title', 'eCommerce Settings Notifications - Apps')

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
          <a class="nav-link" href="{{url('/app/ecommerce/settings/shipping')}}">
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
          <a class="nav-link active" href="javascript:void(0);">
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
      <!-- Notification Tab -->
      <div class="tab-pane fade show active" id="notifications" role="tabpanel">
        <div class="card mb-6">
          <div class="card-body">
            <h5 class="card-title mb-4">Customer</h5>
            <div class="card shadow-none mb-6 border-0">
              <div class="table-responsive border rounded-4">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="text-nowrap w-50">Type</th>
                      <th class="text-nowrap text-center w-25">Email</th>
                      <th class="text-nowrap text-center w-25">App</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-nowrap text-heading">New customer sign up</td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_cust_1" checked />
                        </div>
                      </td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_cust_2" checked />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-nowrap text-heading">Customer account password reset</td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_cust_4" checked />
                        </div>
                      </td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_cust_5" checked />
                        </div>
                      </td>
                    </tr>
                    <tr class="border-transparent">
                      <td class="text-nowrap text-heading">Customer account invite</td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_cust_7" />
                        </div>
                      </td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_cust_8" />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <h5 class="card-title mb-4">Orders</h5>
            <div class="card shadow-none mb-6 border-0">
              <div class="table-responsive border rounded-4">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="text-nowrap w-50">Type</th>
                      <th class="text-nowrap text-center w-25">Email</th>
                      <th class="text-nowrap text-center w-25">App</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-nowrap text-heading">Order purchase</td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_order_1" checked />
                        </div>
                      </td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_order_2" checked />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-nowrap text-heading">Order cancelled</td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_order_4" checked />
                        </div>
                      </td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_order_5" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-nowrap text-heading">Order refund request</td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_order_7" />
                        </div>
                      </td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_order_8" checked />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-nowrap text-heading">Order confirmation</td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_order_9" checked />
                        </div>
                      </td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_order_10" />
                        </div>
                      </td>
                    </tr>
                    <tr class="border-transparent">
                      <td class="text-nowrap text-heading">Payment error</td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_order_11" checked />
                        </div>
                      </td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_order_12" />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <h5 class="card-title mb-4">Shipping</h5>
            <div class="card shadow-none border-0">
              <div class="table-responsive border rounded-4">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="text-nowrap w-50">Type</th>
                      <th class="text-nowrap text-center w-25">Email</th>
                      <th class="text-nowrap text-center w-25">App</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-nowrap text-heading">Picked up</td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_ship_1" checked />
                        </div>
                      </td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_ship_2" checked />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-nowrap text-heading">Shipping update</td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_ship_3" checked />
                        </div>
                      </td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_ship_4" />
                        </div>
                      </td>
                    </tr>
                    <tr class="border-transparent">
                      <td class="text-nowrap text-heading">Delivered</td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_ship_5" />
                        </div>
                      </td>
                      <td>
                        <div class="form-check mb-0 d-flex justify-content-center">
                          <input class="form-check-input" type="checkbox" id="defaultCheck_ship_6" checked />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-end gap-4">
          <button type="button" class="btn btn-outline-secondary">Discard</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Options-->
</div>
@endsection

@extends('layouts/layoutMaster')

@section('title', 'Fullscreen Timeline - Extended UI')

@section('vendor-style')
@vite('resources/assets/vendor/libs/animate-on-scroll/animate-on-scroll.scss')
@endsection

@section('vendor-script')
@vite('resources/assets/vendor/libs/animate-on-scroll/animate-on-scroll.js')
@endsection

@section('page-script')
@vite('resources/assets/js/extended-ui-timeline.js')
@endsection

@section('content')
<div class="row overflow-hidden">
  <div class="col-12">
    <ul class="timeline timeline-center mt-12">
      <li class="timeline-item">
        <span class="timeline-indicator timeline-indicator-primary" data-aos="zoom-in" data-aos-delay="200">
          <i class="ri-brush-line ri-20px"></i>
        </span>
        <div class="timeline-event card p-0" data-aos="fade-right">
          <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
            <h6 class="card-title mb-0">Designing UI</h6>
            <div class="meta">
              <span class="badge rounded-pill bg-label-primary">Design</span>
              <span class="badge rounded-pill bg-label-success">Meeting</span>
            </div>
          </div>
          <div class="card-body">
            <p class="mb-2">
              Our main goal is to design a new mobile application for our
              client. The customer wants a clean & flat design.
            </p>
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <div>
                <p class="text-muted mb-2">Participants</p>
                <ul class="list-unstyled users-list d-flex align-items-center avatar-group">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-xs pull-up">
                    <img class="rounded-circle" src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" />
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-xs pull-up">
                    <img class="rounded-circle" src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar" />
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-xs pull-up">
                    <img class="rounded-circle" src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" />
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Darcey Nooner" class="avatar avatar-xs pull-up">
                    <img class="rounded-circle" src="{{asset('assets/img/avatars/10.png')}}" alt="Avatar" />
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="timeline-event-time">1st January</div>
        </div>
      </li>
      <li class="timeline-item">
        <span class="timeline-indicator timeline-indicator-success" data-aos="zoom-in" data-aos-delay="200">
          <i class="ri-question-mark ri-20px"></i>
        </span>
        <div class="timeline-event card p-0" data-aos="fade-left">
          <h6 class="card-header">Survey Report</h6>
          <div class="card-body">
            <div class="d-flex flex-wrap mb-6">
              <div>
                <div class="avatar avatar-xs me-4">
                  <img src="{{asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle" />
                </div>
              </div>
              <span>assigned this task to <span class="fw-medium">Sarah</span></span>
            </div>
            <ul class="list-unstyled">
              <li class="d-flex">
                <div>
                  <div class="avatar avatar-xs me-4">
                    <img src="{{asset('assets/img/avatars/2.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                </div>
                <div class="mb-4 w-100">
                  <div class="progress bg-label-danger" style="height: 6px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 48.7%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Jquery</small>
                </div>
              </li>
              <li class="d-flex">
                <div>
                  <div class="avatar avatar-xs me-4">
                    <img src="{{asset('assets/img/avatars/3.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                </div>
                <div class="mb-4 w-100">
                  <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 31.3%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>React</small>
                  <small>React</small>
                  <small>React</small>
                  <small>React</small>
                </div>
              </li>
              <li class="d-flex">
                <div>
                  <div class="avatar avatar-xs me-4">
                    <img src="{{asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                </div>
                <div class="mb-4 w-100">
                  <div class="progress bg-label-warning" style="height: 6px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Angular</small>
                </div>
              </li>
              <li class="d-flex">
                <div>
                  <div class="avatar avatar-xs me-4">
                    <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                </div>
                <div class="mb-4 w-100">
                  <div class="progress bg-label-info" style="height: 6px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>VUE</small>
                </div>
              </li>
              <li class="d-flex">
                <div>
                  <div class="avatar avatar-xs me-4">
                    <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                </div>
                <div class="w-100">
                  <div class="progress bg-label-success" style="height: 6px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Laravel</small>
                </div>
              </li>
            </ul>
          </div>
          <div class="timeline-event-time">2nd January</div>
        </div>
      </li>
      <li class="timeline-item">
        <span class="timeline-indicator timeline-indicator-danger" data-aos="zoom-in" data-aos-delay="200">
          <i class="ri-line-chart-line ri-20px"></i>
        </span>

        <div class="timeline-event card p-0" data-aos="fade-right">
          <h6 class="card-header">Financial Reports</h6>
          <div class="card-body">
            <p class="mb-2">Click the button below to read financial reports</p>
            <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Show Report
            </button>
            <div class="collapse" id="collapseExample">
              <ul class="list-group list-group-flush mt-4">
                <li class="list-group-item d-flex justify-content-between flex-wrap">
                  <span>Last Years's Profit : $20000</span>
                  <i class="ri-share-line cursor-pointer"></i>
                </li>
                <li class="list-group-item d-flex justify-content-between flex-wrap">
                  <span> This Years's Profit : $25000</span>
                  <i class="ri-share-line cursor-pointer"></i>
                </li>
                <li class="list-group-item d-flex justify-content-between flex-wrap">
                  <span> Last Years's Commission : $5000</span>
                  <i class="ri-share-line cursor-pointer"></i>
                </li>
                <li class="list-group-item d-flex justify-content-between flex-wrap">
                  <span> This Years's Commission : $7000</span>
                  <i class="ri-share-line cursor-pointer"></i>
                </li>
                <li class="list-group-item d-flex justify-content-between flex-wrap">
                  <span>
                    This Years's Total Balance : $70000</span>
                  <i class="ri-share-line cursor-pointer"></i>
                </li>
              </ul>
            </div>
          </div>
          <div class="timeline-event-time">5th January</div>
        </div>
      </li>
      <li class="timeline-item">
        <span class="timeline-indicator timeline-indicator-warning" data-aos="zoom-in" data-aos-delay="200">
          <i class="ri-donut-chart-fill ri-20px"></i>
        </span>
        <div class="timeline-event card p-0" data-aos="fade-left">
          <h6 class="card-header">Snacks</h6>
          <div class="card-body">
            <div class="d-flex flex-sm-row flex-column">
              <img src="{{asset('assets/img/elements/13.jpg')}}" class="rounded me-4 mb-sm-0 mb-2" alt="doughnut" height="64" width="64" />
              <div>
                <h6 class="mb-2">
                  A Donut which straight gone to Your Tummy
                </h6>
                <p class="mb-2">
                  I gaze longingly at the beautiful, perfect, plump donut. This
                  is a delicately crafted piece of art. The mouthwatering mound
                  of miraculous mush isn't able to escape my sight...<a href="javascript:void(0)">read more</a>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <i class="ri-star-fill text-warning"></i>
                    <i class="ri-star-fill text-warning"></i>
                    <i class="ri-star-fill text-warning"></i>
                    <i class="ri-star-fill text-warning"></i>
                    <i class="ri-star-line"></i>
                  </div>
                  <div>
                    <span class="fw-medium">$5.00</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="timeline-event-time">10th January</div>
        </div>
      </li>
      <li class="timeline-item timeline-item-right">
        <span class="timeline-indicator timeline-indicator-info" data-aos="zoom-in" data-aos-delay="200">
          <i class="ri-map-pin-line ri-20px"></i>
        </span>
        <div class="timeline-event card p-0" data-aos="fade-left">
          <div class="card-header d-flex justify-content-between">
            <h6 class="card-title mb-0">
              <i class="ri-map-pin-line"></i>
              <span class="align-middle">Location</span>
            </h6>
            <span class="badge rounded-pill bg-label-danger">High</span>
          </div>
          <div class="card-body py-0">
            <h6 class="mb-2">
              Final location for the company celebration.
            </h6>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas,
              quidem?
            </p>
          </div>
          <div class="card-footer d-flex justify-content-between">
            <div class="d-flex align-items-center flex-wrap cursor-pointer gap-4">
              <i class="ri-links-line"></i>
              <div class="position-relative">
                <i class="ri-chat-4-line"></i>
                <span class="badge rounded-pill bg-info badge-dot badge-notifications"></span>
              </div>
              <i class="ri-user-3-line"></i>
            </div>
            <p class="mb-0">
              <span class="text-muted">Due Date:</span>
              15th Jan
            </p>
          </div>
          <div class="timeline-event-time">12th January</div>
        </div>
      </li>
      <li class="timeline-item timeline-item-left">
        <span class="timeline-indicator timeline-indicator-primary" data-aos="zoom-in" data-aos-delay="200">
          <i class="ri-open-arm-line ri-20px"></i>
        </span>
        <div class="timeline-event card p-0" data-aos="fade-right">
          <div class="card-header d-flex justify-content-between">
            <h6 class="card-title mb-0">Gym Program</h6>
            <span class="text-muted">5:00 - 6:10AM</span>
          </div>
          <div class="card-body pb-4 pt-0">
            <div class="hours mb-2">
              <i class="ri-time-line"></i>
              <span>1.1 Hours</span>
              <i class="ri-arrow-left-right-line mx-2"></i>
              <span>Weekly</span>
            </div>
            <div class="location">
              <i class="ri-map-pin-line"></i>
              <span class="align-middle">Rock's Gym</span>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-between">
            <div class="tags">
              <span class="badge rounded-pill bg-label-danger">Gym</span>
              <span class="badge rounded-pill bg-label-info">Power</span>
            </div>
            <div>
              <i class="ri-more-2-line cursor-pointer"></i>
            </div>
          </div>
          <div class="timeline-event-time">15th January</div>
        </div>
      </li>
      <li class="timeline-item">
        <span class="timeline-indicator timeline-indicator-success" data-aos="zoom-in" data-aos-delay="200">
          <i class="ri-money-dollar-circle-line ri-20px"></i>
        </span>
        <div class="timeline-event card p-0" data-aos="fade-right">
          <h6 class="card-header">General Reserve</h6>
          <div class="card-body">
            <ul class="list-unstyled">
              <li class="d-flex justify-content-start align-items-center text-success mb-4">
                <i class="ri-money-dollar-circle-line ri-24px me-4"></i>
                <div class="ps-4 border-start">
                  <small class="text-muted mb-1">Cash</small>
                  <h5 class="mb-0">$500</h5>
                </div>
              </li>
              <li class="d-flex justify-content-start align-items-center text-info mb-4">
                <i class="ri-bank-card-2-line ri-24px me-4"></i>
                <div class="ps-4 border-start">
                  <small class="text-muted mb-1">Credit Card</small>
                  <h5 class="mb-0">$5000</h5>
                </div>
              </li>
              <li class="d-flex justify-content-start align-items-center text-primary">
                <i class="ri-line-chart-line ri-24px me-4"></i>
                <div class="ps-4 border-start">
                  <small class="text-muted mb-1">Investments</small>
                  <h5 class="mb-0">$300</h5>
                </div>
              </li>
            </ul>
          </div>
          <div class="timeline-event-time">16th January</div>
        </div>
      </li>
      <li class="timeline-item">
        <span class="timeline-indicator timeline-indicator-danger" data-aos="zoom-in" data-aos-delay="200">
          <i class="ri-server-line ri-20px"></i>
        </span>
        <div class="timeline-event card p-0" data-aos="fade-left">
          <div class="card-header d-flex justify-content-between">
            <h6 class="card-title mb-0">
              <span class="align-middle">Ubuntu Server</span>
            </h6>
            <span class="badge rounded-pill bg-label-danger">Inactive</span>
          </div>
          <div class="card-body pb-2 pt-0">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                <div>
                  <i class="ri-global-line"></i>
                  <span>IP Address</span>
                </div>
                <div>
                  192.654.8.566
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                <div>
                  <i class="ri-cpu-line"></i>
                  <span>CPU</span>
                </div>
                <div>
                  4 Cores
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                <div>
                  <i class="ri-ram-2-fill"></i>
                  <span>Ram</span>
                </div>
                <div>
                  500 MB
                </div>
              </li>
            </ul>
          </div>
          <div class="card-footer d-flex justify-content-between">
            <div class="server-icons">
              <i class="ri-share-line me-2"></i>
              <i class="ri-loop-left-line"></i>
            </div>
          </div>
          <div class="timeline-event-time">20th January</div>
        </div>
      </li>
      <li class="timeline-item">
        <span class="timeline-indicator timeline-indicator-info" data-aos="zoom-in" data-aos-delay="200">
          <i class="ri-store-2-line ri-20px"></i>
        </span>
        <div class="timeline-event card p-0" data-aos="fade-right">
          <div class="card-header d-flex justify-content-between">
            <h6 class="card-title mb-0"><span class="align-middle">Online Store</span></h6>
            <i class="ri-more-2-line cursor-pointer"></i>
          </div>
          <div class="card-body pt-0">
            <p>
              Develop an online store of electronic devices for the provided
              layout, as well as develop a mobile version of it. The must be
              compatible with any CMS.
            </p>
            <div class="d-flex flex-wrap flex-sm-row flex-column">
              <div class="mb-sm-0 mb-4 me-12">
                <p class="text-muted mb-2">Developers</p>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-xs me-2">
                    <span class="avatar-initial rounded-circle bg-label-primary">A</span>
                  </div>
                  <div class="avatar avatar-xs me-2">
                    <span class="avatar-initial rounded-circle bg-label-success">B</span>
                  </div>
                  <div class="avatar avatar-xs">
                    <span class="avatar-initial rounded-circle bg-label-danger">C</span>
                  </div>
                </div>
              </div>
              <div class="mb-sm-0 mb-4 me-12">
                <p class="text-muted mb-2">Deadline</p>
                <p class="mb-0">20 Dec 2077</p>
              </div>
              <div>
                <p class="text-muted mb-2">Budget</p>
                <p class="mb-0">$50000</p>
              </div>
            </div>
          </div>
          <div class="timeline-event-time">25th January</div>
        </div>
      </li>
    </ul>
  </div>
</div>
@endsection

@extends('layouts/layoutMaster')
@php
  $configData = Helper::appClasses();
@endphp

@section('title', 'Academy My Courses - App')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/plyr/plyr.scss'
])
@endsection

@section('page-style')
@vite('resources/assets/vendor/scss/pages/app-academy.scss')
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/plyr/plyr.js'
])
@endsection

@section('page-script')
@vite('resources/assets/js/app-academy-course.js')
@endsection

@section('content')
<div class="app-academy">
  <div class="card p-0 mb-6">
    <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-6">
      <div class="app-academy-md-25 card-body py-0 pt-6 ps-12">
        <img src="{{asset('assets/img/illustrations/bulb-'.$configData['style'].'.png') }}" class="img-fluid app-academy-img-height scaleX-n1-rtl" alt="Bulb in hand" data-app-light-img="illustrations/bulb-light.png" data-app-dark-img="illustrations/bulb-dark.png" height="90" />
      </div>
      <div class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center mb-6 py-6">
        <span class="card-title mb-4 lh-lg px-md-12 h4 text-heading">
          Education, talents, and career<br> opportunities.
          <span class="text-primary text-nowrap">All in one place</span>.
        </span>
        <p class="mb-4 px-0 px-md-2">
          Grow your skill with the most reliable online courses and certifications in<br> marketing, information technology, programming, and data science.
        </p>
        <div class="d-flex align-items-center justify-content-between app-academy-md-80">
          <input type="search" placeholder="Find your course" class="form-control form-control-sm me-4" />
          <button type="submit" class="btn btn-primary btn-icon"><i class="ri-search-line ri-22px"></i></button>
        </div>
      </div>
      <div class="app-academy-md-25 d-flex align-items-end justify-content-end">
        <img src="{{asset('assets/img/illustrations/pencil-rocket.png')}}" alt="pencil rocket" height="180" class="scaleX-n1-rtl" />
      </div>
    </div>
  </div>

  <div class="card mb-6">
    <div class="card-header d-flex flex-wrap justify-content-between gap-4">
      <div class="card-title mb-0 me-1">
        <h5 class="mb-0">My Courses</h5>
        <p class="mb-0 text-body">Total 6 course you have purchased</p>
      </div>
      <div class="d-flex justify-content-md-end align-items-center gap-6 flex-wrap">
        <select class="form-select form-select-sm w-px-250">
          <option value="all courses">All Courses</option>
          <option value="ui/ux">UI/UX</option>
          <option value="seo">SEO</option>
          <option value="web">Web</option>
          <option value="music">Music</option>
          <option value="painting">Painting</option>
        </select>

        <div class="form-check form-switch mb-0">
          <input type="checkbox" class="form-check-input" id="CourseSwitch" checked />
          <label class="form-check-label text-nowrap mb-0" for="CourseSwitch">Hide completed</label>
        </div>
      </div>
    </div>
    <div class="card-body mt-1">
      <div class="row gy-6 mb-6">
        <div class="col-sm-6 col-lg-4">
          <div class="card p-2 h-100 shadow-none border rounded-3">
            <div class="rounded-4 text-center mb-5">
              <a href="{{url('app/academy/course-details')}}"><img class="img-fluid" src="{{asset('assets/img/pages/app-academy-tutor-1.png')}}" alt="tutor image 1"></a>
            </div>
            <div class="card-body p-3 pt-0">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <span class="badge rounded-pill bg-label-primary">Web</span>
                <p class="d-flex align-items-center justify-content-center fw-medium gap-1 mb-0">
                  4.4 <span class="text-warning"><i class="ri-star-s-fill ri-24px me-1"></i></span><span class="fw-normal">(1.23k)</span>
                </p>
              </div>
              <a href="{{url('app/academy/course-details')}}" class="h5">Basics of Angular</a>
              <p class="mt-1">Introductory course for Angular and framework basics in web development.</p>
              <p class="d-flex align-items-center mb-1"><i class="ri-time-line ri-20px me-1"></i>30 minutes</p>
              <div class="progress rounded-pill mb-4" style="height: 8px">
                <div class="progress-bar w-75" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex flex-column flex-md-row gap-4 text-nowrap flex-wrap flex-md-nowrap  flex-lg-wrap flex-xxl-nowrap">
                <a class="w-100 btn btn-outline-secondary d-flex align-items-center" href="{{url('app/academy/course-details')}}">
                  <i class="ri-refresh-line ri-16px align-middle me-2"></i><span>Start Over</span>
                </a>
                <a class="w-100 btn btn-outline-primary d-flex align-items-center" href="{{url('app/academy/course-details')}}">
                  <span class="me-2">Continue</span><i class="ri-arrow-right-line ri-16px lh-1 scaleX-n1-rtl"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card shadow-none border p-2 h-100 rounded-3">
            <div class="rounded-4 text-center mb-5">
              <a href="{{url('app/academy/course-details')}}"><img class="img-fluid" src="{{asset('assets/img/pages/app-academy-tutor-2.png')}}" alt="tutor image 2"></a>
            </div>
            <div class="card-body p-3 pt-0">
              <div class="d-flex justify-content-between align-items-center mb-4 pe-xl-4 pe-xxl-0">
                <span class="badge rounded-pill bg-label-danger">UI/UX</span>
                <p class="d-flex align-items-center justify-content-center fw-medium gap-1 mb-0">
                  4.2 <span class="text-warning"><i class="ri-star-s-fill ri-24px me-1"></i></span><span class="fw-normal"> (424)</span>
                </p>
              </div>
              <a class="h5" href="{{url('app/academy/course-details')}}">Figma & More</a>
              <p class="mt-1">Introductory course for design and framework basics in web development.</p>
              <p class="d-flex align-items-center mb-1"><i class="ri-time-line ri-20px me-1"></i>16 hours</p>
              <div class="progress rounded-pill mb-4" style="height: 8px">
                <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex flex-column flex-md-row gap-4 text-nowrap flex-wrap flex-md-nowrap  flex-lg-wrap flex-xxl-nowrap">
                <a class="w-100 btn btn-outline-secondary d-flex align-items-center" href="{{url('app/academy/course-details')}}">
                  <i class="ri-refresh-line ri-16px align-middle me-2"></i><span>Start Over</span>
                </a>
                <a class="w-100 btn btn-outline-primary d-flex align-items-center" href="{{url('app/academy/course-details')}}">
                  <span class="me-2">Continue</span><i class="ri-arrow-right-line ri-16px lh-1 scaleX-n1-rtl"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card shadow-none border p-2 h-100 rounded-3">
            <div class="rounded-4 text-center mb-5">
              <a href="{{url('app/academy/course-details')}}"><img class="img-fluid" src="{{asset('assets/img/pages/app-academy-tutor-3.png')}}" alt="tutor image 3"></a>
            </div>
            <div class="card-body p-3 pt-0">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <span class="badge rounded-pill bg-label-success">SEO</span>
                <p class="d-flex align-items-center justify-content-center fw-medium gap-1 mb-0">
                  5 <span class="text-warning"><i class="ri-star-s-fill ri-24px me-1"></i></span><span class="fw-normal"> (12)</span>
                </p>
              </div>
              <a class="h5" href="{{url('app/academy/course-details')}}">Keyword Research</a>
              <p class="mt-1">Keyword suggestion tool provides comprehensive details & keyword suggestions.</p>
              <p class="d-flex align-items-center mb-1"><i class="ri-time-line ri-20px me-1"></i>7 hours</p>
              <div class="progress rounded-pill mb-4" style="height: 8px">
                <div class="progress-bar w-50" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex flex-column flex-md-row gap-4 text-nowrap flex-wrap flex-md-nowrap  flex-lg-wrap flex-xxl-nowrap">
                <a class="w-100 btn btn-outline-secondary d-flex align-items-center" href="{{url('app/academy/course-details')}}">
                  <i class="ri-refresh-line ri-16px align-middle me-2"></i><span>Start Over</span>
                </a>
                <a class="w-100 btn btn-outline-primary d-flex align-items-center" href="{{url('app/academy/course-details')}}">
                  <span class="me-2">Continue</span><i class="ri-arrow-right-line ri-16px lh-1 scaleX-n1-rtl"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card shadow-none border p-2 h-100 rounded-3">
            <div class="rounded-4 text-center mb-5">
              <a href="{{url('app/academy/course-details')}}"><img class="img-fluid" src="{{asset('assets/img/pages/app-academy-tutor-4.png')}}" alt="tutor image 4"></a>
            </div>
            <div class="card-body p-3 pt-0">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <span class="badge rounded-pill bg-label-info">Music</span>
                <p class="d-flex align-items-center justify-content-center gap-1 mb-0">
                  3.8 <span class="text-warning"><i class="ri-star-s-fill ri-24px me-1"></i></span><span class="fw-normal"> (634)</span>
                </p>
              </div>
              <a class="h5" href="{{url('app/academy/course-details')}}">Basics to Advanced</a>
              <p class="mt-1">20 more lessons like this about music production, writing, mixing, mastering</p>
              <p class="d-flex align-items-center mb-1"><i class="ri-time-line ri-20px me-1"></i>30 minutes</p>
              <div class="progress rounded-pill mb-4" style="height: 8px">
                <div class="progress-bar w-75" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex flex-column flex-md-row gap-4 text-nowrap flex-wrap flex-md-nowrap  flex-lg-wrap flex-xxl-nowrap">
                <a class="w-100 btn btn-outline-secondary d-flex align-items-center" href="{{url('app/academy/course-details')}}">
                  <i class="ri-refresh-line ri-16px align-middle me-2"></i><span>Start Over</span>
                </a>
                <a class="w-100 btn btn-outline-primary d-flex align-items-center" href="{{url('app/academy/course-details')}}">
                  <span class="me-2">Continue</span><i class="ri-arrow-right-line ri-16px lh-1 scaleX-n1-rtl"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card shadow-none border p-2 h-100 rounded-3">
            <div class="rounded-4 text-center mb-5">
              <a href="{{url('app/academy/course-details')}}"><img class="img-fluid" src="{{asset('assets/img/pages/app-academy-tutor-5.png')}}" alt="tutor image 5"></a>
            </div>
            <div class="card-body p-3 pt-0">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <span class="badge rounded-pill bg-label-warning">Painting</span>
                <p class="d-flex align-items-center justify-content-center gap-1 mb-0">
                  4.7 <span class="text-warning"><i class="ri-star-s-fill ri-24px me-1"></i></span><span class="fw-normal"> (34)</span>
                </p>
              </div>
              <a class="h5" href="{{url('app/academy/course-details')}}">Art & Drawing</a>
              <p class="mt-1">Easy-to-follow video & guides show you how to draw animals, people & more.</p>
              <p class="d-flex align-items-center text-success mb-1"><i class="ri-check-line ri-20px me-1"></i>Completed</p>
              <div class="progress rounded-pill mb-4" style="height: 8px">
                <div class="progress-bar w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <a class="w-100 btn btn-outline-primary" href="{{url('app/academy/course-details')}}"><i class="ri-refresh-line ri-16px me-2"></i>Start Over</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card shadow-none border p-2 h-100 rounded-3">
            <div class="rounded-4 text-center mb-5">
              <a href="{{url('app/academy/course-details')}}"><img class="img-fluid" src="{{asset('assets/img/pages/app-academy-tutor-6.png')}}" alt="tutor image 6"></a>
            </div>
            <div class="card-body p-3 pt-0">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <span class="badge rounded-pill bg-label-danger">UI/UX</span>
                <p class="d-flex align-items-center justify-content-center gap-1 mb-0">
                  3.6 <span class="text-warning"><i class="ri-star-s-fill ri-24px me-1"></i></span><span class="fw-normal"> (2.5k)</span>
                </p>
              </div>
              <a class="h5" href="{{url('app/academy/course-details')}}">Basics Fundamentals</a>
              <p class="mt-1">This guide will help you develop a systematic approach user interface.</p>
              <p class="d-flex align-items-center mb-1"><i class="ri-time-line ri-20px me-1"></i>16 hours</p>
              <div class="progress rounded-pill mb-4" style="height: 8px">
                <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex flex-column flex-md-row gap-4 text-nowrap flex-wrap flex-md-nowrap  flex-lg-wrap flex-xxl-nowrap">
                <a class="w-100 btn btn-outline-secondary d-flex align-items-center" href="{{url('app/academy/course-details')}}">
                  <i class="ri-refresh-line ri-16px align-middle me-2"></i><span>Start Over</span>
                </a>
                <a class="w-100 btn btn-outline-primary d-flex align-items-center" href="{{url('app/academy/course-details')}}">
                  <span class="me-2">Continue</span><i class="ri-arrow-right-line ri-16px lh-1 scaleX-n1-rtl"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav aria-label="Page navigation" class="d-flex align-items-center justify-content-center">
        <ul class="pagination mb-0">
          <li class="page-item first">
            <a class="page-link" href="javascript:void(0);"><i class="tf-icon ri-skip-back-mini-line ri-22px"></i></a>
          </li>
          <li class="page-item prev">
            <a class="page-link" href="javascript:void(0);"><i class="tf-icon ri-arrow-left-s-line ri-22px"></i></a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">2</a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="javascript:void(0);">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">5</a>
          </li>
          <li class="page-item next">
            <a class="page-link" href="javascript:void(0);"><i class="tf-icon ri-arrow-right-s-line ri-22px"></i></a>
          </li>
          <li class="page-item last">
            <a class="page-link" href="javascript:void(0);"><i class="tf-icon ri-skip-forward-mini-line ri-22px"></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="row gy-4 mb-6">
    <div class="col-lg-6">
      <div class="card shadow-none bg-label-info h-100">
        <div class="card-body d-flex justify-content-between flex-wrap-reverse">
          <div class="mb-0 w-100 app-academy-sm-60 d-flex flex-column justify-content-between text-center text-sm-start">
            <div class="card-title">
              <h5 class="text-info mb-2">Earn a Certificate</h5>
              <p class="text-heading w-sm-80 app-academy-xl-100">
                Get the right professional certificate program for you.
              </p>
            </div>
            <div class="mb-0"><button class="btn btn-sm btn-info">View Programs</button></div>
          </div>
          <div class="w-100 app-academy-sm-40 d-flex justify-content-center justify-content-sm-end h-px-150 mb-4 mb-sm-0">
            <img class="img-fluid scaleX-n1-rtl" src="{{asset('assets/img/illustrations/boy-app-academy.png')}}" alt="boy illustration" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card shadow-none bg-label-danger h-100">
        <div class="card-body d-flex justify-content-between flex-wrap-reverse">
          <div class="mb-0 w-100 app-academy-sm-60 d-flex flex-column justify-content-between text-center text-sm-start">
            <div class="card-title">
              <h5 class="text-danger mb-2">Best Rated Courses</h5>
              <p class="text-heading app-academy-sm-60 app-academy-xl-100">
                Enroll now in the most popular and best rated courses.
              </p>
            </div>
            <div class="mb-0"><button class="btn btn-sm btn-danger">View Courses</button></div>
          </div>
          <div class="w-100 app-academy-sm-40 d-flex justify-content-center justify-content-sm-end h-px-150 mb-4 mb-sm-0">
            <img class="img-fluid scaleX-n1-rtl" src="{{asset('assets/img/illustrations/girl-app-academy.png')}}" alt="girl illustration" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body row gy-4">
      <div class="col-sm-12 col-lg-4 text-center pt-md-12 px-4">
        <div class="d-flex justify-content-center">
          <div class="avatar avatar-lg mb-4">
            <span class="avatar-initial rounded-3 bg-label-primary"><i class="ri-gift-line ri-36px"></i></span>
          </div>
        </div>
        <h4 class="card-title mb-4">Today's Free Courses</h4>
        <p class="card-text">
          We offers 284 Free Online courses from top tutors and companies to help you start or advance your career
          skills. Learn online for free and fast today!
        </p>
        <button class="btn btn-primary">Get premium courses</button>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card shadow-none border h-100">
          <div class="p-2 pb-0">
            <video poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="guitar-video-player" playsinline controls>
              <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
            </video>
          </div>
          <div class="card-body">
            <h5 class="card-title mb-2">Your First Singing Lesson</h5>
            <p class="card-text">
              In the same way as any other artistic domain, singing lends itself perfectly to self-teaching.
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card shadow-none border h-100">
          <div class="p-2 pb-0">
            <video poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="guitar-video-player-2" playsinline controls>
              <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
            </video>
          </div>
          <div class="card-body">
            <h5 class="card-title mb-2">Guitar for Beginners</h5>
            <p class="card-text">
              The Fender Acoustic Guitar is the best choice for both beginners and professionals offering a great sound.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

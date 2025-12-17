@extends('layouts/layoutMaster')

@section('title', 'Academy - My Course Details - App')

@section('vendor-style')
@vite('resources/assets/vendor/libs/plyr/plyr.scss')
@endsection

@section('page-style')
@vite('resources/assets/vendor/scss/pages/app-academy-details.scss')
@endsection

@section('vendor-script')
@vite('resources/assets/vendor/libs/plyr/plyr.js')
@endsection

@section('page-script')
@vite('resources/assets/js/app-academy-course-details.js')
@endsection

@section('content')
<div class="row g-6">
  <div class="col-lg-8">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap mb-6 gap-1">
          <div class="me-1">
            <h5 class="mb-0">UI/UX Basic Fundamentals</h5>
            <p class="mb-0">Prof. <span class="fw-medium text-heading"> Devonne Wallbridge </span></p>
          </div>
          <div class="d-flex align-items-center">
            <span class="badge bg-label-danger rounded-pill">UI/UX</span>
            <i class='ri-share-forward-line ri-24px mx-4'></i>
            <i class='ri-bookmark-line ri-24px'></i>
          </div>
        </div>
        <div class="card academy-content shadow-none border">
          <div class="p-2">
            <div class="cursor-pointer"><video class="w-100" poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="plyr-video-player" playsinline controls>
                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
              </video>
            </div>
          </div>
          <div class="card-body pt-3">
            <h5>About this course</h5>
            <p class="mb-0">Learn web design in 1 hour with 25+ simple-to-use rules and guidelines — tons
              of amazing web design resources included!</p>
            <hr class="my-6">
            <h5>By the numbers</h5>
            <div class="d-flex flex-wrap row-gap-2">
              <div class="me-12">
                <p class="text-nowrap mb-2"><i class='ri-check-line ri-20px me-2'></i>Skill level: All Levels</p>
                <p class="text-nowrap mb-2"><i class='ri-group-line ri-20px me-2'></i>Students: 38,815</p>
                <p class="text-nowrap mb-2"><i class='ri-global-line ri-20px me-2'></i>Languages: English</p>
                <p class="text-nowrap mb-0"><i class='ri-pages-line ri-20px me-2'></i>Captions: Yes</p>
              </div>
              <div>
                <p class="text-nowrap mb-2"><i class='ri-video-upload-line ri-20px me-2 ms-50'></i>Lectures: 19</p>
                <p class="text-nowrap mb-0"><i class='ri-time-line ri-20px me-2'></i>Video: 1.5 total hours</p>
              </div>
            </div>
            <hr class="my-6">
            <h5>Description</h5>
            <p class="mb-6">
              The material of this course is also covered in my other course about web design and development
              with HTML5 & CSS3. Scroll to the bottom of this page to check out that course, too!
              If you're already taking my other course, you already have all it takes to start designing beautiful
              websites today!
            </p>
            <p class="mb-6">
              "Best web design course: If you're interested in web design, but want more than
              just a "how to use WordPress" course,I highly recommend this one." — Florian Giusti
            </p>
            <p> "Very helpful to us left-brained people: I am familiar with HTML, CSS, JQuery,
              and Twitter Bootstrap, but I needed instruction in web design. This course gave me practical,
              impactful techniques for making websites more beautiful and engaging." — Susan Darlene Cain
            </p>
            <hr class="my-6">
            <h5>Instructor</h5>
            <div class="d-flex justify-content-start align-items-center user-name">
              <div class="avatar-wrapper">
                <div class="avatar me-4"><img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle"></div>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1">Devonne Wallbridge</h6>
                <small>Web Developer, Designer, and Teacher</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="accordion stick-top accordion-custom-button" id="courseContent">
      <div class="accordion-item active mb-0">
        <div class="accordion-header border-bottom-0" id="headingOne">
          <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#chapterOne" aria-expanded="true" aria-controls="chapterOne">
            <span class="d-flex flex-column">
              <span class="h5 mb-0">Course Content</span>
              <span class="text-body fw-normal">2 / 5 | 4.4 min</span>
            </span>
          </button>
        </div>
        <div id="chapterOne" class="accordion-collapse collapse show" data-bs-parent="#courseContent">
          <div class="accordion-body py-4 border-top">
            <div class="form-check d-flex align-items-center mb-4">
              <input class="form-check-input" type="checkbox" id="defaultCheck1" checked="" />
              <label for="defaultCheck1" class="form-check-label ms-4">
                <span class="mb-0 h6">1. Welcome to this course</span>
                <small class="text-body d-block">2.4 min</small>
              </label>
            </div>
            <div class="form-check d-flex align-items-center mb-4">
              <input class="form-check-input" type="checkbox" id="defaultCheck2" checked="" />
              <label for="defaultCheck2" class="form-check-label ms-4">
                <span class="mb-0 h6">2. Watch before you start</span>
                <small class="text-body d-block">4.8 min</small>
              </label>
            </div>
            <div class="form-check d-flex align-items-center mb-4">
              <input class="form-check-input" type="checkbox" id="defaultCheck3" />
              <label for="defaultCheck3" class="form-check-label ms-4">
                <span class="mb-0 h6">3. Basic design theory</span>
                <small class="text-body d-block">5.9 min</small>
              </label>
            </div>
            <div class="form-check d-flex align-items-center mb-4">
              <input class="form-check-input" type="checkbox" id="defaultCheck4" />
              <label for="defaultCheck4" class="form-check-label ms-4">
                <span class="mb-0 h6">4. Basic fundamentals</span>
                <small class="text-body d-block">3.6 min</small>
              </label>
            </div>
            <div class="form-check d-flex align-items-center">
              <input class="form-check-input" type="checkbox" id="defaultCheck5" />
              <label for="defaultCheck5" class="form-check-label ms-4">
                <span class="mb-0 h6">5. What is ui/ux</span>
                <small class="text-body d-block">10.6 min</small>
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header border-bottom-0" id="headingTwo">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#chapterTwo" aria-expanded="false" aria-controls="chapterTwo">
            <span class="d-flex flex-column">
              <span class="h5 mb-0">Web Design for Web Developers</span>
              <span class="text-body fw-normal">1 / 4 | 4.4 min</span>
            </span>
          </button>
        </div>
        <div id="chapterTwo" class="accordion-collapse collapse" data-bs-parent="#courseContent">
          <div class="accordion-body py-4 border-top">
            <div class="form-check d-flex align-items-center mb-4">
              <input class="form-check-input" type="checkbox" id="defCheck1" checked="" />
              <label for="defCheck1" class="form-check-label ms-4">
                <span class="mb-0 h6">1. How to use Pages in Figma</span>
                <small class="text-body d-block">8:31 min</small>
              </label>
            </div>
            <div class="form-check d-flex align-items-center mb-4">
              <input class="form-check-input" type="checkbox" id="defCheck2" />
              <label for="defCheck2" class="form-check-label ms-4">
                <span class="mb-0 h6">2. What is Lo Fi Wireframe</span>
                <small class="text-body d-block">2 min</small>
              </label>
            </div>
            <div class="form-check d-flex align-items-center mb-4">
              <input class="form-check-input" type="checkbox" id="defCheck3" />
              <label for="defCheck3" class="form-check-label ms-4">
                <span class="mb-0 h6">3. How to use color in Figma</span>
                <small class="text-body d-block">5.9 min</small>
              </label>
            </div>
            <div class="form-check d-flex align-items-center">
              <input class="form-check-input" type="checkbox" id="defCheck4" />
              <label for="defCheck4" class="form-check-label ms-4">
                <span class="mb-0 h6">4. Frames vs Groups in Figma</span>
                <small class="text-body d-block">3.6 min</small>
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header border-bottom-0" id="headingThree">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#chapterThree" aria-expanded="false" aria-controls="chapterThree">
            <span class="d-flex flex-column">
              <span class="h5 mb-0">Build Beautiful Websites!</span>
              <span class="text-body fw-normal">0 / 6 | 4.4 min</span>
            </span>
          </button>
        </div>
        <div id="chapterThree" class="accordion-collapse collapse" data-bs-parent="#courseContent">
          <div class="accordion-body py-4 border-top">
            <div class="form-check d-flex align-items-center mb-4">
              <input class="form-check-input" type="checkbox" id="defCheck-01" />
              <label for="defCheck-01" class="form-check-label ms-4">
                <span class="mb-0 h6">1. Section & Div Block</span>
                <small class="text-body d-block">8:31 min</small>
              </label>
            </div>
            <div class="form-check d-flex align-items-center mb-4">
              <input class="form-check-input" type="checkbox" id="defCheck-02" />
              <label for="defCheck-02" class="form-check-label ms-4">
                <span class="mb-0 h6">2. Read-Only Version of Chat App</span>
                <small class="text-body d-block">8 min</small>
              </label>
            </div>
            <div class="form-check d-flex align-items-center mb-4">
              <input class="form-check-input" type="checkbox" id="defCheck-03" />
              <label for="defCheck-03" class="form-check-label ms-4">
                <span class="mb-0 h6">3. Webflow Autosave</span>
                <small class="text-body d-block">2.9 min</small>
              </label>
            </div>
            <div class="form-check d-flex align-items-center mb-4">
              <input class="form-check-input" type="checkbox" id="defCheck-04" />
              <label for="defCheck-04" class="form-check-label ms-4">
                <span class="mb-0 h6">4. Canvas Settings</span>
                <small class="text-body d-block">7.6 min</small>
              </label>
            </div>
            <div class="form-check d-flex align-items-center mb-4">
              <input class="form-check-input" type="checkbox" id="defCheck-05" />
              <label for="defCheck-05" class="form-check-label ms-4">
                <span class="mb-0 h6">5. HTML Tags</span>
                <small class="text-body d-block">10 min</small>
              </label>
            </div>
            <div class="form-check d-flex align-items-center">
              <input class="form-check-input" type="checkbox" id="defCheck-06" />
              <label for="defCheck-06" class="form-check-label ms-4">
                <span class="mb-0 h6">6. Footer (Chat App)</span>
                <small class="text-body d-block">9.10 min</small>
              </label>
            </div>

          </div>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header border-bottom-0" id="headingFour">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#chapterFour" aria-expanded="false" aria-controls="chapterFour">
            <span class="d-flex flex-column">
              <span class="h5 mb-0">Final Project</span>
              <span class="text-body fw-normal">2 / 3 | 4.4 min</span>
            </span>
          </button>
        </div>
        <div id="chapterFour" class="accordion-collapse collapse" data-bs-parent="#courseContent">
          <div class="accordion-body py-4 border-top">
            <div class="form-check d-flex align-items-center mb-4">
              <input class="form-check-input" type="checkbox" id="defCheck-101" checked="" />
              <label for="defCheck-101" class="form-check-label ms-4">
                <span class="mb-0 h6">1. Responsive Blog Site</span>
                <small class="text-body d-block">10:0 min</small>
              </label>
            </div>
            <div class="form-check d-flex align-items-center mb-4">
              <input class="form-check-input" type="checkbox" id="defCheck-102" checked="" />
              <label for="defCheck-102" class="form-check-label ms-4">
                <span class="mb-0 h6">2. Responsive Portfolio</span>
                <small class="text-body d-block">13:00 min</small>
              </label>
            </div>
            <div class="form-check d-flex align-items-center mb-4">
              <input class="form-check-input" type="checkbox" id="defCheck-103" />
              <label for="defCheck-103" class="form-check-label ms-4">
                <span class="mb-0 h6">3. Responsive eCommerce Website</span>
                <small class="text-body d-block">15 min</small>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

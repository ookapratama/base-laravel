<!-- Footer: Start -->
<footer class="landing-footer">
  <div class="footer-top position-relative overflow-hidden">
    <img src="{{asset('assets/img/front-pages/backgrounds/footer-bg.png')}}" alt="footer bg" class="footer-bg banner-bg-img" />
    <div class="container position-relative">
      <div class="row gx-0 gy-7 gx-sm-6 gx-lg-12">
        <div class="col-lg-5">
          <a href="{{url('front-pages/landing')}}" class="app-brand-link mb-6">
            <span class="app-brand-logo demo me-2">@include('_partials.macros',["width"=>25,"withbg"=>'var(--bs-primary)'])</span>
            <span class="app-brand-text demo footer-link fw-semibold ms-1">{{ config('variables.templateName') }}</span>
          </a>
          <p class="footer-text footer-logo-description mb-6">
            Most Powerful & Comprehensive 🤩 React NextJS Admin Template with Elegant Material Design & Unique
            Layouts.
          </p>
          <form>
            <div class="d-flex mt-2 gap-4">
              <div class="form-floating form-floating-outline w-px-250">
                <input type="text" class="form-control bg-transparent" id="newsletter-1" placeholder="Your email" />
                <label for="newsletter-1">Subscribe to newsletter</label>
              </div>
              <button type="submit" class="btn btn-primary">Subscribe</button>
            </div>
          </form>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <h6 class="footer-title mb-4 mb-lg-6">Demos</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-4">
              <a href="/demo-1" target="_blank" class="footer-link">Vertical Layout</a>
            </li>
            <li class="mb-4">
              <a href="/demo-5" target="_blank" class="footer-link">Horizontal Layout</a>
            </li>
            <li class="mb-4">
              <a href="/demo-2" target="_blank" class="footer-link">Bordered Layout</a>
            </li>
            <li class="mb-4">
              <a href="/demo-3" target="_blank" class="footer-link">Semi Dark Layout</a>
            </li>
            <li>
              <a href="/demo-4" target="_blank" class="footer-link">Dark Layout</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <h6 class="footer-title mb-4 mb-lg-6">Pages</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-4">
              <a href="{{url('/front-pages/pricing')}}" class="footer-link">Pricing</a>
            </li>
            <li class="mb-4">
              <a href="{{url('/front-pages/payment')}}" class="footer-link">Payment<span class="badge rounded-pill bg-primary ms-2">New</span></a>
            </li>
            <li class="mb-4">
              <a href="{{url('/front-pages/checkout')}}" class="footer-link">Checkout</a>
            </li>
            <li class="mb-4">
              <a href="{{url('/front-pages/help-center')}}" class="footer-link">Help Center</a>
            </li>
            <li>
              <a href="{{url('/auth/login-cover')}}" target="_blank" class="footer-link">Login/Register</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-4">
          <h6 class="footer-title mb-4 mb-lg-6">Download our app</h6>
          <a href="javascript:void(0);" class="d-block footer-link mb-4"><img src="{{asset('assets/img/front-pages/landing-page/apple-icon.png')}}" alt="apple icon" /></a>
          <a href="javascript:void(0);" class="d-block footer-link"><img src="{{asset('assets/img/front-pages/landing-page/google-play-icon.png')}}" alt="google play icon" /></a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom py-5">
    <div class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
      <div class="mb-2 mb-md-0">
        <span class="footer-text">©
          <script>document.write(new Date().getFullYear());</script>, Made with <i class="tf-icons ri-heart-fill text-danger"></i> by
        </span>
        <a href="{{config('variables.creatorUrl')}}" target="_blank" class="footer-link fw-medium footer-theme-link">{{config('variables.creatorName')}}</a>
      </div>
      <div>
        <a href="{{config('variables.githubUrl')}}" class="footer-link me-4" target="_blank"><i class="ri-github-fill"></i></a>
        <a href="{{config('variables.facebookUrl')}}" class="footer-link me-4" target="_blank"><i class="ri-facebook-circle-fill"></i></a>
        <a href="{{config('variables.twitterUrl')}}" class="footer-link me-4" target="_blank"><i class="ri-twitter-fill"></i></a>
        <a href="{{config('variables.instagramUrl')}}" class="footer-link" target="_blank"><i class='ri-instagram-line'></i></a>
      </div>
    </div>
  </div>
</footer>
<!-- Footer: End -->

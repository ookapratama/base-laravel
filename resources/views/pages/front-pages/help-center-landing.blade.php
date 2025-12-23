@extends('layouts/layoutMaster')
@php
  $configData = Helper::appClasses();
@endphp

@section('title', 'Help Center Landing - Front Pages')

@section('page-style')
@vite('resources/assets/vendor/scss/pages/front-page-help-center.scss')
@endsection

@section('content')
<!-- Help Center Header: Start -->
<section class="section-py first-section-pt help-center-header position-relative overflow-hidden">
  <img class="banner-bg-img z-n1" src="{{asset('assets/img/pages/header-'.$configData['style'].'.png')}}" alt="Help center header" data-app-light-img="pages/header-light.png" data-app-dark-img="pages/header-dark.png">
  <h4 class="text-center text-primary fw-semibold">Hello, how can we help?</h4>
  <div class="input-wrapper my-4 input-group input-group-merge position-relative mx-auto">
    <span class="input-group-text" id="basic-addon1"><i class="tf-icons ri-search-line"></i></span>
    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1" />
  </div>
  <p class="text-center px-4 mb-0">Common troubleshooting topics: eCommerce, Blogging to payment</p>
</section>
<!-- Help Center Header: End -->

<!-- Popular Articles: Start -->
<section class="section-py">
  <div class="container">
    <h4 class="text-center mb-6">Popular Articles</h4>
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="row gy-6 gy-md-0">
          <div class="col-md-4">
            <div class="card border shadow-none">
              <div class="card-body text-center">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.2">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M48.9019 33.6218L41.7878 25.0804C42.0597 30.314 40.7683 36.4086 36.7808 43.364L43.5777 48.8015C43.8194 48.9935 44.1061 49.1205 44.4106 49.1706C44.7151 49.2207 45.0274 49.1922 45.3178 49.0879C45.6083 48.9835 45.8673 48.8067 46.0702 48.5742C46.2732 48.3417 46.4134 48.0612 46.4777 47.7593L49.2644 35.1625C49.3316 34.8954 49.3337 34.6161 49.2706 34.348C49.2076 34.08 49.0811 33.8309 48.9019 33.6218ZM10.2956 33.7578L17.4097 25.239C17.1378 30.4726 18.4292 36.5672 22.4167 43.5L15.6198 48.9375C15.3797 49.1294 15.0947 49.257 14.7916 49.3084C14.4885 49.3598 14.1773 49.3333 13.8873 49.2314C13.5973 49.1294 13.338 48.9554 13.1338 48.7256C12.9295 48.4958 12.7871 48.2179 12.7198 47.9179L9.93313 35.2984C9.86594 35.0313 9.8638 34.7521 9.92688 34.484C9.98995 34.2159 10.1164 33.9669 10.2956 33.7578Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M48.9019 33.6218L41.7878 25.0804C42.0597 30.314 40.7683 36.4086 36.7808 43.364L43.5777 48.8015C43.8194 48.9935 44.1061 49.1205 44.4106 49.1706C44.7151 49.2207 45.0274 49.1922 45.3178 49.0879C45.6083 48.9835 45.8673 48.8067 46.0702 48.5742C46.2732 48.3417 46.4134 48.0612 46.4777 47.7593L49.2644 35.1625C49.3316 34.8954 49.3337 34.6161 49.2706 34.348C49.2076 34.08 49.0811 33.8309 48.9019 33.6218ZM10.2956 33.7578L17.4097 25.239C17.1378 30.4726 18.4292 36.5672 22.4167 43.5L15.6198 48.9375C15.3797 49.1294 15.0947 49.257 14.7916 49.3084C14.4885 49.3598 14.1773 49.3333 13.8873 49.2314C13.5973 49.1294 13.338 48.9554 13.1338 48.7256C12.9295 48.4958 12.7871 48.2179 12.7198 47.9179L9.93313 35.2984C9.86594 35.0313 9.8638 34.7521 9.92688 34.484C9.98995 34.2159 10.1164 33.9669 10.2956 33.7578Z" fill="currentColor" fill-opacity="0.2"></path>
                  </g>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M27.9017 3.71102C28.3979 3.30011 29.0221 3.07513 29.6666 3.07513C30.3127 3.07513 30.9383 3.30117 31.435 3.71394C33.6315 5.50224 38.386 9.93871 41.0105 16.7606C41.9219 19.1296 42.5713 21.7739 42.7735 24.6785L49.8022 33.113C50.0828 33.4423 50.2809 33.8338 50.38 34.255C50.4785 34.6735 50.4764 35.1093 50.374 35.5267L47.5901 48.1336L47.5894 48.1367C47.485 48.6022 47.264 49.0335 46.9471 49.39C46.6302 49.7465 46.2278 50.0166 45.7778 50.1748C45.3278 50.333 44.8449 50.3742 44.3746 50.2944C43.9043 50.2146 43.4621 50.0165 43.0894 49.7188L43.0889 49.7184L36.566 44.5H22.7675L16.2445 49.7184L16.2441 49.7188C15.8714 50.0165 15.4291 50.2146 14.9588 50.2944C14.4885 50.3742 14.0057 50.333 13.5556 50.1748C13.1056 50.0166 12.7032 49.7465 12.3863 49.39C12.0694 49.0335 11.8484 48.6022 11.7441 48.1367L11.7434 48.1336L8.95943 35.5267C8.85707 35.1093 8.85499 34.6735 8.95346 34.255C9.05262 33.8335 9.25088 33.4419 9.53173 33.1125L16.4274 24.8553C16.6112 21.877 17.2734 19.1695 18.2135 16.7491C20.8639 9.92541 25.6801 5.4896 27.9017 3.71102ZM40.8041 25.2385C40.7893 25.1573 40.7846 25.0748 40.7899 24.993C40.6159 22.2127 40.0004 19.7051 39.1438 17.4787C36.6951 11.1136 32.2331 6.94203 30.1682 5.26158L30.1583 5.25355L30.1584 5.25349C30.0204 5.13826 29.8464 5.07513 29.6666 5.07513C29.4869 5.07513 29.3128 5.13826 29.1748 5.25349L29.1585 5.26684C27.0721 6.93594 22.5504 11.1072 20.0778 17.4732C19.1887 19.7623 18.5587 22.3492 18.4096 25.2244C18.4102 25.2674 18.4081 25.3106 18.4032 25.3535C18.1745 30.253 19.3435 35.9842 22.9982 42.5H36.3292C39.938 35.9325 41.0647 30.1631 40.8041 25.2385ZM48.2696 34.398L42.8122 27.8492C42.6094 32.4348 41.2748 37.5835 38.2005 43.2464L44.3378 48.1563C44.4455 48.2423 44.5733 48.2995 44.7091 48.3226C44.845 48.3456 44.9845 48.3337 45.1145 48.288C45.2445 48.2423 45.3607 48.1643 45.4523 48.0613C45.5436 47.9586 45.6073 47.8344 45.6376 47.7004L45.6378 47.6992L48.4239 35.0828L48.4272 35.0682L48.4305 35.0545C48.4587 34.9425 48.4596 34.8255 48.4332 34.7131C48.4067 34.6007 48.3537 34.4963 48.2786 34.4086L48.2695 34.3981L48.2696 34.398ZM16.4139 27.9916L11.0632 34.3988L11.0549 34.4087L11.0549 34.4086C10.9798 34.4963 10.9267 34.6007 10.9003 34.7131C10.8738 34.8255 10.8747 34.9425 10.9029 35.0545C10.9053 35.0639 10.9075 35.0734 10.9096 35.0828L13.6956 47.6992L13.6959 47.7005C13.7262 47.8345 13.7899 47.9586 13.8812 48.0613C13.9727 48.1643 14.089 48.2423 14.219 48.288C14.349 48.3337 14.4885 48.3456 14.6243 48.3226C14.7602 48.2995 14.888 48.2423 14.9956 48.1563L21.1271 43.2511C18.0233 37.6471 16.6517 32.5443 16.4139 27.9916ZM25.0417 50.75C25.0417 50.1977 25.4895 49.75 26.0417 49.75H33.2917C33.844 49.75 34.2917 50.1977 34.2917 50.75C34.2917 51.3023 33.844 51.75 33.2917 51.75H26.0417C25.4895 51.75 25.0417 51.3023 25.0417 50.75ZM32.3855 21.75C32.3855 23.2515 31.1683 24.4688 29.6667 24.4688C28.1652 24.4688 26.948 23.2515 26.948 21.75C26.948 20.2485 28.1652 19.0313 29.6667 19.0313C31.1683 19.0313 32.3855 20.2485 32.3855 21.75Z" fill="currentColor"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M27.9017 3.71102C28.3979 3.30011 29.0221 3.07513 29.6666 3.07513C30.3127 3.07513 30.9383 3.30117 31.435 3.71394C33.6315 5.50224 38.386 9.93871 41.0105 16.7606C41.9219 19.1296 42.5713 21.7739 42.7735 24.6785L49.8022 33.113C50.0828 33.4423 50.2809 33.8338 50.38 34.255C50.4785 34.6735 50.4764 35.1093 50.374 35.5267L47.5901 48.1336L47.5894 48.1367C47.485 48.6022 47.264 49.0335 46.9471 49.39C46.6302 49.7465 46.2278 50.0166 45.7778 50.1748C45.3278 50.333 44.8449 50.3742 44.3746 50.2944C43.9043 50.2146 43.4621 50.0165 43.0894 49.7188L43.0889 49.7184L36.566 44.5H22.7675L16.2445 49.7184L16.2441 49.7188C15.8714 50.0165 15.4291 50.2146 14.9588 50.2944C14.4885 50.3742 14.0057 50.333 13.5556 50.1748C13.1056 50.0166 12.7032 49.7465 12.3863 49.39C12.0694 49.0335 11.8484 48.6022 11.7441 48.1367L11.7434 48.1336L8.95943 35.5267C8.85707 35.1093 8.85499 34.6735 8.95346 34.255C9.05262 33.8335 9.25088 33.4419 9.53173 33.1125L16.4274 24.8553C16.6112 21.877 17.2734 19.1695 18.2135 16.7491C20.8639 9.92541 25.6801 5.4896 27.9017 3.71102ZM40.8041 25.2385C40.7893 25.1573 40.7846 25.0748 40.7899 24.993C40.6159 22.2127 40.0004 19.7051 39.1438 17.4787C36.6951 11.1136 32.2331 6.94203 30.1682 5.26158L30.1583 5.25355L30.1584 5.25349C30.0204 5.13826 29.8464 5.07513 29.6666 5.07513C29.4869 5.07513 29.3128 5.13826 29.1748 5.25349L29.1585 5.26684C27.0721 6.93594 22.5504 11.1072 20.0778 17.4732C19.1887 19.7623 18.5587 22.3492 18.4096 25.2244C18.4102 25.2674 18.4081 25.3106 18.4032 25.3535C18.1745 30.253 19.3435 35.9842 22.9982 42.5H36.3292C39.938 35.9325 41.0647 30.1631 40.8041 25.2385ZM48.2696 34.398L42.8122 27.8492C42.6094 32.4348 41.2748 37.5835 38.2005 43.2464L44.3378 48.1563C44.4455 48.2423 44.5733 48.2995 44.7091 48.3226C44.845 48.3456 44.9845 48.3337 45.1145 48.288C45.2445 48.2423 45.3607 48.1643 45.4523 48.0613C45.5436 47.9586 45.6073 47.8344 45.6376 47.7004L45.6378 47.6992L48.4239 35.0828L48.4272 35.0682L48.4305 35.0545C48.4587 34.9425 48.4596 34.8255 48.4332 34.7131C48.4067 34.6007 48.3537 34.4963 48.2786 34.4086L48.2695 34.3981L48.2696 34.398ZM16.4139 27.9916L11.0632 34.3988L11.0549 34.4087L11.0549 34.4086C10.9798 34.4963 10.9267 34.6007 10.9003 34.7131C10.8738 34.8255 10.8747 34.9425 10.9029 35.0545C10.9053 35.0639 10.9075 35.0734 10.9096 35.0828L13.6956 47.6992L13.6959 47.7005C13.7262 47.8345 13.7899 47.9586 13.8812 48.0613C13.9727 48.1643 14.089 48.2423 14.219 48.288C14.349 48.3337 14.4885 48.3456 14.6243 48.3226C14.7602 48.2995 14.888 48.2423 14.9956 48.1563L21.1271 43.2511C18.0233 37.6471 16.6517 32.5443 16.4139 27.9916ZM25.0417 50.75C25.0417 50.1977 25.4895 49.75 26.0417 49.75H33.2917C33.844 49.75 34.2917 50.1977 34.2917 50.75C34.2917 51.3023 33.844 51.75 33.2917 51.75H26.0417C25.4895 51.75 25.0417 51.3023 25.0417 50.75ZM32.3855 21.75C32.3855 23.2515 31.1683 24.4688 29.6667 24.4688C28.1652 24.4688 26.948 23.2515 26.948 21.75C26.948 20.2485 28.1652 19.0313 29.6667 19.0313C31.1683 19.0313 32.3855 20.2485 32.3855 21.75Z" fill="currentColor" fill-opacity="0.2"></path>
                </svg>
                <h5 class="my-3">Getting Started</h5>
                <p class="mb-3"> Whether you're new or you're a power user, this article will… </p>
                <a class="btn btn-outline-primary" href="{{url('front-pages/help-center-article')}}">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card border shadow-none">
              <div class="card-body text-center">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M32.2689 8.56722C31.7876 9.05354 31.3688 9.84814 31.029 10.8704C30.6946 11.8767 30.4652 13.0152 30.31 14.1032C30.1553 15.1872 30.0776 16.197 30.0386 16.9371C30.0358 16.991 30.0332 17.0434 30.0307 17.0943C30.0816 17.0918 30.134 17.0892 30.1879 17.0864C30.928 17.0475 31.9378 16.9697 33.0218 16.815C34.1098 16.6598 35.2483 16.4304 36.2546 16.096C37.2769 15.7562 38.0715 15.3374 38.5578 14.8561C39.3907 14.0223 39.8587 12.8919 39.8587 11.7133C39.8587 10.5339 39.3901 9.4028 38.5562 8.56883C37.7222 7.73487 36.5911 7.26636 35.4117 7.26636C34.2331 7.26636 33.1027 7.73427 32.2689 8.56722ZM39.2633 15.5649L39.9704 16.272C41.1794 15.0629 41.8587 13.4231 41.8587 11.7133C41.8587 10.0035 41.1794 8.36365 39.9704 7.15462C38.7614 5.94559 37.1216 5.26636 35.4117 5.26636C33.7019 5.26636 32.0621 5.94559 30.853 7.15461L30.8499 7.15774C30.0518 7.96296 29.5111 9.09639 29.1311 10.2396C29.0855 10.3767 29.0418 10.5154 28.9999 10.6551C28.958 10.5154 28.9143 10.3767 28.8688 10.2396C28.4888 9.09639 27.9481 7.96296 27.1499 7.15774L27.1468 7.15462C25.9378 5.94559 24.298 5.26636 22.5882 5.26636C20.8783 5.26636 19.2385 5.94559 18.0295 7.15462C16.8205 8.36366 16.1412 10.0035 16.1412 11.7133C16.1412 13.4231 16.8205 15.0629 18.0295 16.272L18.7366 15.5649L18.0326 16.2751C18.3589 16.5985 18.7391 16.8797 19.152 17.125H9.0625C7.5092 17.125 6.25 18.3842 6.25 19.9375V27.1875C6.25 28.7408 7.5092 30 9.0625 30H9.875V45.3125C9.875 46.0584 10.1713 46.7738 10.6988 47.3012C11.2262 47.8287 11.9416 48.125 12.6875 48.125H29H45.3125C46.0584 48.125 46.7738 47.8287 47.3012 47.3012C47.8287 46.7738 48.125 46.0584 48.125 45.3125V30H48.9375C50.4908 30 51.75 28.7408 51.75 27.1875V19.9375C51.75 18.3842 50.4908 17.125 48.9375 17.125H38.8479C39.2608 16.8797 39.641 16.5985 39.9673 16.2751L39.2633 15.5649ZM9.0625 19.125C8.61377 19.125 8.25 19.4888 8.25 19.9375V27.1875C8.25 27.6362 8.61377 28 9.0625 28H10.875H28V19.125H9.0625ZM30 19.125V28H47.125H48.9375C49.3862 28 49.75 27.6362 49.75 27.1875V19.9375C49.75 19.4888 49.3862 19.125 48.9375 19.125H30ZM28 30H11.875V45.3125C11.875 45.528 11.9606 45.7347 12.113 45.887C12.2653 46.0394 12.472 46.125 12.6875 46.125H28V30ZM30 46.125V30H46.125V45.3125C46.125 45.528 46.0394 45.7347 45.887 45.887C45.7347 46.0394 45.528 46.125 45.3125 46.125H30ZM21.7452 16.096C20.723 15.7562 19.9284 15.3374 19.4421 14.8562C18.6091 14.0223 18.1412 12.8919 18.1412 11.7133C18.1412 10.5339 18.6097 9.4028 19.4437 8.56883C20.2777 7.73487 21.4088 7.26636 22.5882 7.26636C23.7668 7.26636 24.8972 7.73428 25.731 8.56725C26.2123 9.05357 26.6311 9.84816 26.9708 10.8704C27.3053 11.8767 27.5346 13.0152 27.6899 14.1032C27.8445 15.1872 27.9223 16.197 27.9613 16.9371C27.9641 16.991 27.9667 17.0434 27.9691 17.0943C27.9183 17.0918 27.8659 17.0892 27.812 17.0864C27.0719 17.0475 26.0621 16.9697 24.978 16.815C23.89 16.6598 22.7516 16.4304 21.7452 16.096Z" fill="currentColor"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M32.2689 8.56722C31.7876 9.05354 31.3688 9.84814 31.029 10.8704C30.6946 11.8767 30.4652 13.0152 30.31 14.1032C30.1553 15.1872 30.0776 16.197 30.0386 16.9371C30.0358 16.991 30.0332 17.0434 30.0307 17.0943C30.0816 17.0918 30.134 17.0892 30.1879 17.0864C30.928 17.0475 31.9378 16.9697 33.0218 16.815C34.1098 16.6598 35.2483 16.4304 36.2546 16.096C37.2769 15.7562 38.0715 15.3374 38.5578 14.8561C39.3907 14.0223 39.8587 12.8919 39.8587 11.7133C39.8587 10.5339 39.3901 9.4028 38.5562 8.56883C37.7222 7.73487 36.5911 7.26636 35.4117 7.26636C34.2331 7.26636 33.1027 7.73427 32.2689 8.56722ZM39.2633 15.5649L39.9704 16.272C41.1794 15.0629 41.8587 13.4231 41.8587 11.7133C41.8587 10.0035 41.1794 8.36365 39.9704 7.15462C38.7614 5.94559 37.1216 5.26636 35.4117 5.26636C33.7019 5.26636 32.0621 5.94559 30.853 7.15461L30.8499 7.15774C30.0518 7.96296 29.5111 9.09639 29.1311 10.2396C29.0855 10.3767 29.0418 10.5154 28.9999 10.6551C28.958 10.5154 28.9143 10.3767 28.8688 10.2396C28.4888 9.09639 27.9481 7.96296 27.1499 7.15774L27.1468 7.15462C25.9378 5.94559 24.298 5.26636 22.5882 5.26636C20.8783 5.26636 19.2385 5.94559 18.0295 7.15462C16.8205 8.36366 16.1412 10.0035 16.1412 11.7133C16.1412 13.4231 16.8205 15.0629 18.0295 16.272L18.7366 15.5649L18.0326 16.2751C18.3589 16.5985 18.7391 16.8797 19.152 17.125H9.0625C7.5092 17.125 6.25 18.3842 6.25 19.9375V27.1875C6.25 28.7408 7.5092 30 9.0625 30H9.875V45.3125C9.875 46.0584 10.1713 46.7738 10.6988 47.3012C11.2262 47.8287 11.9416 48.125 12.6875 48.125H29H45.3125C46.0584 48.125 46.7738 47.8287 47.3012 47.3012C47.8287 46.7738 48.125 46.0584 48.125 45.3125V30H48.9375C50.4908 30 51.75 28.7408 51.75 27.1875V19.9375C51.75 18.3842 50.4908 17.125 48.9375 17.125H38.8479C39.2608 16.8797 39.641 16.5985 39.9673 16.2751L39.2633 15.5649ZM9.0625 19.125C8.61377 19.125 8.25 19.4888 8.25 19.9375V27.1875C8.25 27.6362 8.61377 28 9.0625 28H10.875H28V19.125H9.0625ZM30 19.125V28H47.125H48.9375C49.3862 28 49.75 27.6362 49.75 27.1875V19.9375C49.75 19.4888 49.3862 19.125 48.9375 19.125H30ZM28 30H11.875V45.3125C11.875 45.528 11.9606 45.7347 12.113 45.887C12.2653 46.0394 12.472 46.125 12.6875 46.125H28V30ZM30 46.125V30H46.125V45.3125C46.125 45.528 46.0394 45.7347 45.887 45.887C45.7347 46.0394 45.528 46.125 45.3125 46.125H30ZM21.7452 16.096C20.723 15.7562 19.9284 15.3374 19.4421 14.8562C18.6091 14.0223 18.1412 12.8919 18.1412 11.7133C18.1412 10.5339 18.6097 9.4028 19.4437 8.56883C20.2777 7.73487 21.4088 7.26636 22.5882 7.26636C23.7668 7.26636 24.8972 7.73428 25.731 8.56725C26.2123 9.05357 26.6311 9.84816 26.9708 10.8704C27.3053 11.8767 27.5346 13.0152 27.6899 14.1032C27.8445 15.1872 27.9223 16.197 27.9613 16.9371C27.9641 16.991 27.9667 17.0434 27.9691 17.0943C27.9183 17.0918 27.8659 17.0892 27.812 17.0864C27.0719 17.0475 26.0621 16.9697 24.978 16.815C23.89 16.6598 22.7516 16.4304 21.7452 16.096Z" fill="white" fill-opacity="0.2"></path>
                  <g opacity="0.2">
                    <path d="M47.125 29V45.3125C47.125 45.7932 46.934 46.2542 46.5941 46.5941C46.2542 46.934 45.7932 47.125 45.3125 47.125H12.6875C12.2068 47.125 11.7458 46.934 11.4059 46.5941C11.066 46.2542 10.875 45.7932 10.875 45.3125V29H47.125Z" fill="currentColor"></path>
                    <path d="M47.125 29V45.3125C47.125 45.7932 46.934 46.2542 46.5941 46.5941C46.2542 46.934 45.7932 47.125 45.3125 47.125H12.6875C12.2068 47.125 11.7458 46.934 11.4059 46.5941C11.066 46.2542 10.875 45.7932 10.875 45.3125V29H47.125Z" fill="white" fill-opacity="0.2"></path>
                  </g>
                </svg>
                <h5 class="my-3">First Steps</h5>
                <p class="mb-3"> Are you a new customer wondering how to get started? </p>
                <a class="btn btn-outline-primary" href="{{url('front-pages/help-center-article')}}">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card border shadow-none">
              <div class="card-body text-center">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.2">
                    <path d="M50.9702 12.6875H7.69678C6.6332 12.6875 5.771 13.5497 5.771 14.6133V43.3867C5.771 44.4503 6.6332 45.3125 7.69678 45.3125H50.9702C52.0338 45.3125 52.896 44.4503 52.896 43.3867V14.6133C52.896 13.5497 52.0338 12.6875 50.9702 12.6875Z" fill="currentColor"></path>
                    <path d="M50.9702 12.6875H7.69678C6.6332 12.6875 5.771 13.5497 5.771 14.6133V43.3867C5.771 44.4503 6.6332 45.3125 7.69678 45.3125H50.9702C52.0338 45.3125 52.896 44.4503 52.896 43.3867V14.6133C52.896 13.5497 52.0338 12.6875 50.9702 12.6875Z" fill="white" fill-opacity="0.2"></path>
                  </g>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.021 14.6133C7.021 14.2401 7.32355 13.9375 7.69678 13.9375H50.9702C51.3434 13.9375 51.646 14.2401 51.646 14.6133V43.3867C51.646 43.7599 51.3434 44.0625 50.9702 44.0625H7.69678C7.32355 44.0625 7.021 43.7599 7.021 43.3867V14.6133ZM7.69678 11.4375C5.94284 11.4375 4.521 12.8593 4.521 14.6133V43.3867C4.521 45.1407 5.94284 46.5625 7.69678 46.5625H50.9702C52.7242 46.5625 54.146 45.1407 54.146 43.3867V14.6133C54.146 12.8593 52.7242 11.4375 50.9702 11.4375H7.69678ZM13.021 20.75C12.4687 20.75 12.021 21.1977 12.021 21.75C12.021 22.3023 12.4687 22.75 13.021 22.75H45.646C46.1983 22.75 46.646 22.3023 46.646 21.75C46.646 21.1977 46.1983 20.75 45.646 20.75H13.021ZM13.021 28C12.4687 28 12.021 28.4477 12.021 29C12.021 29.5523 12.4687 30 13.021 30H45.646C46.1983 30 46.646 29.5523 46.646 29C46.646 28.4477 46.1983 28 45.646 28H13.021ZM12.021 36.25C12.021 35.6977 12.4687 35.25 13.021 35.25H14.8335C15.3858 35.25 15.8335 35.6977 15.8335 36.25C15.8335 36.8023 15.3858 37.25 14.8335 37.25H13.021C12.4687 37.25 12.021 36.8023 12.021 36.25ZM22.0835 35.25C21.5312 35.25 21.0835 35.6977 21.0835 36.25C21.0835 36.8023 21.5312 37.25 22.0835 37.25H36.5835C37.1358 37.25 37.5835 36.8023 37.5835 36.25C37.5835 35.6977 37.1358 35.25 36.5835 35.25H22.0835ZM42.8335 36.25C42.8335 35.6977 43.2812 35.25 43.8335 35.25H45.646C46.1983 35.25 46.646 35.6977 46.646 36.25C46.646 36.8023 46.1983 37.25 45.646 37.25H43.8335C43.2812 37.25 42.8335 36.8023 42.8335 36.25Z" fill="currentColor"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.021 14.6133C7.021 14.2401 7.32355 13.9375 7.69678 13.9375H50.9702C51.3434 13.9375 51.646 14.2401 51.646 14.6133V43.3867C51.646 43.7599 51.3434 44.0625 50.9702 44.0625H7.69678C7.32355 44.0625 7.021 43.7599 7.021 43.3867V14.6133ZM7.69678 11.4375C5.94284 11.4375 4.521 12.8593 4.521 14.6133V43.3867C4.521 45.1407 5.94284 46.5625 7.69678 46.5625H50.9702C52.7242 46.5625 54.146 45.1407 54.146 43.3867V14.6133C54.146 12.8593 52.7242 11.4375 50.9702 11.4375H7.69678ZM13.021 20.75C12.4687 20.75 12.021 21.1977 12.021 21.75C12.021 22.3023 12.4687 22.75 13.021 22.75H45.646C46.1983 22.75 46.646 22.3023 46.646 21.75C46.646 21.1977 46.1983 20.75 45.646 20.75H13.021ZM13.021 28C12.4687 28 12.021 28.4477 12.021 29C12.021 29.5523 12.4687 30 13.021 30H45.646C46.1983 30 46.646 29.5523 46.646 29C46.646 28.4477 46.1983 28 45.646 28H13.021ZM12.021 36.25C12.021 35.6977 12.4687 35.25 13.021 35.25H14.8335C15.3858 35.25 15.8335 35.6977 15.8335 36.25C15.8335 36.8023 15.3858 37.25 14.8335 37.25H13.021C12.4687 37.25 12.021 36.8023 12.021 36.25ZM22.0835 35.25C21.5312 35.25 21.0835 35.6977 21.0835 36.25C21.0835 36.8023 21.5312 37.25 22.0835 37.25H36.5835C37.1358 37.25 37.5835 36.8023 37.5835 36.25C37.5835 35.6977 37.1358 35.25 36.5835 35.25H22.0835ZM42.8335 36.25C42.8335 35.6977 43.2812 35.25 43.8335 35.25H45.646C46.1983 35.25 46.646 35.6977 46.646 36.25C46.646 36.8023 46.1983 37.25 45.646 37.25H43.8335C43.2812 37.25 42.8335 36.8023 42.8335 36.25Z" fill="white" fill-opacity="0.2"></path>
                </svg>
                <h5 class="my-3">Add External Content</h5>
                <p class="mb-3"> This article will show you how to expand the functionality of... </p>
                <a class="btn btn-outline-primary" href="{{url('front-pages/help-center-article')}}">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popular Articles: End -->

<!-- Knowledge Base: Start -->
<section class="section-py bg-body">
  <div class="container">
    <h4 class="text-center mb-6">Knowledge Base</h4>
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="row g-6">
          <div class="col-md-4 col-ms-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm flex-shrink-0 me-2">
                    <span class="avatar-initial bg-label-primary rounded-3"><i class="tf-icons ri-shopping-cart-line ri-20px"></i></span>
                  </div>
                  <h5 class="mb-0 ms-1">Buying</h5>
                </div>
                <ul class="list-unstyled my-6">
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        What are Favourites?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        How do I purchase an item?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        How do i add or change my details?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        How do refunds work?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        Can I Get A Refund?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        I'm trying to find a specific item
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                </ul>
                <p class="mb-0 fw-medium mt-6">
                  <a href="{{url('front-pages/help-center-article')}}" class="d-flex align-items-center">
                    <span class="me-3">See all 10 articles</span>
                    <i class="tf-icons ri-arrow-right-line scaleX-n1-rtl"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-ms-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm flex-shrink-0 me-2">
                    <span class="avatar-initial bg-label-primary rounded-3"><i class="tf-icons ri-question-line ri-20px"></i></span>
                  </div>
                  <h5 class="mb-0 ms-1">Item Support</h5>
                </div>
                <ul class="list-unstyled my-6">
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        What is Item Support?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        How to contact an author
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        Where Is My Purchase Code?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        Extend or renew Item Support
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        Item Support FAQ
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        Why has my item been removed?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                </ul>
                <p class="mb-0 fw-medium mt-6">
                  <a href="{{url('front-pages/help-center-article')}}" class="d-flex align-items-center">
                    <span class="me-3">See all 14 articles</span>
                    <i class="tf-icons ri-arrow-right-line scaleX-n1-rtl"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-ms-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm flex-shrink-0 me-2">
                    <span class="avatar-initial bg-label-primary rounded-3"><i class="tf-icons ri-file-text-line ri-20px"></i></span>
                  </div>
                  <h5 class="mb-0 ms-1">Licenses</h5>
                </div>
                <ul class="list-unstyled my-6">
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        Can I use the same license for the same item on multiple sites?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        How do licenses work for any plugins
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        For logo what license do I need?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        I’m making a test site - it’s not for a client. Which license do I need?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        which license do I need?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        I want to make multiple end products
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                </ul>
                <p class="mb-0 fw-medium mt-6">
                  <a href="{{url('front-pages/help-center-article')}}" class="d-flex align-items-center">
                    <span class="me-3">See all 8 articles</span>
                    <i class="tf-icons ri-arrow-right-line scaleX-n1-rtl"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-ms-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm flex-shrink-0 me-2">
                    <span class="avatar-initial bg-label-primary rounded-3"><i class="tf-icons ri-palette-line ri-20px"></i></span>
                  </div>
                  <h5 class="mb-0 ms-1">Template Kits</h5>
                </div>
                <ul class="list-unstyled my-6">
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        Template Kits
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        Elementor Template Kits: PHP Zip File Missing
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        Template Kits - Imported template is blank or broken
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        Troubleshooting Import Problems
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        How to use the WordPress Plugin
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        How to use the Template Kit Importer Plugin
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                </ul>
                <p class="mb-0 fw-medium mt-6">
                  <a href="{{url('front-pages/help-center-article')}}" class="d-flex align-items-center">
                    <span class="me-3">See all 5 articles</span>
                    <i class="tf-icons ri-arrow-right-line scaleX-n1-rtl"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-ms-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm flex-shrink-0 me-2">
                    <span class="avatar-initial bg-label-primary rounded-3"><i class="tf-icons ri-lock-line ri-20px"></i></span>
                  </div>
                  <h5 class="mb-0 ms-1">Account & Password</h5>
                </div>
                <ul class="list-unstyled my-6">
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        Signing in with a social account
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        Locked Out of Account
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        I'm not receiving the verification email
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        Forgotten Username Or Password
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        New password not accepted
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        What is Sign In Verification?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                </ul>
                <p class="mb-0 fw-medium mt-6">
                  <a href="{{url('front-pages/help-center-article')}}" class="d-flex align-items-center">
                    <span class="me-3">See all 16 articles</span>
                    <i class="tf-icons ri-arrow-right-line scaleX-n1-rtl"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-ms-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm flex-shrink-0 me-2">
                    <span class="avatar-initial bg-label-primary rounded-3"><i class="tf-icons ri-user-line ri-20px"></i></span>
                  </div>
                  <h5 class="mb-0 ms-1">Account Settings</h5>
                </div>
                <ul class="list-unstyled my-6">
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        How do I change my password?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        How do I change my username?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        How do I close my account?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        How do I change my email address?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        How can I regain access to my account?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('front-pages/help-center-article')}}" class="text-heading d-flex justify-content-between align-items-center">
                      <span class="text-truncate me-1">
                        Are RSS feeds available on Market?
                      </span>
                      <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                    </a>
                  </li>
                </ul>
                <p class="mb-0 fw-medium mt-6">
                  <a href="{{url('front-pages/help-center-article')}}" class="d-flex align-items-center">
                    <span class="me-3">See all 12 articles</span>
                    <i class="tf-icons ri-arrow-right-line scaleX-n1-rtl"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Knowledge Base: End -->

<!-- Keep Learning: Start -->
<section class="section-py">
  <div class="container">
    <h4 class="text-center mb-6">Keep Learning</h4>
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="row gy-6 gy-md-0">
          <div class="col-md-4">
            <div class="card border shadow-none">
              <div class="card-body text-center">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.2">
                    <path d="M9.72925 39.875V16.3125C9.72925 15.3511 10.1112 14.4291 10.791 13.7492C11.4708 13.0694 12.3928 12.6875 13.3542 12.6875H45.9792C46.9407 12.6875 47.8627 13.0694 48.5425 13.7492C49.2223 14.4291 49.6042 15.3511 49.6042 16.3125V39.875H9.72925Z" fill="currentColor"></path>
                    <path d="M9.72925 39.875V16.3125C9.72925 15.3511 10.1112 14.4291 10.791 13.7492C11.4708 13.0694 12.3928 12.6875 13.3542 12.6875H45.9792C46.9407 12.6875 47.8627 13.0694 48.5425 13.7492C49.2223 14.4291 49.6042 15.3511 49.6042 16.3125V39.875H9.72925Z" fill="currentColor" fill-opacity="0.2"></path>
                  </g>
                  <path d="M8.72925 39.875C8.72925 40.4273 9.17696 40.875 9.72925 40.875C10.2815 40.875 10.7292 40.4273 10.7292 39.875H8.72925ZM13.3542 12.6875V11.6875V12.6875ZM45.9792 12.6875V11.6875V12.6875ZM48.6042 39.875C48.6042 40.4273 49.052 40.875 49.6042 40.875C50.1565 40.875 50.6042 40.4273 50.6042 39.875H48.6042ZM6.10425 39.875V38.875C5.55196 38.875 5.10425 39.3227 5.10425 39.875H6.10425ZM53.2292 39.875H54.2292C54.2292 39.3227 53.7815 38.875 53.2292 38.875V39.875ZM6.10425 43.5H5.10425H6.10425ZM33.2917 20.9375C33.844 20.9375 34.2917 20.4898 34.2917 19.9375C34.2917 19.3852 33.844 18.9375 33.2917 18.9375V20.9375ZM26.0417 18.9375C25.4895 18.9375 25.0417 19.3852 25.0417 19.9375C25.0417 20.4898 25.4895 20.9375 26.0417 20.9375V18.9375ZM10.7292 39.875V16.3125H8.72925V39.875H10.7292ZM10.7292 16.3125C10.7292 15.6163 11.0058 14.9486 11.4981 14.4563L10.0839 13.0421C9.21652 13.9095 8.72925 15.0859 8.72925 16.3125H10.7292ZM11.4981 14.4563C11.9904 13.9641 12.6581 13.6875 13.3542 13.6875L13.3542 11.6875C12.1276 11.6875 10.9512 12.1748 10.0839 13.0421L11.4981 14.4563ZM13.3542 13.6875H45.9792V11.6875H13.3542V13.6875ZM45.9792 13.6875C46.6754 13.6875 47.3431 13.9641 47.8354 14.4563L49.2496 13.0421C48.3823 12.1748 47.2059 11.6875 45.9792 11.6875V13.6875ZM47.8354 14.4563C48.3277 14.9486 48.6042 15.6163 48.6042 16.3125H50.6042C50.6042 15.0859 50.117 13.9095 49.2496 13.0421L47.8354 14.4563ZM48.6042 16.3125V39.875H50.6042V16.3125H48.6042ZM6.10425 40.875H53.2292V38.875H6.10425V40.875ZM52.2292 39.875V43.5H54.2292V39.875H52.2292ZM52.2292 43.5C52.2292 44.1962 51.9527 44.8639 51.4604 45.3562L52.8746 46.7704C53.742 45.903 54.2292 44.7266 54.2292 43.5H52.2292ZM51.4604 45.3562C50.9681 45.8484 50.3004 46.125 49.6042 46.125V48.125C50.8309 48.125 52.0073 47.6377 52.8746 46.7704L51.4604 45.3562ZM49.6042 46.125H9.72925V48.125H49.6042V46.125ZM9.72925 46.125C9.03305 46.125 8.36538 45.8484 7.87309 45.3562L6.45888 46.7704C7.32623 47.6377 8.50262 48.125 9.72925 48.125V46.125ZM7.87309 45.3562C7.38081 44.8639 7.10425 44.1962 7.10425 43.5H5.10425C5.10425 44.7266 5.59152 45.903 6.45888 46.7704L7.87309 45.3562ZM7.10425 43.5V39.875H5.10425V43.5H7.10425ZM33.2917 18.9375H26.0417V20.9375H33.2917V18.9375Z" fill="currentColor"></path>
                  <path d="M8.72925 39.875C8.72925 40.4273 9.17696 40.875 9.72925 40.875C10.2815 40.875 10.7292 40.4273 10.7292 39.875H8.72925ZM13.3542 12.6875V11.6875V12.6875ZM45.9792 12.6875V11.6875V12.6875ZM48.6042 39.875C48.6042 40.4273 49.052 40.875 49.6042 40.875C50.1565 40.875 50.6042 40.4273 50.6042 39.875H48.6042ZM6.10425 39.875V38.875C5.55196 38.875 5.10425 39.3227 5.10425 39.875H6.10425ZM53.2292 39.875H54.2292C54.2292 39.3227 53.7815 38.875 53.2292 38.875V39.875ZM6.10425 43.5H5.10425H6.10425ZM33.2917 20.9375C33.844 20.9375 34.2917 20.4898 34.2917 19.9375C34.2917 19.3852 33.844 18.9375 33.2917 18.9375V20.9375ZM26.0417 18.9375C25.4895 18.9375 25.0417 19.3852 25.0417 19.9375C25.0417 20.4898 25.4895 20.9375 26.0417 20.9375V18.9375ZM10.7292 39.875V16.3125H8.72925V39.875H10.7292ZM10.7292 16.3125C10.7292 15.6163 11.0058 14.9486 11.4981 14.4563L10.0839 13.0421C9.21652 13.9095 8.72925 15.0859 8.72925 16.3125H10.7292ZM11.4981 14.4563C11.9904 13.9641 12.6581 13.6875 13.3542 13.6875L13.3542 11.6875C12.1276 11.6875 10.9512 12.1748 10.0839 13.0421L11.4981 14.4563ZM13.3542 13.6875H45.9792V11.6875H13.3542V13.6875ZM45.9792 13.6875C46.6754 13.6875 47.3431 13.9641 47.8354 14.4563L49.2496 13.0421C48.3823 12.1748 47.2059 11.6875 45.9792 11.6875V13.6875ZM47.8354 14.4563C48.3277 14.9486 48.6042 15.6163 48.6042 16.3125H50.6042C50.6042 15.0859 50.117 13.9095 49.2496 13.0421L47.8354 14.4563ZM48.6042 16.3125V39.875H50.6042V16.3125H48.6042ZM6.10425 40.875H53.2292V38.875H6.10425V40.875ZM52.2292 39.875V43.5H54.2292V39.875H52.2292ZM52.2292 43.5C52.2292 44.1962 51.9527 44.8639 51.4604 45.3562L52.8746 46.7704C53.742 45.903 54.2292 44.7266 54.2292 43.5H52.2292ZM51.4604 45.3562C50.9681 45.8484 50.3004 46.125 49.6042 46.125V48.125C50.8309 48.125 52.0073 47.6377 52.8746 46.7704L51.4604 45.3562ZM49.6042 46.125H9.72925V48.125H49.6042V46.125ZM9.72925 46.125C9.03305 46.125 8.36538 45.8484 7.87309 45.3562L6.45888 46.7704C7.32623 47.6377 8.50262 48.125 9.72925 48.125V46.125ZM7.87309 45.3562C7.38081 44.8639 7.10425 44.1962 7.10425 43.5H5.10425C5.10425 44.7266 5.59152 45.903 6.45888 46.7704L7.87309 45.3562ZM7.10425 43.5V39.875H5.10425V43.5H7.10425ZM33.2917 18.9375H26.0417V20.9375H33.2917V18.9375Z" fill="currentColor" fill-opacity="0.2"></path>
                </svg>
                <h5 class="my-3">Blogging</h5>
                <p class="mb-3">Expert tips and tools to improve your website or online store using our blog.</p>
                <a href="{{url('front-pages/help-center-article')}}" class="btn btn-outline-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border shadow-none">
              <div class="card-body text-center">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.2">
                    <path d="M17.8304 37.8359C15.6726 36.1581 13.925 34.0112 12.7199 31.5579C11.5148 29.1045 10.8839 26.4091 10.8749 23.6757C10.8296 13.8429 18.7367 5.66403 28.5695 5.43747C32.375 5.34725 36.1123 6.45746 39.2514 8.61062C42.3904 10.7638 44.7719 13.8506 46.0581 17.4333C47.3442 21.016 47.4698 24.9127 46.4169 28.5707C45.364 32.2288 43.1861 35.4625 40.1921 37.8132C39.5308 38.3245 38.995 38.9802 38.6259 39.7302C38.2568 40.4802 38.0641 41.3047 38.0625 42.1406V43.5C38.0625 43.9807 37.8715 44.4417 37.5316 44.7816C37.1917 45.1215 36.7307 45.3125 36.25 45.3125H21.7499C21.2692 45.3125 20.8082 45.1215 20.4683 44.7816C20.1284 44.4417 19.9374 43.9807 19.9374 43.5V42.1406C19.9318 41.3109 19.7394 40.4932 19.3747 39.748C19.0099 39.0028 18.4821 38.3493 17.8304 37.8359Z" fill="currentColor"></path>
                    <path d="M17.8304 37.8359C15.6726 36.1581 13.925 34.0112 12.7199 31.5579C11.5148 29.1045 10.8839 26.4091 10.8749 23.6757C10.8296 13.8429 18.7367 5.66403 28.5695 5.43747C32.375 5.34725 36.1123 6.45746 39.2514 8.61062C42.3904 10.7638 44.7719 13.8506 46.0581 17.4333C47.3442 21.016 47.4698 24.9127 46.4169 28.5707C45.364 32.2288 43.1861 35.4625 40.1921 37.8132C39.5308 38.3245 38.995 38.9802 38.6259 39.7302C38.2568 40.4802 38.0641 41.3047 38.0625 42.1406V43.5C38.0625 43.9807 37.8715 44.4417 37.5316 44.7816C37.1917 45.1215 36.7307 45.3125 36.25 45.3125H21.7499C21.2692 45.3125 20.8082 45.1215 20.4683 44.7816C20.1284 44.4417 19.9374 43.9807 19.9374 43.5V42.1406C19.9318 41.3109 19.7394 40.4932 19.3747 39.748C19.0099 39.0028 18.4821 38.3493 17.8304 37.8359Z" fill="currentColor" fill-opacity="1"></path>
                  </g>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M38.6857 9.43527C35.7198 7.4009 32.1887 6.35195 28.5932 6.43719L28.5925 6.4372C28.3515 6.44275 28.1116 6.45338 27.8731 6.46896L28.5464 4.43773C32.5617 4.34269 36.5049 5.51414 39.817 7.78597C43.1293 10.0579 45.6422 13.3151 46.9993 17.0954C48.3564 20.8758 48.4889 24.9875 47.3779 28.8473C46.2669 32.7072 43.9688 36.1193 40.8097 38.5998L40.8037 38.6045L40.8037 38.6044C40.263 39.0224 39.8249 39.5585 39.5232 40.1717C39.2215 40.7847 39.0639 41.4585 39.0625 42.1416V42.1425V43.5C39.0625 44.2459 38.7661 44.9613 38.2387 45.4887C37.7112 46.0162 36.9959 46.3125 36.25 46.3125H21.75C21.004 46.3125 20.2887 46.0162 19.7612 45.4887C19.2338 44.9613 18.9375 44.2459 18.9375 43.5V42.1441C18.9323 41.4657 18.7748 40.7971 18.4765 40.1877C18.1782 39.5781 17.7466 39.0434 17.2138 38.6231L17.8866 36.5936C18.069 36.7483 18.255 36.8993 18.4442 37.0465L17.8304 37.836L18.4492 37.0504C19.2189 37.6567 19.8421 38.4284 20.2729 39.3084C20.7036 40.1884 20.9307 41.154 20.9374 42.1338L20.9375 42.1406L20.9375 43.5C20.9375 43.7155 21.0231 43.9221 21.1754 44.0745C21.3278 44.2269 21.5345 44.3125 21.75 44.3125H36.25C36.4654 44.3125 36.6721 44.2269 36.8245 44.0745C36.9768 43.9221 37.0625 43.7155 37.0625 43.5V42.1406V42.1387C37.0644 41.1503 37.2923 40.1754 37.7287 39.2886C38.1646 38.4029 38.7969 37.6285 39.5775 37.0244C42.4048 34.8035 44.4614 31.7492 45.4559 28.2941C46.4507 24.8379 46.3321 21.1562 45.1169 17.7712C43.9017 14.3862 41.6516 11.4696 38.6857 9.43527ZM17.8865 36.5936L17.8866 36.5936L27.8731 6.46896L27.8724 6.469L28.5458 4.43775C18.1651 4.67729 9.8275 13.3058 9.87496 23.6797C9.88451 26.5645 10.5504 29.4094 11.8223 31.9987C13.0938 34.5872 14.9375 36.8525 17.2138 38.6231L17.8865 36.5936ZM17.8865 36.5936C16.1041 35.0827 14.6499 33.2189 13.6175 31.117C12.4793 28.7998 11.8834 26.254 11.8749 23.6725L11.8749 23.6711C11.8332 14.6214 18.9246 7.05389 27.8724 6.469L17.8865 36.5936ZM18.9376 52.5625C18.9376 52.0102 19.3853 51.5625 19.9376 51.5625H38.0626C38.6149 51.5625 39.0626 52.0102 39.0626 52.5625C39.0626 53.1148 38.6149 53.5625 38.0626 53.5625H19.9376C19.3853 53.5625 18.9376 53.1148 18.9376 52.5625ZM31.0024 11.8828C30.4579 11.7905 29.9416 12.1571 29.8493 12.7016C29.757 13.2461 30.1236 13.7624 30.6681 13.8547C32.6793 14.1956 34.535 15.1524 35.9792 16.5929C37.4235 18.0334 38.385 19.8867 38.731 21.897C38.8247 22.4413 39.3419 22.8066 39.8862 22.7129C40.4304 22.6192 40.7957 22.102 40.702 21.5577C40.2857 19.1394 39.129 16.9098 37.3916 15.1769C35.6543 13.4439 33.4218 12.293 31.0024 11.8828Z" fill="currentColor"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M38.6857 9.43527C35.7198 7.4009 32.1887 6.35195 28.5932 6.43719L28.5925 6.4372C28.3515 6.44275 28.1116 6.45338 27.8731 6.46896L28.5464 4.43773C32.5617 4.34269 36.5049 5.51414 39.817 7.78597C43.1293 10.0579 45.6422 13.3151 46.9993 17.0954C48.3564 20.8758 48.4889 24.9875 47.3779 28.8473C46.2669 32.7072 43.9688 36.1193 40.8097 38.5998L40.8037 38.6045L40.8037 38.6044C40.263 39.0224 39.8249 39.5585 39.5232 40.1717C39.2215 40.7847 39.0639 41.4585 39.0625 42.1416V42.1425V43.5C39.0625 44.2459 38.7661 44.9613 38.2387 45.4887C37.7112 46.0162 36.9959 46.3125 36.25 46.3125H21.75C21.004 46.3125 20.2887 46.0162 19.7612 45.4887C19.2338 44.9613 18.9375 44.2459 18.9375 43.5V42.1441C18.9323 41.4657 18.7748 40.7971 18.4765 40.1877C18.1782 39.5781 17.7466 39.0434 17.2138 38.6231L17.8866 36.5936C18.069 36.7483 18.255 36.8993 18.4442 37.0465L17.8304 37.836L18.4492 37.0504C19.2189 37.6567 19.8421 38.4284 20.2729 39.3084C20.7036 40.1884 20.9307 41.154 20.9374 42.1338L20.9375 42.1406L20.9375 43.5C20.9375 43.7155 21.0231 43.9221 21.1754 44.0745C21.3278 44.2269 21.5345 44.3125 21.75 44.3125H36.25C36.4654 44.3125 36.6721 44.2269 36.8245 44.0745C36.9768 43.9221 37.0625 43.7155 37.0625 43.5V42.1406V42.1387C37.0644 41.1503 37.2923 40.1754 37.7287 39.2886C38.1646 38.4029 38.7969 37.6285 39.5775 37.0244C42.4048 34.8035 44.4614 31.7492 45.4559 28.2941C46.4507 24.8379 46.3321 21.1562 45.1169 17.7712C43.9017 14.3862 41.6516 11.4696 38.6857 9.43527ZM17.8865 36.5936L17.8866 36.5936L27.8731 6.46896L27.8724 6.469L28.5458 4.43775C18.1651 4.67729 9.8275 13.3058 9.87496 23.6797C9.88451 26.5645 10.5504 29.4094 11.8223 31.9987C13.0938 34.5872 14.9375 36.8525 17.2138 38.6231L17.8865 36.5936ZM17.8865 36.5936C16.1041 35.0827 14.6499 33.2189 13.6175 31.117C12.4793 28.7998 11.8834 26.254 11.8749 23.6725L11.8749 23.6711C11.8332 14.6214 18.9246 7.05389 27.8724 6.469L17.8865 36.5936ZM18.9376 52.5625C18.9376 52.0102 19.3853 51.5625 19.9376 51.5625H38.0626C38.6149 51.5625 39.0626 52.0102 39.0626 52.5625C39.0626 53.1148 38.6149 53.5625 38.0626 53.5625H19.9376C19.3853 53.5625 18.9376 53.1148 18.9376 52.5625ZM31.0024 11.8828C30.4579 11.7905 29.9416 12.1571 29.8493 12.7016C29.757 13.2461 30.1236 13.7624 30.6681 13.8547C32.6793 14.1956 34.535 15.1524 35.9792 16.5929C37.4235 18.0334 38.385 19.8867 38.731 21.897C38.8247 22.4413 39.3419 22.8066 39.8862 22.7129C40.4304 22.6192 40.7957 22.102 40.702 21.5577C40.2857 19.1394 39.129 16.9098 37.3916 15.1769C35.6543 13.4439 33.4218 12.293 31.0024 11.8828Z" fill="white" fill-opacity="0.2"></path>
                </svg>
                <h5 class="my-3">Inspiration Center</h5>
                <p class="mb-3">Inspiration from experts to help you start and grow your big ideas.</p>
                <a href="{{url('front-pages/help-center-article')}}" class="btn btn-outline-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="card border shadow-none">
              <div class="card-body text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58" fill="none">
                  <path opacity="0.2" d="M22.8832 41.2571L20.1418 46.6946C19.9654 47.0654 19.6653 47.3632 19.2932 47.5368C18.9211 47.7105 18.5002 47.7491 18.1027 47.6462C12.5519 46.2868 7.74878 43.9305 4.25972 40.8946C3.99667 40.6625 3.80565 40.3599 3.70928 40.0226C3.61291 39.6853 3.61523 39.3275 3.71597 38.9915L11.3964 13.3446C11.4712 13.0821 11.6065 12.8409 11.7914 12.6402C11.9763 12.4395 12.2058 12.285 12.4613 12.1891C14.6312 11.2989 16.8753 10.6014 19.1675 10.1047C19.608 10.0083 20.0686 10.0774 20.4615 10.2988C20.8543 10.5203 21.1518 10.8787 21.2972 11.3055L23.0871 16.7204C27.0105 16.1766 30.9902 16.1766 34.9136 16.7204L36.7035 11.3055C36.8489 10.8787 37.1464 10.5203 37.5392 10.2988C37.932 10.0774 38.3927 10.0083 38.8332 10.1047C41.1254 10.6014 43.3695 11.2989 45.5394 12.1891C45.7949 12.285 46.0243 12.4395 46.2093 12.6402C46.3942 12.8409 46.5295 13.0821 46.6042 13.3446L54.2847 38.9915C54.3855 39.3275 54.3878 39.6853 54.2914 40.0226C54.195 40.3599 54.004 40.6625 53.741 40.8946C50.2519 43.9305 45.4488 46.2868 39.898 47.6462C39.5005 47.7491 39.0795 47.7105 38.7074 47.5368C38.3353 47.3632 38.0353 47.0654 37.8589 46.6946L35.1175 41.2571C33.0909 41.5421 31.0469 41.6859 29.0003 41.6876C26.9538 41.6859 24.9098 41.5421 22.8832 41.2571Z" fill="currentColor" fill-opacity="2"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4688 32.625C24.4688 34.1265 23.2515 35.3438 21.75 35.3438C20.2485 35.3438 19.0312 34.1265 19.0312 32.625C19.0312 31.1235 20.2485 29.9062 21.75 29.9062C23.2515 29.9062 24.4688 31.1235 24.4688 32.625ZM38.9688 32.625C38.9688 34.1265 37.7515 35.3438 36.25 35.3438C34.7485 35.3438 33.5312 34.1265 33.5312 32.625C33.5312 31.1235 34.7485 29.9062 36.25 29.9062C37.7515 29.9062 38.9688 31.1235 38.9688 32.625Z" fill="currentColor" fill-opacity="1"></path>
                  <path d="M16.8566 18.1251C20.7858 16.8936 24.8828 16.2821 29.0003 16.3126C33.1178 16.2821 37.2149 16.8936 41.1441 18.1251M41.1441 39.8751C37.2149 41.1065 33.1178 41.718 29.0003 41.6876C24.8828 41.718 20.7858 41.1065 16.8566 39.8751M35.1175 41.2571L37.8589 46.6946C38.0353 47.0654 38.3353 47.3632 38.7074 47.5368C39.0795 47.7105 39.5005 47.7491 39.898 47.6462C45.4488 46.2868 50.2519 43.9305 53.741 40.8946C54.004 40.6625 54.195 40.3599 54.2914 40.0226C54.3878 39.6853 54.3855 39.3275 54.2847 38.9915L46.6042 13.3446C46.5295 13.0821 46.3942 12.8409 46.2093 12.6402C46.0243 12.4395 45.7949 12.285 45.5394 12.1891C43.3695 11.2989 41.1254 10.6014 38.8332 10.1047C38.3926 10.0083 37.932 10.0774 37.5392 10.2988C37.1464 10.5203 36.8489 10.8787 36.7035 11.3055L34.9136 16.7204M22.8832 41.2571L20.1418 46.6946C19.9654 47.0654 19.6653 47.3632 19.2932 47.5368C18.9211 47.7105 18.5002 47.7491 18.1027 47.6462C12.5519 46.2868 7.74878 43.9305 4.25972 40.8946C3.99667 40.6625 3.80565 40.3599 3.70928 40.0226C3.61291 39.6853 3.61523 39.3275 3.71597 38.9915L11.3964 13.3446C11.4712 13.0821 11.6065 12.8409 11.7914 12.6402C11.9763 12.4395 12.2058 12.285 12.4613 12.1891C14.6312 11.2989 16.8753 10.6014 19.1675 10.1047C19.608 10.0083 20.0686 10.0774 20.4615 10.2988C20.8543 10.5203 21.1518 10.8787 21.2972 11.3055L23.0871 16.7204" stroke="currentColor" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <h5 class="my-3">Community</h5>
                <p class="mb-3">A group of people living in the same place or having a particular.</p>
                <a href="{{url('front-pages/help-center-article')}}" class="btn btn-outline-primary">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Keep Learning: End -->

<!-- Help Area: Start -->
<section class="section-py bg-body">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 text-center">
        <h4>Still need help?</h4>
        <p class="mb-4"> Our specialists are always happy to help.<br>Contact us during standard business hours or email us 24/7 and we'll get back to you. </p>
        <div class="d-flex justify-content-center flex-wrap gap-4">
          <a href="javascript:void(0);" class="btn btn-primary">Visit our community</a>
          <a href="javascript:void(0);" class="btn btn-primary">Contact us</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Help Area: End -->
@endsection

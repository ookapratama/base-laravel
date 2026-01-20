@php
   use Illuminate\Support\Facades\Auth;
   use Illuminate\Support\Facades\Route;
   $containerNav = $configData['contentLayout'] === 'compact' ? 'container-xxl' : 'container-fluid';
   $navbarDetached = $navbarDetached ?? '';
@endphp

<!-- Navbar -->
@if (isset($navbarDetached) && $navbarDetached == 'navbar-detached')
   <nav
      class="layout-navbar {{ $containerNav }} navbar navbar-expand-xl {{ $navbarDetached }} align-items-center bg-navbar-theme"
      id="layout-navbar">
@endif
@if (isset($navbarDetached) && $navbarDetached == '')
   <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
      <div class="{{ $containerNav }}">
@endif

<!--  Brand demo (display only for navbar-full and hide on below xl) -->
@if (isset($navbarFull))
   <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-6">
      <a href="{{ url('/') }}" class="app-brand-link gap-2">
         <span class="app-brand-logo demo">
            @if (config('variables.templateLogo'))
               <img src="{{ asset('storage/' . config('variables.templateLogo')) }}" alt="Logo" height="30">
            @else
               @include('_partials.macros', ['width' => 25, 'withbg' => 'var(--bs-primary)'])
            @endif
         </span>
         <span class="app-brand-text demo menu-text fw-semibold">{{ config('variables.templateName') }}</span>
      </a>
      @if (isset($menuHorizontal))
         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
            <i class="ri-close-fill align-middle"></i>
         </a>
      @endif
   </div>
@endif

<!-- ! Not required for layout-without-menu -->
@if (!isset($navbarHideToggle))
   <div
      class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0{{ isset($menuHorizontal) ? ' d-xl-none ' : '' }} {{ isset($contentNavbar) ? ' d-xl-none ' : '' }}">
      <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
         <i class="ri-menu-fill ri-22px"></i>
      </a>
   </div>
@endif

<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

   @if (!isset($menuHorizontal))
      <!-- Search -->
      <div class="navbar-nav align-items-center">
         <div class="nav-item navbar-search-wrapper mb-0">
            <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">
               <i class="ri-search-line ri-22px scaleX-n1-rtl me-3"></i>
               <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
            </a>
         </div>
      </div>
      <!-- /Search -->
   @endif

   <ul class="navbar-nav flex-row align-items-center ms-auto">
      @if (isset($menuHorizontal))
         <!-- Search -->
         <li class="nav-item navbar-search-wrapper me-1 me-xl-0">
            <a class="nav-link btn btn-text-secondary rounded-pill search-toggler fw-normal" href="javascript:void(0);">
               <i class="ri-search-line ri-22px scaleX-n1-rtl"></i>
            </a>
         </li>
         <!-- /Search -->
      @endif

      <!-- Language -->
      <li class="nav-item dropdown-language dropdown">
         <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
            href="javascript:void(0);" data-bs-toggle="dropdown">
            <i class='ri-translate-2 ri-22px'></i>
         </a>
         <ul class="dropdown-menu dropdown-menu-end">
            <li>
               <a class="dropdown-item {{ app()->getLocale() === 'en' ? 'active' : '' }}" href="{{ url('lang/en') }}"
                  data-language="en" data-text-direction="ltr">
                  <span class="align-middle">English</span>
               </a>
            </li>
            <li>
               <a class="dropdown-item {{ app()->getLocale() === 'fr' ? 'active' : '' }}" href="{{ url('lang/fr') }}"
                  data-language="fr" data-text-direction="ltr">
                  <span class="align-middle">French</span>
               </a>
            </li>
            <li>
               <a class="dropdown-item {{ app()->getLocale() === 'ar' ? 'active' : '' }}" href="{{ url('lang/ar') }}"
                  data-language="ar" data-text-direction="rtl">
                  <span class="align-middle">Arabic</span>
               </a>
            </li>
            <li>
               <a class="dropdown-item {{ app()->getLocale() === 'de' ? 'active' : '' }}" href="{{ url('lang/de') }}"
                  data-language="de" data-text-direction="ltr">
                  <span class="align-middle">German</span>
               </a>
            </li>
         </ul>
      </li>
      <!--/ Language -->

      @if ($configData['hasCustomizer'] == true)
         <!-- Style Switcher -->
         <li class="nav-item dropdown-style-switcher dropdown me-1 me-xl-0">
            <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
               href="javascript:void(0);" data-bs-toggle="dropdown">
               <i class='ri-22px'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
               <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                     <span class="align-middle"><i class='ri-sun-line ri-22px me-3'></i>Light</span>
                  </a>
               </li>
               <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                     <span class="align-middle"><i class="ri-moon-clear-line ri-22px me-3"></i>Dark</span>
                  </a>
               </li>
               <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                     <span class="align-middle"><i class="ri-computer-line ri-22px me-3"></i>System</span>
                  </a>
               </li>
            </ul>
         </li>
         <!-- / Style Switcher -->
      @endif

      <!-- Quick links  -->
      <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-1 me-xl-0">
         <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
            href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <i class='ri-star-smile-line ri-22px'></i>
         </a>
         <div class="dropdown-menu dropdown-menu-end py-0">
            <div class="dropdown-menu-header border-bottom py-50">
               <div class="dropdown-header d-flex align-items-center py-2">
                  <h6 class="mb-0 me-auto">Shortcuts</h6>
                  <a href="javascript:void(0)"
                     class="btn btn-text-secondary rounded-pill btn-icon dropdown-shortcuts-add"
                     data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i
                        class="ri-add-line text-heading ri-24px"></i></a>
               </div>
            </div>
            <div class="dropdown-shortcuts-list scrollable-container">
               <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                     <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                        <i class="ri-calendar-line ri-26px text-heading"></i>
                     </span>
                     <a href="{{ url('app/calendar') }}" class="stretched-link">Calendar</a>
                     <small class="mb-0">Appointments</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                     <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                        <i class="ri-file-text-line ri-26px text-heading"></i>
                     </span>
                     <a href="{{ url('app/invoice/list') }}" class="stretched-link">Invoice App</a>
                     <small class="mb-0">Manage Accounts</small>
                  </div>
               </div>
               <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                     <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                        <i class="ri-user-line ri-26px text-heading"></i>
                     </span>
                     <a href="{{ url('app/user/list') }}" class="stretched-link">User App</a>
                     <small class="mb-0">Manage Users</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                     <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                        <i class="ri-computer-line ri-26px text-heading"></i>
                     </span>
                     <a href="{{ url('app/access-roles') }}" class="stretched-link">Role Management</a>
                     <small class="mb-0">Permission</small>
                  </div>
               </div>
               <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                     <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                        <i class="ri-pie-chart-2-line ri-26px text-heading"></i>
                     </span>
                     <a href="{{ url('/') }}" class="stretched-link">Dashboard</a>
                     <small class="mb-0">Analytics</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                     <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                        <i class="ri-settings-4-line ri-26px text-heading"></i>
                     </span>
                     <a href="{{ url('pages/account-settings-account') }}" class="stretched-link">Setting</a>
                     <small class="mb-0">Account Settings</small>
                  </div>
               </div>
               <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                     <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                        <i class="ri-question-line ri-26px text-heading"></i>
                     </span>
                     <a href="{{ url('pages/faq') }}" class="stretched-link">FAQs</a>
                     <small class="mb-0">FAQs & Articles</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                     <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                        <i class="ri-tv-2-line ri-26px text-heading"></i>
                     </span>
                     <a href="{{ url('modal-examples') }}" class="stretched-link">Modals</a>
                     <small class="mb-0">Useful Popups</small>
                  </div>
               </div>
            </div>
         </div>
      </li>
      <!-- Quick links -->

      <!-- Notification -->
      <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-4 me-xl-1">
         <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
            href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <i class="ri-notification-2-line ri-22px"></i>
            <span
               class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
         </a>
         <ul class="dropdown-menu dropdown-menu-end py-0">
            <li class="dropdown-menu-header border-bottom py-50">
               <div class="dropdown-header d-flex align-items-center py-2">
                  <h6 class="mb-0 me-auto">Notification</h6>
                  <div class="d-flex align-items-center">
                     <span class="badge rounded-pill bg-label-primary fs-xsmall me-2">8 New</span>
                     <a href="javascript:void(0)"
                        class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i
                           class="ri-mail-open-line text-heading ri-20px"></i></a>
                  </div>
               </div>
            </li>
            <li class="dropdown-notifications-list scrollable-container">
               <ul class="list-group list-group-flush">
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                     <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                           <div class="avatar">
                              <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="rounded-circle">
                           </div>
                        </div>
                        <div class="flex-grow-1">
                           <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                           <small class="mb-1 d-block text-body">Won the monthly best seller gold badge</small>
                           <small class="text-muted">1h ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                           <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                 class="badge badge-dot"></span></a>
                           <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                 class="ri-close-line ri-20px"></span></a>
                        </div>
                     </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                     <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                           <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                           </div>
                        </div>
                        <div class="flex-grow-1">
                           <h6 class="mb-1 small">Charles Franklin</h6>
                           <small class="mb-1 d-block text-body">Accepted your connection</small>
                           <small class="text-muted">12hr ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                           <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                 class="badge badge-dot"></span></a>
                           <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                 class="ri-close-line ri-20px"></span></a>
                        </div>
                     </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                     <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                           <div class="avatar">
                              <img src="{{ asset('assets/img/avatars/2.png') }}" alt class="rounded-circle">
                           </div>
                        </div>
                        <div class="flex-grow-1">
                           <h6 class="mb-1 small">New Message ✉️</h6>
                           <small class="mb-1 d-block text-body">You have new message from Natalie</small>
                           <small class="text-muted">1h ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                           <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                 class="badge badge-dot"></span></a>
                           <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                 class="ri-close-line ri-20px"></span></a>
                        </div>
                     </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                     <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                           <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-success"><i
                                    class="ri-shopping-cart-2-line"></i></span>
                           </div>
                        </div>
                        <div class="flex-grow-1">
                           <h6 class="mb-1 small">Whoo! You have new order 🛒 </h6>
                           <small class="mb-1 d-block text-body">ACME Inc. made new order $1,154</small>
                           <small class="text-muted">1 day ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                           <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                 class="badge badge-dot"></span></a>
                           <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                 class="ri-close-line ri-20px"></span></a>
                        </div>
                     </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                     <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                           <div class="avatar">
                              <img src="{{ asset('assets/img/avatars/9.png') }}" alt class="rounded-circle">
                           </div>
                        </div>
                        <div class="flex-grow-1">
                           <h6 class="mb-1 small">Application has been approved 🚀 </h6>
                           <small class="mb-1 d-block text-body">Your ABC project application has been
                              approved.</small>
                           <small class="text-muted">2 days ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                           <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                 class="badge badge-dot"></span></a>
                           <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                 class="ri-close-line ri-20px"></span></a>
                        </div>
                     </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                     <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                           <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-success"><i
                                    class="ri-pie-chart-2-line"></i></span>
                           </div>
                        </div>
                        <div class="flex-grow-1">
                           <h6 class="mb-1 small">Monthly report is generated</h6>
                           <small class="mb-1 d-block text-body">July monthly financial report is generated </small>
                           <small class="text-muted">3 days ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                           <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                 class="badge badge-dot"></span></a>
                           <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                 class="ri-close-line ri-20px"></span></a>
                        </div>
                     </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                     <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                           <div class="avatar">
                              <img src="{{ asset('assets/img/avatars/5.png') }}" alt class="rounded-circle">
                           </div>
                        </div>
                        <div class="flex-grow-1">
                           <h6 class="mb-1 small">Send connection request</h6>
                           <small class="mb-1 d-block text-body">Peter sent you connection request</small>
                           <small class="text-muted">4 days ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                           <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                 class="badge badge-dot"></span></a>
                           <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                 class="ri-close-line ri-20px"></span></a>
                        </div>
                     </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                     <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                           <div class="avatar">
                              <img src="{{ asset('assets/img/avatars/6.png') }}" alt class="rounded-circle">
                           </div>
                        </div>
                        <div class="flex-grow-1">
                           <h6 class="mb-1 small">New message from Jane</h6>
                           <small class="mb-1 d-block text-body">Your have new message from Jane</small>
                           <small class="text-muted">5 days ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                           <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                 class="badge badge-dot"></span></a>
                           <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                 class="ri-close-line ri-20px"></span></a>
                        </div>
                     </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                     <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                           <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-warning"><i
                                    class="ri-error-warning-line"></i></span>
                           </div>
                        </div>
                        <div class="flex-grow-1">
                           <h6 class="mb-1 small">CPU is running high</h6>
                           <small class="mb-1 d-block text-body">CPU Utilization Percent is currently at
                              88.63%,</small>
                           <small class="text-muted">5 days ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                           <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                 class="badge badge-dot"></span></a>
                           <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                 class="ri-close-line ri-20px"></span></a>
                        </div>
                     </div>
                  </li>
               </ul>
            </li>
            <li class="border-top">
               <div class="d-grid p-4">
                  <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                     <small class="align-middle">View all notifications</small>
                  </a>
               </div>
            </li>
         </ul>
      </li>
      <!--/ Notification -->

      <!-- User -->
      <li class="nav-item navbar-dropdown dropdown-user dropdown">
         <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
               <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="rounded-circle">
            </div>
         </a>
         <ul class="dropdown-menu dropdown-menu-end">
            <li>
               <a class="dropdown-item" href="{{ route('profile.index') }}">
                  <div class="d-flex">
                     <div class="flex-shrink-0 me-2">
                        <div class="avatar avatar-online">
                           <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="rounded-circle">
                        </div>
                     </div>
                     <div class="flex-grow-1">
                        <span class="fw-medium d-block small">
                           @if (Auth::check())
                              {{ Auth::user()->name }}
                           @else
                              John Doe
                           @endif
                        </span>
                        <small
                           class="text-muted">{{ Auth::user() && Auth::user()->role ? Auth::user()->role->name : 'Guest' }}</small>
                     </div>
                  </div>
               </a>
            </li>
            <li>
               <div class="dropdown-divider"></div>
            </li>
            <li>
               <a class="dropdown-item" href="{{ route('profile.index') }}">
                  <i class="ri-user-3-line ri-22px me-3"></i><span class="align-middle">My Profile</span>
               </a>
            </li>

            <li>
               <a class="dropdown-item" href="{{ url('pages/account-settings-billing') }}">
                  <span class="d-flex align-items-center align-middle">
                     <i class="flex-shrink-0 ri-file-text-line ri-22px me-3"></i>
                     <span class="flex-grow-1 align-middle">Billing</span>
                     <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger">4</span>
                  </span>
               </a>
            </li>

            <li>
               <div class="dropdown-divider"></div>
            </li>
            @if (Auth::check())
               <li>
                  <div class="d-grid px-4 pt-2 pb-1">
                     <a class="btn btn-sm btn-danger d-flex" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <small class="align-middle">Logout</small>
                        <i class="ri-logout-box-r-line ms-2 ri-16px"></i>
                     </a>
                  </div>
               </li>
               <form method="POST" id="logout-form" action="{{ route('logout') }}">
                  @csrf
               </form>
            @else
               <li>
                  <div class="d-grid px-4 pt-2 pb-1">
                     <a class="btn btn-sm btn-danger d-flex"
                        href="{{ Route::has('login') ? route('login') : url('auth/login-basic') }}">
                        <small class="align-middle">Login</small>
                        <i class="ri-logout-box-r-line ms-2 ri-16px"></i>
                     </a>
                  </div>
               </li>
            @endif
         </ul>
      </li>
      <!--/ User -->
   </ul>
</div>

<!-- Search Small Screens -->
<div class="navbar-search-wrapper search-input-wrapper {{ isset($menuHorizontal) ? $containerNav : '' }} d-none">
   <input type="text" class="form-control search-input {{ isset($menuHorizontal) ? '' : $containerNav }} border-0"
      placeholder="Search..." aria-label="Search...">
   <i class="ri-close-fill search-toggler cursor-pointer"></i>
</div>
<!--/ Search Small Screens -->
@if (!isset($navbarDetached))
   </div>
@endif
</nav>
<!-- / Navbar -->

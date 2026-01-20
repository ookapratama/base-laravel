@php
   use Illuminate\Support\Facades\Route;
   $configData = Helper::appClasses();

   // Helper function to check if a menu item or any of its children is active (recursive)
   function isMenuItemActive($item, $currentRouteName, $currentUrl)
   {
       // Check if this item itself is active
       $itemPath = isset($item->path) ? ltrim($item->path, '/') : null;
       $itemUrl = isset($item->url) ? ltrim($item->url, '/') : null;

       // Direct match by route name/slug
       if ($currentRouteName === $item->slug) {
           return true;
       }

       // Match by path - but handle root path "/" specially to avoid matching everything
       if ($itemPath !== null && $itemPath !== '') {
           if (request()->is($itemPath) || request()->is($itemPath . '/*')) {
               return true;
           }
       } elseif ($itemPath === '' && $currentUrl === '/') {
           // Special case for root path "/"
           return true;
       }

       // Match by url
       if ($itemUrl !== null && $itemUrl !== '') {
           if (request()->is($itemUrl) || request()->is($itemUrl . '/*')) {
               return true;
           }
       } elseif ($itemUrl === '' && $currentUrl === '/') {
           // Special case for root url "/"
           return true;
       }

       return false;
   }

   // Helper function to check if any child (recursive) is active
   function hasActiveChild($item, $currentRouteName, $currentUrl)
   {
       $children = $item->submenu ?? ($item->children ?? []);

       if (!is_array($children) && !is_object($children)) {
           return false;
       }

       foreach ($children as $child) {
           if (isMenuItemActive($child, $currentRouteName, $currentUrl)) {
               return true;
           }
           // Recursively check grandchildren
           if (hasActiveChild($child, $currentRouteName, $currentUrl)) {
               return true;
           }
       }

       return false;
   }
@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

   <!-- ! Hide app brand if navbar-full -->
   @if (!isset($navbarFull))
      <div class="app-brand demo">
         <a href="{{ url('/') }}" class="app-brand-link">
            <span class="app-brand-logo demo">@include('_partials.macros', ['width' => 25, 'withbg' => 'var(--bs-primary)'])</span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">{{ config('variables.templateName') }}</span>
         </a>

         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M8.47365 11.7183C8.11707 12.0749 8.11707 12.6531 8.47365 13.0097L12.071 16.607C12.4615 16.9975 12.4615 17.6305 12.071 18.021C11.6805 18.4115 11.0475 18.4115 10.657 18.021L5.83009 13.1941C5.37164 12.7356 5.37164 11.9924 5.83009 11.5339L10.657 6.707C11.0475 6.31653 11.6805 6.31653 12.071 6.707C12.4615 7.09747 12.4615 7.73053 12.071 8.121L8.47365 11.7183Z"
                  fill-opacity="0.9" />
               <path
                  d="M14.3584 11.8336C14.0654 12.1266 14.0654 12.6014 14.3584 12.8944L18.071 16.607C18.4615 16.9975 18.4615 17.6305 18.071 18.021C17.6805 18.4115 17.0475 18.4115 16.657 18.021L11.6819 13.0459C11.3053 12.6693 11.3053 12.0587 11.6819 11.6821L16.657 6.707C17.0475 6.31653 17.6805 6.31653 18.071 6.707C18.4615 7.09747 18.4615 7.73053 18.071 8.121L14.3584 11.8336Z"
                  fill-opacity="0.4" />
            </svg>
         </a>
      </div>
   @endif

   <div class="menu-inner-shadow"></div>

   <ul class="menu-inner py-1">
      @php
         $displayMenu = $menuData[0];
         if (isset($displayMenu->menu)) {
             $displayMenu = $displayMenu->menu;
         }
      @endphp

      @foreach ($displayMenu as $menu)
         {{-- adding active and open class if child is active --}}

         {{-- menu headers --}}
         @if (isset($menu->menuHeader))
            <li class="menu-header mt-5">
               <span class="menu-header-text">{{ __($menu->menuHeader) }}</span>
            </li>
         @else
            {{-- active menu method --}}
            @php
               $activeClass = null;
               $currentRouteName = Route::currentRouteName();
               $currentUrl = request()->path();

               $hasChildren =
                   (isset($menu->submenu) && count($menu->submenu) > 0) ||
                   (isset($menu->children) && count($menu->children) > 0);

               // Check if current menu item itself is active
               if (isMenuItemActive($menu, $currentRouteName, $currentUrl)) {
                   $activeClass = 'active';
               }

               // Check if any child (recursively) is active - if so, parent should be "active open"
               if ($hasChildren && hasActiveChild($menu, $currentRouteName, $currentUrl)) {
                   $activeClass = 'active open';
               }
            @endphp

            {{-- main menu --}}
            <li class="menu-item {{ $activeClass }}">
               <a href="{{ isset($menu->path) ? url($menu->path) : (isset($menu->url) ? url($menu->url) : 'javascript:void(0);') }}"
                  class="{{ $hasChildren ? 'menu-link menu-toggle' : 'menu-link' }}"
                  @if (isset($menu->target) and !empty($menu->target)) target="_blank" @endif>
                  @isset($menu->icon)
                     <i class="menu-icon tf-icons {{ $menu->icon }} me-3"></i>
                  @endisset
                  <div>{{ isset($menu->name) ? __($menu->name) : '' }}</div>
                  @isset($menu->badge)
                     <div class="badge bg-{{ $menu->badge[0] }} rounded-pill ms-auto">{{ $menu->badge[1] }}</div>
                  @endisset
               </a>

               {{-- submenu --}}
               @if ($hasChildren)
                  @php
                     $submenuData = $menu->submenu ?? $menu->children;
                  @endphp
                  @include('layouts.sections.menu.submenu', [
                      'menu' => $submenuData,
                      'configData' => $configData,
                  ])
               @endif
            </li>
         @endif
      @endforeach
   </ul>

</aside>

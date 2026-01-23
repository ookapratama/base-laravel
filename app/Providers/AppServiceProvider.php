<?php

namespace App\Providers;

use App\Helpers\ViewConfigHelper;
use App\Interfaces\Repositories\UserRepositoryInterface;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Repository bindings
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(
            \App\Interfaces\Repositories\RoleRepositoryInterface::class,
            \App\Repositories\RoleRepository::class
        );
        $this->app->bind(
            \App\Interfaces\Repositories\MenuRepositoryInterface::class,
            \App\Repositories\MenuRepository::class
        );
        $this->app->bind(
            \App\Interfaces\Repositories\ProductsRepositoryInterface::class,
            \App\Repositories\ProductsRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Define Gates for authorization
        \Illuminate\Support\Facades\Gate::before(function ($user, $ability) {
            if ($user->role && $user->role->slug === 'super-admin') {
                return true;
            }
        });

        \Illuminate\Support\Facades\Gate::define('access', function ($user, $slug, $action) {
            return $user->hasPermission($slug, $action);
        });
        
        // Use Bootstrap 5 for pagination
        \Illuminate\Pagination\Paginator::useBootstrapFive();

        // Create Helper alias for ViewConfigHelper
        if (!class_exists('Helper')) {
            class_alias(ViewConfigHelper::class, 'Helper');
        }

        // Share menu data with all views
        View::composer('*', function ($view) {
            $menus = collect();
            
            if (auth()->check()) {
                $role = auth()->user()->role;
            } else {
                // Fallback to Super Admin menus for Guest/Demo if no auth
                // Or just the first role found
                $role = \App\Models\Role::where('slug', 'super-admin')->first();
            }

            if ($role) {
                $menus = $role->menus()
                    ->whereNull('parent_id')
                    ->wherePivot('can_read', true)
                    ->with(['children' => function($q) use ($role) {
                        $q->whereHas('roles', function($rq) use ($role) {
                            $rq->where('roles.id', $role->id)->where('can_read', true);
                        })->orderBy('order_no');
                    }])
                    ->orderBy('order_no')
                    ->get();
            }

            // Fallback to JSON if no menus found in DB
            if ($menus->isEmpty()) {
                $verticalMenuJson = file_get_contents(resource_path('menu/verticalMenu.json'));
                $menus = json_decode($verticalMenuJson)->menu ?? [];
            }

            $view->with('menuData', [$menus]);
            $view->with('menuHorizontal', [[]]); // Placeholder
        });

        // Share template variables config from Database or defaults
        $settingService = app(\App\Services\SettingService::class);
        
        config([
            'variables' => [
                'templateName' => $settingService->get('app_name', 'Base Laravel'),
                'templateDescription' => $settingService->get('app_description', 'Base project builder'),
                'templateLogo' => $settingService->get('app_logo'),
                'templateFavicon' => $settingService->get('app_favicon'),
                'templateVersion' => '1.0.0',
                'templateFree' => false,
                'templatePrefix' => '',
                'templateSuffix' => '',
                'templateDomain' => 'localhost',
                'templateAuthor' => 'Ooka Pratama',
                'templateAuthorUrl' => '#',
                'creatorName' => 'Ooka Pratama',
                'creatorUrl' => '#',
                'documentation' => 'https://demos.pixinvent.com/materialize-html-admin-template/documentation/',
                'contactEmail' => $settingService->get('contact_email'),
                'contactPhone' => $settingService->get('contact_phone'),
                'socialInstagram' => $settingService->get('social_instagram'),
            ],
        ]);
    }
}

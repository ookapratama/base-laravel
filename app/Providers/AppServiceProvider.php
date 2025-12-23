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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
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
                    ->with(['children' => function($q) use ($role) {
                        $q->whereHas('roles', function($rq) use ($role) {
                            $rq->where('roles.id', $role->id);
                        })->orderBy('order_no');
                    }])
                    ->whereHas('roles', function($q) use ($role) {
                        $q->where('roles.id', $role->id);
                    })
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

        // Share template variables config
        config([
            'variables' => [
                'templateName' => 'Base Laravel',
                'templateVersion' => '1.0.0',
                'templateFree' => false,
                'templatePrefix' => '',
                'templateSuffix' => '',
                'templateDomain' => 'localhost',
                'templateAuthor' => 'Ooka Pratama',
                'templateAuthorUrl' => '',
            ],
        ]);
    }
}

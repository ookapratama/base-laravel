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
            // Load vertical menu JSON
            $verticalMenuJson = file_get_contents(resource_path('menu/verticalMenu.json'));
            $verticalMenuData = json_decode($verticalMenuJson);

            // Load horizontal menu JSON
            $horizontalMenuJson = file_get_contents(resource_path('menu/horizontalMenu.json'));
            $horizontalMenuData = json_decode($horizontalMenuJson);

            // Share menu data
            $view->with('menuData', [$verticalMenuData]);
            $view->with('menuHorizontal', [$horizontalMenuData]);
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

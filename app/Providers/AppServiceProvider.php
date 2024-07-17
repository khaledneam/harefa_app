<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        $modulePaths = [
            'Base' => base_path('app/Modules/Base/views'),
            'Dashboard' => base_path('app/Modules/Dashboard/views'),
            'Dawry' => base_path('app/Modules/Dawry/views'),

        ];

        foreach ($modulePaths as $namespace => $path) {
            View::addNamespace($namespace, $path);
        }


    }
}

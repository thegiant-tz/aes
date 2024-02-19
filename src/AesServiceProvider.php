<?php

namespace Thegiant\Aes;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $basePath = __DIR__;
        $arrPublishable = [
            'thegiant-aes-helper' => [
                "$basePath/publishable/Helpers" => app_path('Helpers'),
            ]
        ];

        foreach ($arrPublishable as $group => $paths) {
            $this->publishes($paths, $group);
        }

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}

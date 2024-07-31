<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Registre quaisquer serviços de aplicação.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap quaisquer serviços de aplicação.
     *
     * @return void
     */
    public function boot()
    {
        require base_path('app/Helpers/ImageHelper.php');
    }
}

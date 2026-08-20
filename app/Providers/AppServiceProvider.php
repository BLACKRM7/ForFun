<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use Carbon\Carbon;

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
    public function boot(): voida
    {
        Passport::tokenExpireIn(now()->addMinute(1));
        Passport::freshTokenExpireIN(now()->addDay(1));

        Passport::tokensCan([
            'admin' => 'Akses Tingkat administrator',
            'users' => 'Akses Tingkat user biasa',
        ]);
    }
}

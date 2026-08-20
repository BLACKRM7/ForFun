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
    public function boot(): void
    {
        Passport::enablePasswordGrant();
        Passport::tokensExpireIn(now()->addMinute());
        Passport::refreshTokensExpireIn(now()->addDays(1));

        Passport::tokensCan([
            'admin' => 'Akses Tingkat administrator',
            'users' => 'Akses Tingkat user biasa',
        ]);
    }
}

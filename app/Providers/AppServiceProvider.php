<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// 追加(Sanctum)
use App\Models\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \URL::forceScheme('https');
        // 追加(Sanctum)
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }
}

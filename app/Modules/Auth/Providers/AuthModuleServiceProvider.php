<?php
/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 25-10-2016
 * Time: 18:51
 */

namespace LaravelApiSkeleton\Modules\Auth\Providers;


use Illuminate\Support\ServiceProvider;

class AuthModuleServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(EventServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}
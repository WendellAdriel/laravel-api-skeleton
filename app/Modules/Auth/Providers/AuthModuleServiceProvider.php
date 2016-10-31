<?php

namespace LaravelApiSkeleton\Modules\Auth\Providers;

use LaravelApiSkeleton\Core\Module\ServiceProvider;

class AuthModuleServiceProvider extends ServiceProvider
{
    protected $hasViews = true;

    protected $providers = [
        AuthServiceProvider::class,
        EventServiceProvider::class,
        RouteServiceProvider::class,
    ];
}
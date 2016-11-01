<?php

namespace LaravelApiSkeleton\Core\Module;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * @var array List of Module Service Providers to Register
     */
    protected $providers = [];

    /**
     * @var string Module Alias for Translations and Views
     */
    protected $alias;

    /**
     * @var bool Enable views loading on the Module
     */
    protected $hasViews = false;

    /**
     * @var bool Enable translations loading on the Module
     */
    protected $hasTranslations = false;

    /**
     * Boot required registering of views and translations.
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerViews();
    }
    public function register()
    {
        $this->registerProviders(collect($this->providers));
    }

    /**
     * Register Module Custom ServiceProviders.
     *
     * @param Collection $providers
     */
    protected function registerProviders(Collection $providers)
    {
        $providers->each(function ($providerClass) {
            $this->app->register($providerClass);
        });
    }
    /**
     * Register module translations.
     */
    protected function registerTranslations()
    {
        if ($this->hasTranslations) {
            $this->loadTranslationsFrom($this->modulePath('Resources/Lang'), $this->alias);
        }
    }
    /**
     * Register module views.
     */
    protected function registerViews()
    {
        if ($this->hasViews) {
            $this->loadViewsFrom($this->modulePath('Resources/Views'), $this->alias);
        }
    }
    /**
     * Detects the module base path so resources can be proper loaded on child classes.
     *
     * @param null $append
     *
     * @return string
     */
    protected function modulePath($append = null)
    {
        $reflection = new \ReflectionClass($this);
        $realPath = realpath(dirname($reflection->getFileName()).'/../');
        if (!$append) {
            return $realPath;
        }
        return $realPath.'/'.$append;
    }
}
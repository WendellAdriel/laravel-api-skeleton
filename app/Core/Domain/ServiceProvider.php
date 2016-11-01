<?php

namespace LaravelApiSkeleton\Core\Domain;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Migrator\MigratorTrait as HasMigrations;
use ReflectionClass;

abstract class ServiceProvider extends LaravelServiceProvider
{
    use HasMigrations;
    
    /**
     * @var string Domain alias for translations and other keys
     */
    protected $alias;
    
    /**
     * @var array List of domain providers to register
     */
    protected $subProviders;
    
    /**
     * @var array Contract bindings
     */
    protected $bindings = [];
    
    /**
     * @var array List of migrations provided by Domain
     */
    protected $migrations = [];
    
    /**
     * @var array List of seeders provided by Domain
     */
    protected $seeders = [];
    
    /**
     * @var array List of model factories to load
     */
    protected $factories = [];
    
    /**
     * @var bool Enable translations for this Domain
     */
    protected $hasTranslations = false;
    
    public function boot()
    {
        if ($this->hasTranslations) {
            $this->registerTranslations();
        }
    }
    
    /**
     * Register the current Domain.
     */
    public function register()
    {
        $this->registerSubProviders(collect($this->subProviders));
        $this->registerBindings(collect($this->bindings));
        $this->registerMigrations(collect($this->migrations));
        $this->registerSeeders(collect($this->seeders));
        $this->registerFactories(collect($this->factories));
    }
    /**
     * @param Collection $subProviders
     */
    protected function registerSubProviders(Collection $subProviders)
    {
        $subProviders->each(function ($provider) {
            $this->app->register($provider);
        });
    }
    /**
     * @param Collection $bindings
     */
    protected function registerBindings(Collection $bindings)
    {
        $bindings->each(function ($concretion, $abstraction) {
            $this->app->bind($abstraction, $concretion);
        });
    }
    /**
     * @param Collection $migrations
     */
    protected function registerMigrations(Collection $migrations)
    {
        $this->migrations($migrations->all());
    }
    /**
     * @param Collection $seeders
     */
    protected function registerSeeders(Collection $seeders)
    {
        $this->seeders($seeders->all());
    }
    /**
     * @param Collection $factories
     */
    protected function registerFactories(Collection $factories)
    {
        $factories->each(function ($factoryName) {
            (new $factoryName())->define();
        });
    }
    /**
     * Register domain translations.
     */
    protected function registerTranslations()
    {
        $this->loadTranslationsFrom($this->domainPath('Resources/Lang'), $this->alias);
    }
    /**
     * @param string $append
     *
     * @return string
     */
    protected function domainPath($append = null)
    {
        $reflection = new ReflectionClass($this);
        $realPath = realpath(dirname($reflection->getFileName()).'/../');
        if (!$append) {
            return $realPath;
        }
        return $realPath.'/'.$append;
    }
}
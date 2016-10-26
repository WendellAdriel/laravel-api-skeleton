<?php

/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 25-10-2016
 * Time: 17:16
 */

namespace LaravelApiSkeleton\Core\Http\Routing;

abstract class Router
{
    /**
     * @var array
     */
    protected $options;

    /**
     * @var \Illuminate\Routing\Router
     */
    protected $router;

    /**
     * RouteFile constructor.
     * @param array $options
     */
    public function __construct($options = [])
    {
        $this->options = $options;
        $this->router = app('router');
    }

    /**
     *
     */
    public function register()
    {
        $this->router->group($this->options, function() {
            $this->registerRoutes();
        });
    }

    /**
     * @return mixed
     */
    abstract protected function registerRoutes();
}
<?php

/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 25-10-2016
 * Time: 18:47
 */

namespace LaravelApiSkeleton\Modules\Auth\Http\Routing;

use Illuminate\Http\Request;
use \LaravelApiSkeleton\Core\Http\Routing\Router;

class Routes extends Router
{
    public function registerRoutes()
    {
        $this->registerDefaultRoutes();
        $this->registerV1Routes();
    }

    protected function registerDefaultRoutes()
    {
        $this->authRoutes();
    }

    protected function registerV1Routes()
    {
        $this->router->group(['prefix' => 'v1'], function() {
            $this->registerDefaultRoutes();
        });
    }

    protected function authRoutes()
    {
        $this->router->post('/auth', 'AuthController@authenticate');

        $this->router->group(['middleware' => 'jwt.auth'], function () {
            $this->router->get('/auth/user', 'AuthController@getAuthenticatedUser');
        });
    }
}
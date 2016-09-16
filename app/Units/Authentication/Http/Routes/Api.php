<?php

namespace Confee\Units\Authentication\Http\Routes;

use Confee\Support\Http\Routing\RouteFile;
use Illuminate\Http\Request;

/**
 * Class Api.
 */
class Api extends RouteFile
{
    protected function routes()
    {
        $this->registerDefaultRoutes();
        $this->registerV1Routes();
    }

    protected function registerDefaultRoutes()
    {
        $this->userRoutes();
    }

    protected function registerV1Routes()
    {
        $this->router->group(['prefix' => 'v1'], function () {
            $this->registerDefaultRoutes();
        });
    }

    protected function userRoutes()
    {
        $this->router->get('user', function (Request $request) {
            //return $request->user();
            return [
                'message' => 'user page',
            ];
        })->middleware('auth:api');
    }

    protected function loginRoutes()
    {
        $this->router->post('login', 'LoginController@login');
    }
}

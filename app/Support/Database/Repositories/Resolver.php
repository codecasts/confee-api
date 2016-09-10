<?php

namespace Confee\Support\Database\Repositories;
use Illuminate\Contracts\Foundation\Application;

/**
 * Class Resolve.
 */
class Resolver
{
    /**
     * @var Application
     */
    protected $app;

    /**
     * Resolver constructor.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function resolve($abstract)
    {
        return $this->app->make($abstract);
    }
}
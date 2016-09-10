<?php

namespace Confee\Support\Database\Repositories;

use Confee\Domains\Users\Contracts\User as UserContract;
use Confee\Domains\Users\User;
use Illuminate\Contracts\Foundation\Application;
use Mockery as m;

/**
 * Class ResolverTest.
 */
class ResolverTest extends \TestCase
{
    /**
     * The model resolver receives a interface or class and
     * calls the IoC container for its concrete implementation.
     */
    public function test_resoling_a_model_by_its_class()
    {
        // Mocking the IoC Container
        $app = m::mock(Application::class);
        // The method make of the IoC container should be called
        $app->shouldReceive('make')
            // with the argument being the users interface
            ->with(UserContract::class)
            // and return a User model implementation
            ->andReturn(m::mock(User::class));

        // Create a new instance of the class being testes,
        // Passing the Mock application on the constructor
        $resolver = new Resolver($app);

        // Get the results of the method resolve being tested.
        $concrete = $resolver->resolve(UserContract::class);

        // Assert the result is a instance of the Users Interface
        $this->assertInstanceOf(UserContract::class, $concrete);
    }
}
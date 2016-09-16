<?php

namespace Confee\Domains\Users\Providers;

use Confee\Domains\Users\Database\Factories\UserFactory;
use Confee\Domains\Users\Database\Migrations\CreatePasswordResetsTable;
use Confee\Domains\Users\Database\Migrations\CreateUsersTable;
use Confee\Domains\Users\Database\Seeders\UserSeeder;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait as HasMigrations;
use Confee\Domains\Users\Contracts;
use Confee\Domains\Users\Repositories;

/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
    use HasMigrations;

    public function register()
    {
        $this->registerMigrations();
        $this->registerFactories();
        $this->registerSeeders();
        $this->registerBindings();
    }

    protected function registerMigrations()
    {
        $this->migrations([
            CreateUsersTable::class,
            CreatePasswordResetsTable::class,
        ]);
    }

    protected function registerFactories()
    {
        (new UserFactory())->define();
    }

    protected function registerSeeders()
    {
        $this->seeders([
            UserSeeder::class,
        ]);
    }

    protected function registerBindings()
    {
        $this->app->bind(
            Contracts\UserRepository::class,
            Repositories\UserRepository::class
        );
    }
}

<?php

namespace Confee\Domains\Users\Providers;

use Confee\Domains\Users\Database\Factories\UserFactory;
use Confee\Domains\Users\Database\Migrations\CreatePasswordResetsTable;
use Confee\Domains\Users\Database\Migrations\CreateUsersTable;
use Confee\Domains\Users\Database\Seeders\UserSeeder;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait as HasMigrations;

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
}

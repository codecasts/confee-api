<?php

namespace Confee\Domains\Users\Providers;

use Confee\Domains\Users\Database\Migrations\CreatePasswordResetsTable;
use Confee\Domains\Users\Database\Migrations\CreateUsersTable;
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
    }

    protected function registerMigrations()
    {
        $this->migrations([
            CreateUsersTable::class,
            CreatePasswordResetsTable::class,
        ]);
    }
}
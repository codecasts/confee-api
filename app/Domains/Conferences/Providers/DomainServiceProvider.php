<?php

namespace Confee\Domains\Conferences\Providers;

use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait as HasMigrations;
use Confee\Domains\Conferences\Database\Migrations;
use Confee\Domains\Conferences\Database\Factories;
use Confee\Domains\Conferences\Database\Seeders;

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
            Migrations\CreateConferencesTable::class,
            Migrations\CreateEditionsTable::class,
        ]);
    }

    protected function registerFactories()
    {
        (new Factories\ConferenceFactory())->define();
        (new Factories\EditionFactory())->define();
    }

    protected function registerSeeders()
    {
        $this->seeders([
            Seeders\ConferenceSeeder::class,
            Seeders\EditionSeeder::class,
        ]);
    }
}

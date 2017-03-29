<?php

namespace Confee\Domains\Conferences\Database\Seeders;

use Confee\Domains\Conferences\Conference;
use Illuminate\Database\Seeder;

/**
 * Class UserSeeder.
 */
class ConferenceSeeder extends Seeder
{
    public function run()
    {
        factory(Conference::class)
            ->times(10)
            ->create();
    }
}

<?php

namespace Confee\Domains\Conferences\Database\Seeders;

use Confee\Domains\Conferences\Edition;
use Illuminate\Database\Seeder;

/**
 * Class UserSeeder.
 */
class EditionSeeder extends Seeder
{
    public function run()
    {
        factory(Edition::class)
            ->times(40)
            ->create();
    }
}

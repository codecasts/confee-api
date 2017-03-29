<?php

namespace Confee\Domains\Conferences\Database\Factories;

use Confee\Domains\Conferences\Conference;
use Confee\Support\Database\ModelFactory;

/**
 * Class UserFactory.
 */
class ConferenceFactory extends ModelFactory
{
    protected $model = Conference::class;

    protected function fields()
    {
        return [
            'name' => $this->faker->monthName,
            'responsible_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}

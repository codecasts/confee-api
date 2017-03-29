<?php

namespace Confee\Domains\Conferences\Database\Factories;

use Confee\Domains\Conferences\Edition;
use Confee\Support\Database\ModelFactory;

/**
 * Class UserFactory.
 */
class EditionFactory extends ModelFactory
{
    protected $model = Edition::class;

    protected function fields()
    {
        return [
            'name' => $this->faker->monthName,
            'start_date' => $this->faker->dateTimeThisYear,
            'conference_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}

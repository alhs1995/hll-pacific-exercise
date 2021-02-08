<?php

namespace Database\Factories;

use App\Models\Squad;
use Illuminate\Database\Eloquent\Factories\Factory;

class SquadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Squad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'division_id' => null,
            'name'        => $this->faker->lastName,
            'amount'      => $this->faker->randomDigit,
            'steam_id'    => $this->faker->randomLetter,
        ];
    }
}

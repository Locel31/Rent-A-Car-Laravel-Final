<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Car::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create();

        return [
            'make' => $faker->company,
            'model' => $faker->name,
            'year' => $faker->year,
        ];
    }
}

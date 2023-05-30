<?php

namespace Database\Factories;

use App\Models\Rental;
use App\Models\Car;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rental>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Rental::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $carIds = Car::pluck('id')->toArray();
        return [
            'car_id' => $faker->randomElement($carIds),
            'start_date' => $faker->dateTimeBetween('-1 month', '+1 month'),
            'end_date' => $faker->dateTimeBetween('+1 month', '+2 months'),
        ];
    }
}

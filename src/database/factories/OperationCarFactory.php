<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OperationCar>
 */
class OperationCarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'car_id' => rand(1, Car::count()),
            'publish_date' => fake()->date() . ' ' . fake()->time(),
            'status_id' => rand(1, Status::count()),
            'mileage' => fake()->randomNumber(6, false),
            'latitude' => fake()->latitude(30, 50),
            'longitude' => fake()->longitude(30, 50),
        ];
    }
}

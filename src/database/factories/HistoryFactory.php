<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Renter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\History>
 */
class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'renter_id' => rand(1, Renter::count()),
            'start_date' => fake()->date() . ' ' . fake()->time(),
            'end_date' => fake()->date() . ' ' . fake()->time(),
            'car_id' => rand(1, Car::count()),
            'sum' => fake()->numberBetween(0, 2000),
        ];
    }
}

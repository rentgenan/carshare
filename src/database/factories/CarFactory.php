<?php

namespace Database\Factories;

use App\Models\ModelCar;
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
    public function definition()
    {
        return [
            'model_id' => rand(1, ModelCar::count()),
            'year_release' => fake()->year('now', '2013'),
            'number_car' => fake()->bothify('?###??'),
            'status' => rand(0, 1),
        ];
    }
}

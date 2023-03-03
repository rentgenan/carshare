<?php

namespace Database\Factories;

use App\Models\Renter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OperationMoney>
 */
class OperationMoneyFactory extends Factory
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
            'date' => fake()->date() . ' ' . fake()->time(),
            'sum' => fake()->numberBetween(-2000, 2000),
        ];
    }
}

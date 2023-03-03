<?php

namespace Database\Factories;

use App\Models\Operation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Renter>
 */
class RenterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $status = [
            'Активенг',
            'Неактивен',
            'Заблокирован',
        ];

        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'patronymic' => fake()->lastName(),
            'email' => fake()->email(),
            'phone_number' => 7 . fake()->randomNumber(5, true) . fake()->randomNumber(5, true),
            'status' => fake()->randomElement($status),
            'passport' => fake()->randomNumber(5, true) . fake()->randomNumber(5, true),
            'card_number' => fake()->creditCardNumber(),
            'balance' => fake()->numberBetween(-5000, 5000),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => $this->faker->randomNumber(),
            'print_id' => $this->faker->randomDigitNotNull(),
            'customer_id' => $this->faker->randomDigitNotNull(),
            'sum' => $this->faker->randomDigit()
        ];
    }
}

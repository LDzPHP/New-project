<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pr>
 */
class PrFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pr_id' => $this->faker->randomDigitNotNull(),
            'pr_price' => $this->faker->randomFloat(),
            'description' => $this->faker->text(),
        ];
    }

}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchases>
 */
class PurchasesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'class' => $this->faker->text(7),
            'price' => $this->faker->randomNumber(numericValue(@return \Hamcrest\Type\IsNumeric)),
            'size' => $this->faker->randomNumber(numericValue(@return \Hamcrest\Type\IsNumeric)),
            'date' => $this->faker->date_create,
        ];
    }
};
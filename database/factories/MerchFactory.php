<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merch>
 */
class MerchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'price' => $this->faker->randomNumber(numericValue(@return \Hamcrest\Type\IsNumeric)),
            'size' => $this->faker->randomNumber(numericValue(@return \Hamcrest\Type\IsNumeric)),
            'class' => $this->faker->text(7),
            'subclass' => $this->faker->text(5),
            'body' => $this->faker->text(),
            'author_name' => $this->faker->name(),
        ];
    }
}

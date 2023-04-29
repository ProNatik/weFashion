<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(1, 50),
            'picture' => $this->faker->randomElement([
                '/images/hommes/0706301811_1_1_1.jpg',
                '/images/hommes/3918402401_1_1_1.jpg',
                '/images/hommes/4314509658_1_1_1.jpg',
                '/images/femmes/wxl-_fideler_antic_blue5.jpg',
                '/images/femmes/wxl-_New_Coleen-006.jpg',
                '/images/femmes/Wxl-_19PE_juin18_3490.jpg',
            ]),
            'state' => $this->faker->randomElement(['standard','solde']),
            'reference' => Str::random(10),
        ];
    }
}

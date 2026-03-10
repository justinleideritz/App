<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition (): array
    {

        return [
            'PRO_Name'        => fake()->company,
            'PRO_Description' => fake()->sentence(),
            'PRO_Price'       => fake()->randomFloat( 2, 10, 1000 ),
            'PRO_Quantity'    => fake()->numberBetween( 0, 100 ),
        ];
    }
}

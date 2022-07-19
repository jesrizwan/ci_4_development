'<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image'=>fake()->imageUrl(),
			'title'=>fake()->text(maxNbChars: 50),
			'description'=>fake()->text(maxNbChars: 2000),
			'price'=>fake()->randomFloat(nbMaxDecimals: 2, min: 5, max: 1000),
        ];
    }
}

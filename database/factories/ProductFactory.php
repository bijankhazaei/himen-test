<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'       => fake()->word(),
            'image'      => fake()->imageUrl(),
            'sell_price' => fake()->randomFloat(2, 1000, 9999),
            'buy_price'  => fake()->randomFloat(2, 1000, 9999),
            'stock'      => fake()->randomDigitNotZero(),
            'visits'     => fake()->randomDigitNotZero()
        ];
    }
}

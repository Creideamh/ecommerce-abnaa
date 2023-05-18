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
        $product_name = $this->faker->unique()->words($nb=4, $asTest = true);
        return [
            //
            'name' => $product_name,
            'slug' => Str::slug($product_name),
            'description' => $this->faker->text(200),
            'product_price' => $this->faker->numberBetween(10,500),
            'SKU' => 'DIGI'.$this->faker->unique()->numberBetween(100,500),
            'stock_status' => 'instock',
            'quantity' => $this->faker->numberBetween(100,200),
            'image' => 'custom_'.$this->faker->unique()->numberBetween(1,22).'.jpg',
            // 'category_id' => $this->faker->numberBetween(1,4),
            'size' => $this->faker->randomElement(['XS', 'S', 'L', 'M', 'XL', 'XXL']),
            'color' => $this->faker->colorName(),
            'sub_category_id' => $this->faker->numberBetween(1,6)
        ];
    }
}

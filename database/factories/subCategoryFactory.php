<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class subCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'sub_category_name' => $this->faker->randomElement(['lingeries', 'jeans', 'tops', 'leggings', 'dresses', 'coats', 'mofti']),
            'category_id' => $this->faker->numberBetween(1,4)
        ];
    }
}

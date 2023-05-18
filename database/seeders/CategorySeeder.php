<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Faker as Faker;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schema::disableForeignKeyConstraints();
        Category::truncate();

        $categories = [
            ['name' => 'men', 'description' =>"Men's wear"],
            ['name' => 'women','description' =>"Women's wear"],
            ['name' => 'children', 'description' =>"Children's wear"],
            ['name' => 'Beads','description' =>"Beads for all"],
        ];

        foreach ($categories as $key => $value) {
            Category::create($value);
        }
    }
}

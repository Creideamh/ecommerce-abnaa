<?php

namespace Database\Seeders;

use App\Models\subCategory as ModelsSubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class subCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schema::disableForeignKeyConstraints();
        ModelsSubCategory::truncate();

        $sub_categories = [
            ['sub_category_name' => 'jumpsuits', 'category_id' => 1],
            ['sub_category_name' => 'lingerie',  'category_id' => 2],
            ['sub_category_name' => 'jeans', 'category_id' => 1],
            ['sub_category_name' => 'coats', 'category_id' => 1],
            ['sub_category_name' => 'jumpers', 'category_id' => 2],
            ['sub_category_name' => 'leggings', 'category_id' => 2],
        ];

        foreach ($sub_categories as $key => $value){
            ModelsSubCategory::create($value);
        }
    }
}

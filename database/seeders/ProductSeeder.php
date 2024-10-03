<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $categoryIds = Category::pluck('id')->toArray();
        $brandIds = Brand::pluck('id')->toArray();
        for ($i = 0; $i < 5; $i++) {
            Product::create([
                'name' => $faker->text($maxNbChars = 10),
                'image' => $faker->imageUrl(),
                'description' => $faker->text($maxNbChars = 20),
                'price' => $faker->randomNumber(),
                'ton_kho' => $faker->randomNumber(),
                'brand_id' => $faker->randomElement($brandIds),
                'category_id' => $faker->randomElement($categoryIds),
            ]);
        }
    }
}

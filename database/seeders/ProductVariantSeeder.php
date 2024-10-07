<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\RamSize;
use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $productIds = Product::all()->pluck('id')->toArray();
        $colorId = Color::all()->pluck('id')->toArray();
        $sizeId = Size::all()->pluck('id')->toArray();
        $ramId = RamSize::all()->pluck('id')->toArray();

        for ($i = 0; $i < 5; $i++) {
            DB::table('product_variants')->insert([
                'product_id' => $faker->randomElement($productIds),
                'color_id' => $faker->randomElement($colorId),
                'size_id' => $faker->randomElement($sizeId),
                'ram_size_id' => $faker->randomElement($ramId)
            ]);
        }
    }
}

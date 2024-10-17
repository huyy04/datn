<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartDetailrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $cartId = Cart::all()->pluck('id')->toArray();
        $productId = Product::all()->pluck('id')->toArray();
        for ($i = 0; $i < 5; $i++) {
            CartDetail::query()->insert([
                'cart_id' => $faker->randomElement($cartId),
                'product_id' => $faker->randomElement($productId),
                'so_luong' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
                'don_gia' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            ]);
        }
    }
}

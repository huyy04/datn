<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $userId = User::all()->pluck('id')->toArray();
        for ($i = 0; $i < 5; $i++) {
            Cart::query()->insert([
                'user_id' => $faker->randomElement($userId),
            ]);
        }
    }
}

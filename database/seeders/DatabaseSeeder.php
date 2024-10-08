<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Color;
use App\Models\ProductVariant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
//        $this->call([
//            CategorySeeder::class,
//        ]);
//
//        $this->call([
//            ProductSeeder::class,
//        ]);

        $this->call([
            SizeSeeder::class,
        ]);
        $this->call([
            ProductVariantSeeder::class,
        ]);
    }
}

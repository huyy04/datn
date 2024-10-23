<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bills')->insert([
            [
                'user_id' => 1,
                'payment_method_id' => 2,
                'address_id' => 1,
                'total_price' => 500000,
                'name_nguoi_nhan' => 'Nguyễn Văn A',
                'tien_ship' => 30000,
                'ngay_nhan' => '2024-10-22',
                'ngay_thanh_toan' => '2024-10-20',
                'shipping_type' => 'giao hang nhanh',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'payment_method_id' => 1,
                'address_id' => 2,
                'total_price' => 1000000,
                'name_nguoi_nhan' => 'Trần Thị B',
                'tien_ship' => 50000,
                'ngay_nhan' => '2024-11-01',
                'ngay_thanh_toan' => '2024-10-30',
                'shipping_type' => 'giao hang tieu chuan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'payment_method_id' => 3,
                'address_id' => 3,
                'total_price' => 2500000,
                'name_nguoi_nhan' => 'Lê Hoàng C',
                'tien_ship' => 60000,
                'ngay_nhan' => '2024-12-05',
                'ngay_thanh_toan' => '2024-12-03',
                'shipping_type' => 'giao hang quoc te',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 4,
                'payment_method_id' => 2,
                'address_id' => 4,
                'total_price' => 1500000,
                'name_nguoi_nhan' => 'Phạm Quốc D',
                'tien_ship' => 45000,
                'ngay_nhan' => '2024-12-10',
                'ngay_thanh_toan' => '2024-12-08',
                'shipping_type' => 'giao hang mien phi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 5,
                'payment_method_id' => 1,
                'address_id' => 5,
                'total_price' => 2000000,
                'name_nguoi_nhan' => 'Đinh Thu E',
                'tien_ship' => 35000,
                'ngay_nhan' => '2024-12-20',
                'ngay_thanh_toan' => '2024-12-18',
                'shipping_type' => 'giao hang nhanh',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

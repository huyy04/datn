<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('payment_method_id');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')->references('id')->on('address');
            $table->unsignedInteger('total_price');
            $table->string('name_nguoi_nhan', 255);
            $table->unsignedInteger('tien_ship');
            $table->date('ngay_nhan');
            $table->date('ngay_thanh_toan');
            $table->enum('shipping_type', ['giao hang tieu chuan', 'giao hang nhanh', 'giao hang quoc te', 'giao hang mien phi'])->default('giao hang nhanh');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }
};

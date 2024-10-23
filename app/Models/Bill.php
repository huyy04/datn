<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'payment_method_id', 'address_id', 'total_price', 'name_nguoi_nhan',
        'tien_ship', 'ngay_nhan', 'ngay_thanh_toan', 'shipping_type','status',
    ];

    // Quan hệ với bảng users
    public function user()
    {
        return $this->belongsTo(User::class);
    }



//     Quan hệ với bảng payment_methods
    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }

    public function addresses()
    {
        return $this->belongsTo(address::class, 'address_id');
    }
}

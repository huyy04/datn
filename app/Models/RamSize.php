<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RamSize extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected  $fillable = ['id', 'name'];
    public function variant(){
        return $this->hasMany(ProductVariant::class);
    }
}

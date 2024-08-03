<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;


    protected $table = 'coupons';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['id', "order_id", 'qr_code',  "token", "status"];


    function order(){
        return $this->belongsTo(Order::class);
    }
}

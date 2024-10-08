<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $table = 'products';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['id', "store_p_id", 'name', 'price',  "expire_date",  "validity_type" , "duration", "max_usage", "status"];

    function offer()
    {
        return $this->belongsToMany(Offer::class, "product_offer", "product_id", "offer_id");
    }
    function productOffer()
    {
        return $this->hasMany(ProductOffer::class, "product_id");
    }
    function order(){
        return $this->hasMany(Order::class);
    }
}

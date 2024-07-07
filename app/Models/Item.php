<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;


    protected $table = 'items';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['id', "order_id", 'offer_id',  "expire_date", "redeemed_date", "status", "business_due"];


    function order()
    {
        return $this->belongsTo(Order::class);
    }

    function usedCount($offerID , $orderID){
        return $this->where("redeemed_date" , "!=" , null)->where("offer_id" , $offerID)->where("order_id" , $orderID)->count();
    }

    function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}

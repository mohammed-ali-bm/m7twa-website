<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;


    protected $table = 'registers';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['id', "name",   "mobile","service" , "flat_id",  "coupon" ,"status"];


    function flat(){
        return $this->belongsTo(Flat::class);
    }

    function coupon(){
        return $this->belongsTo(Coupon::class , 'coupon' , 'code');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUS extends Model
{
    use HasFactory;


    protected $table = 'contact_us';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['id', "name", 'email',  "phone", "message" , "status"];


    function order(){
        return $this->belongsTo(Order::class);
    }
}

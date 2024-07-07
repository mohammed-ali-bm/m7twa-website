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

    protected $fillable = ['id', "name", 'company',  "mobile", "id_number" , "email" , "statement" ,"status"];


    function order(){
        return $this->belongsTo(Order::class);
    }
}

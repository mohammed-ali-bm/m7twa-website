<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attr extends Model
{
    use HasFactory;


    protected $table = 'attrs';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['id', "name"];


    function order(){
        return $this->belongsTo(Order::class);
    }
}

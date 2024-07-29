<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttrFlat extends Model
{
    use HasFactory;


    protected $table = 'attr_flat';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = ['id', "flat_id" , "attr_id" , "text"];

}

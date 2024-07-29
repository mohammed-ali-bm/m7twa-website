<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;


    protected $table = 'flats';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['id', "name" , "area" , "price"];

    function attrs(){
        return $this->belongsToMany(Attr::class, 'attr_flat')->select('name', 'text');
    }

}

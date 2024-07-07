<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingFactor extends Model
{
    use HasFactory;


    protected $table = 'rating_factors';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ["id", "title", "type", "status", "required"];
}

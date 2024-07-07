<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;


    protected $table = 'ratings';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ["id", "guest_id", "rate", "status",];

    function guest()
    {
        return $this->belongsTo(Guest::class);
    }
    function factors()
    {
        return $this->hasMany(RatingFactorValue::class);
    }
}

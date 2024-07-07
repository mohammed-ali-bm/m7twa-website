<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingFactorValue extends Model
{
    use HasFactory;


    protected $table = 'rating_factor_values';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ["id", "factor_id", "rating_id", "status", "value",];

    function rating()
    {
        return $this->belongsTo(Rating::class);
    }
    function factor()
    {
        return $this->belongsTo(RatingFactor::class, 'rating_factor_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;


    protected $table = 'sessions';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['id', "title", "token", "status"];

    function speakers()
    {
        return $this->belongsToMany(Speaker::class, "session_speaker");
    }

    function questions()
    {
        return $this->hasMany(Question::class);
    }
}

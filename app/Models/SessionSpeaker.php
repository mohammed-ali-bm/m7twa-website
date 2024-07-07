<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionSpeaker extends Model
{
    use HasFactory;


    protected $table = 'session_speaker';

    public $timestamps = false;



    protected $fillable = ['session_id', "speaker_id"];


    function session()
    {
        return $this->belongsTo(Session::class);
    }
    function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }
}

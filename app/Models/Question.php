<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;


    protected $table = 'questions';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['id', "session_id", "guest_id", "speaker_id", "question", "status"];

    function session()
    {
        return $this->belongsTo(Session::class);
    }
    function guest()
    {
        return $this->belongsTo(Guest::class);
    }
    function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }

}

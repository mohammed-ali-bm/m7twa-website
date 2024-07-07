<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;


    protected $table = 'speakers';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['id', "name", "job_title", "label", "company"];
}

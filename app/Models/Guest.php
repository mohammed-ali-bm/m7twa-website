<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;


    protected $table = 'guests';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['id', "name", "job_title", "company", "gender", "email", "phone", "area", "address",  "qr_src", "confirmed" ,"token", "status"];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use QrCode;
use Carbon\Carbon;
class Service extends Model
{
    use HasFactory;


    protected $table = 'services';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['id',   "name", "content" , "img" ];


}

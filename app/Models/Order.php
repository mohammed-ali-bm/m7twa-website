<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use QrCode;
use Carbon\Carbon;
class Order extends Model
{
    use HasFactory;


    protected $table = 'orders';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['id',   "name", "email" , "phone" , "amount" , "status"];


}

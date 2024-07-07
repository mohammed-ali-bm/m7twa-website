<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Page extends Authenticatable
{
    use HasFactory;


    protected $table = 'pages';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['id', 'title', 'slung', "content",  "status"];



}

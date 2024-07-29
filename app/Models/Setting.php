<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    protected $fillable = ['key', 'value', 'type', 'options'];

    protected $casts = [
        'options' => 'array',
    ];

    public static function getSettings()
    {
        return Cache::rememberForever('settings', function () {
            return self::all()->pluck('value', 'key')->toArray();
        });
    }

    public static function updateCache()
    {
        Cache::forget('settings');
        self::getSettings();
    }
}

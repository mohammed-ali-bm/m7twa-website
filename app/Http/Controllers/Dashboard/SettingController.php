<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ProtoneMedia\Splade\Facades\Toast;

class SettingController extends Controller
{
    public function index()
    {
        $args['settings'] = Setting::all();
        $args['settings_pairs'] = Setting::getSettings();


        
        return view('dashboard.settings.index', $args);
    }

    public function update(Request $request)
    {
        $settings = Setting::all();
        foreach ($settings as $setting) {
            $value = $request->input($setting->key);

            if ($setting->type == 'number' && !is_numeric($value)) {
                return back()->withErrors(['Invalid number for ' . $setting->key]);
            }

            if ($setting->type == 'select' && !in_array($value, $setting->options)) {
                return back()->withErrors(['Invalid option for ' . $setting->key]);
            }

            // Add other validation rules as needed

            $setting->update(['value' => $value]);
        }

        Setting::updateCache();

    return    Toast::success('تم تعديل البيانات بنجاح')->centerBottom()->autoDismiss(2);
    }
}

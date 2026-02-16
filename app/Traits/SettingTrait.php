<?php


namespace App\Traits;


use App\Models\Setting;

class SettingTrait
{
    public static function getSetting()
    {
        return Setting::first();
    }
}

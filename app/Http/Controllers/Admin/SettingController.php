<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;

use App\Traits\HelperTrait;
use App\Traits\SettingTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SettingController extends Controller
{
    use HelperTrait;
    public function index()
    {
        $setting = Setting::first();
        return view('admin.setting.index', compact('setting'));
    }

    public function update(Request $request)
    {
//        dd($request->all());
        $setting_data = $request -> except(['vat', 'search_terms', 'image_name']);
        $current_setting = Setting::first();
        $image_data = $this->uploadSingleImageAndRemoveOldImage($request -> image_name, 'site_setting', 'company_logo', 'logo', 'public', 100, 100, $current_setting); // Upload Image With Trait
        $image_data = $image_data['image_name'] ? $image_data : ['image_name' => 'default.png'];
        $vat = $request -> vat ? $request -> vat : null;



        Setting::updateOrCreate(['id' => 1],$setting_data + ['vat' => $vat] + $image_data);
        $url = back();
        if($request -> language)
        {
            App::setLocale($request -> language);
            LaravelLocalization::setLocale($request -> language);
            Session::put('locale', $request -> language);
            $url = LaravelLocalization::getLocalizedURL(App::getLocale(), \URL::previous());
        }
        toast( __('trans.modifications saved successfully') ,'success')->background('#000');
        return redirect()->to($url);
    }

    public function remove_company_logo()
    {
        $current_logo_path = Setting::first()->image_path;
        if ($current_logo_path){
            $this->deleteImageHandel('public', $current_logo_path);
            Setting::updateOrCreate(['id' => 1],['image_path' => null, 'image_name' => 'default.png']);
        }
        toast( __('trans.image deleted successfully') ,'success')->background('#000');
        return redirect()->back();
    }
}

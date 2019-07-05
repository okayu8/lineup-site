<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Services\SiteSettingService;

class SiteSettingController extends Controller
{
    protected $siteSettingService;
    public function __construct(SiteSettingService $site_setting_service)
    {
        $this->middleware('auth');
        $this->siteSettingService = $site_setting_service;
    }

    //site settingを表示
    public function index()
    {
        if(Setting::find(1)){
            $setting = Setting::findOrFail(1);
        }
        else{
            $this->siteSettingService->FirstSetting();
            $setting = Setting::find(1);
        }

        $image1 = Storage::disk('s3')->url($setting->title_image1);
        // $title_image2 = Storage::disk('s3')->url($setting->title_image2);
        // $title_image3 = Storage::disk('s3')->url($setting->title_image3);
        
        return view('admin/site_setting', ['setting' => $setting, 'image1' => $image1]);
    }

    //Site Settingの更新
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'site_title' => 'required|max:255',
        ]);
        $file = $request->file('title_image1');
        $path = Storage::disk('s3')->putFile('/SiteSetting', $file, 'public');

        $setting = Setting::findOrFail($id);
        $setting->site_title = $request->site_title;
        $setting->site_description = $request->site_description ? $request->site_description : "";
        $setting->title_image1 = $path ? $path : "";
        $setting->title_image2 = $request->title_image2 ? $request->title_image2 : "";
        $setting->title_image3 = $request->title_image3 ? $request->title_image3 : "";
        $setting->site_color = $request->site_color ? $request->site_color : "";
        $setting->save();

        return redirect('/admin');
    }
}

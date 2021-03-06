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

        $image1 = $setting->title_image1 ? Storage::disk('s3')->url($setting->title_image1): "";
        $image2 = $setting->title_image2 ? Storage::disk('s3')->url($setting->title_image2): "";
        $image3 = $setting->title_image3 ? Storage::disk('s3')->url($setting->title_image3): "";
        
        return view('admin/site_setting', ['setting' => $setting, 'image1' => $image1, 'image2' => $image2, 'image3' => $image3]);
    }

    //Site Settingの更新
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'site_title' => 'required|max:255',
        ]);

        $setting = Setting::findOrFail($id);

        if($request->file('title_image1')){
            $file1 = $request->file('title_image1');
            $path1 = Storage::disk('s3')->putFile('/SiteSetting', $file1, 'public');
            $setting->title_image1 = $path1;
        }

        if($request->file('title_image2')){
            $file2 = $request->file('title_image2');
            $path2 = Storage::disk('s3')->putFile('/SiteSetting', $file2, 'public');
            $setting->title_image2 = $path2;
        }

        if($request->file('title_image3')){
            $file3 = $request->file('title_image3');
            $path3 = Storage::disk('s3')->putFile('/SiteSetting', $file3, 'public');
            $setting->title_image3 = $path3;
        }

        $setting->site_title = $request->site_title;
        $setting->site_description = $request->site_description ? $request->site_description : "";
        $setting->site_color = $request->site_color ? $request->site_color : "";
        $setting->save();

        return redirect('/admin');
    }

    //画像１の削除
    public function deleteImg1(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);
        
        //TODO: S3から画像を削除する処理を追加

        $setting->title_image1 = '';
        $setting->save();

        return redirect('/admin/site-setting');
    }

    //画像2の削除
    public function deleteImg2(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);
        
        //TODO: S3から画像を削除する処理を追加

        $setting->title_image2 = '';
        $setting->save();

        return redirect('/admin/site-setting');
    }

    //画像3の削除
    public function deleteImg3(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);
        
        //TODO: S3から画像を削除する処理を追加

        $setting->title_image3 = '';
        $setting->save();

        return redirect('/admin/site-setting');
    }
}

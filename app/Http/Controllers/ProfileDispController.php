<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Setting;
use App\Footer;

class ProfileDispController extends Controller
{
    public function show()
    {
        $profile = Profile::findOrFail(1);
        //サイト情報の取得
        $setting = Setting::findOrFail(1);

        $site_title = $setting->site_title;

        //footer情報の取得
        $footer = Footer::all();

        return view('profile', compact('profile', 'site_title', 'footer'));
    }
    
}

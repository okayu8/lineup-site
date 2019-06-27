<?php
namespace App\Services;
use App\Setting;
class SiteSettingService{

    public function FirstSetting()
    {
        $setting = new Setting();
        $setting->id = 1;
        $setting->site_title = "My Site";
        $setting->site_description = "";
        $setting->title_image1 = "";
        $setting->title_image2 = "";
        $setting->title_image3 = "";
        $setting->site_color = "";
        $setting->save();

        return;
    }
}
<?php
namespace App\Services;
use App\Profile;
class ProfileService{

    public function FirstSetting()
    {
        $profile = new Profile();
        $profile->id = 1;
        $profile->name = "";
        $profile->description = "";
        $profile->save();

        return;
    }
}
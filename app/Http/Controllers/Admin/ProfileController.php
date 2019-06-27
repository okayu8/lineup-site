<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Services\ProfileService;


class ProfileController extends Controller
{
    protected $profileService;
    public function __construct(ProfileService $profile_service)
    {
        $this->middleware('auth');
        $this->profileService = $profile_service;
    }

    //profileを表示
    public function index()
    {
        if(Profile::find(1)){
            $profile = Profile::findOrFail(1);
        }
        else{
            $this->profileService->FirstSetting();
            $profile = Profile::find(1);
        }
        
        return view('admin/profile_edit', ['profile' => $profile]);
    }

    //profileの更新
    public function update(Request $request, $id)
    {
        $setting = Profile::findOrFail($id);
        $setting->name = $request->name ? $request->name : "";
        $setting->description = $request->description ? $request->description : "";
        $setting->save();

        return redirect('/admin');
    }
}

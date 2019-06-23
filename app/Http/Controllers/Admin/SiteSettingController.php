<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;

class SiteSettingController extends Controller
{
    //site settingを表示
    public function index()
    {
        $setting = Setting::all();

        return view('admin/site_setting', ['setting' => $setting]);
    }

    //Productの更新
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'site_title' => 'required|max:255',
        ]);
        $product = Product::findOrFail($id);
        $product->site_title = $request->site_title;
        $product->site_description = $request->site_description ? $request->site_description : "";
        $product->title_image1 = $request->title_image1 ? $request->title_image1 : "";
        $product->title_image2 = $request->title_image2 ? $request->title_image2 : "";
        $product->title_image3 = $request->title_image3 ? $request->title_image3 : "";
        $product->site_color = $request->site_color ? $request->site_color : null;
        $product->save();

        return redirect('/admin/site_setting');
    }
}

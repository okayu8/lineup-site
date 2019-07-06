<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $setting = Setting::findOrFail(1);

        $site_title = $setting->site_title;
        //TODO: DBから取得
        $slide_img = array('/images/DSC00247.jpg', '/images/DSC01300.jpg', '/images/DSC01311.jpg');

        //TODO:S3から画像取得するか検討中(S3からだと読み込みが遅いため)
        // $slide_img = array();
        // $setting->title_image1 && array_push($slide_img, Storage::disk('s3')->url($setting->title_image1));
        // $setting->title_image2 && array_push($slide_img, Storage::disk('s3')->url($setting->title_image2));
        // $setting->title_image3 && array_push($slide_img, Storage::disk('s3')->url($setting->title_image3));

        //TODO: DBから取得
        $lineup_array = array(
            'test1' => array(
                'img'=>'/images/DSC00247.jpg', 
                'title'=>'test1', 
                'desc'=>'テスト1という商品です。',),
            'test2' => array(
                'img'=>'/images/DSC01300.jpg', 
                'title'=>'test2', 
                'desc'=>'テスト2という商品です。'),
            'test3' => array(
                'img'=>'/images/DSC01311.jpg', 
                'title'=>'test3', 
                'desc'=>'テスト2という商品です。'),
            'test4' => array(
                'img'=>'/images/DSC01311.jpg', 
                'title'=>'test4', 
                'desc'=>'テスト2という商品です。'),
            );
        return view('home', compact('site_title', 'slide_img', 'lineup_array'));
    }
}
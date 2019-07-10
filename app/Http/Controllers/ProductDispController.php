<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Product;
use App\Setting;
use App\Footer;

class ProductDispController extends Controller
{
    public function show($id)
    {
        //商品情報の取得
        $product = Product::findOrFail($id);

        //画像のURLを取得
        $images = array();
        $product->file_name && array_push($images, Storage::disk('s3')->url($product->file_name));
        $product->file_name2 && array_push($images, Storage::disk('s3')->url($product->file_name2));
        $product->file_name3 && array_push($images, Storage::disk('s3')->url($product->file_name3));

        //サイト情報の取得
        $setting = Setting::findOrFail(1);

        $site_title = $setting->site_title;

        //footer情報の取得
        $footer = Footer::all();

        return view('product', compact('product', 'images', 'site_title', 'footer'));
    }
}

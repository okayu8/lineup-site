<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Product;

class ProductDispController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $images = array();
        $product->file_name && array_push($images, Storage::disk('s3')->url($product->file_name));
        $product->file_name2 && array_push($images, Storage::disk('s3')->url($product->file_name2));
        $product->file_name3 && array_push($images, Storage::disk('s3')->url($product->file_name3));

        return view('product', ['product' => $product, 'images' => $images]);
    }
}

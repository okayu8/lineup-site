<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('product');

        return response()->json($products);
    }

    //Productの作成
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255'
        ]);
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description ? $request->description : "";
        $product->file_name = $request->file_name ? $request->file_name : "";
        $product->file_name2 = $request->file_name2 ? $request->file_name2 : "";
        $product->file_name3 = $request->file_name3 ? $request->file_name3 : "";
        $product->price = $request->price ? $request->price : "";
        $product->product_url = $request->product_url ? $request->product_url : "";
        $product->category_id = $request->category_id ? $request->category_id : null;
        $product->save();

        return response()->json();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use DB;

class ProductController extends Controller
{
    //Productの作成
    public function store(Request $request)
    {
        //TODO:認証つける
        // $this->middleware('auth');

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
        $product->category = $category->id;
        $product->save();

        return response()->json();
    }
}

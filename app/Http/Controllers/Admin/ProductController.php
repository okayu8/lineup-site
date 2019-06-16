<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $product_service)
    {
        $this->middleware('auth');
        $this->productService = $product_service;
    }

    //Productのトップページを表示
    public function index()
    {
        $products = $this->productService->getAllProduct();

        return view('admin/products', $products);
    }

    //Product Createページの表示
    public function create()
    {
        return view('admin/product_create');
    }

    //Productの参照
    public function show(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        return view('admin/product_edit', ['product' => $product]);
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
        $product->price = $request->price ? $request->price : null;
        $product->product_url = $request->product_url ? $request->product_url : "";
        $product->category_id = $request->category_id ? $request->category_id : null;
        $product->save();

        return redirect('/admin/products');
    }

    //Productの参照
    public function edit(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        return view('admin/product_edit', ['product' => $product]);
    }

    //Productの更新
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description ? $request->description : "";
        $product->file_name = $request->file_name ? $request->file_name : "";
        $product->file_name2 = $request->file_name2 ? $request->file_name2 : "";
        $product->file_name3 = $request->file_name3 ? $request->file_name3 : "";
        $product->price = $request->price ? $request->price : null;
        $product->product_url = $request->product_url ? $request->product_url : "";
        $product->category_id = $request->category_id ? $request->category_id : null;
        $product->save();

        return redirect('/admin/products');
    }

    //Productの削除
    public function destroy(Request $request, $id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/admin/products');
    }
}

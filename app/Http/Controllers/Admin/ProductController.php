<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
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

        return view('admin/products', ['products' => $products]);
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

        $image1 = $product->file_name ? Storage::disk('s3')->url($product->file_name): "";
        $image2 = $product->file_name2 ? Storage::disk('s3')->url($product->file_name2): "";
        $image3 = $product->file_name3 ? Storage::disk('s3')->url($product->file_name3): "";

        return view('admin/product_edit', ['product' => $product, 'image1' => $image1, 'image2' => $image2, 'image3' => $image3]);
    }

    //Productの作成
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255'
        ]);

        $product = new Product();
        
        if($request->file('product_image1')){
            $file1 = $request->file('product_image1');
            $path1 = Storage::disk('s3')->putFile('/Product', $file1, 'public');
            $product->file_name = $path1;
        }

        if($request->file('product_image2')){
            $file2 = $request->file('product_image2');
            $path2 = Storage::disk('s3')->putFile('/Product', $file2, 'public');
            $product->file_name2 = $path2;
        }

        if($request->file('product_image3')){
            $file3 = $request->file('product_image3');
            $path3 = Storage::disk('s3')->putFile('/Product', $file3, 'public');
            $product->file_name3 = $path3;
        }

        $product->title = $request->title;
        $product->description = $request->description ? $request->description : "";
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

        $image1 = $product->file_name ? Storage::disk('s3')->url($product->file_name): "";
        $image2 = $product->file_name2 ? Storage::disk('s3')->url($product->file_name2): "";
        $image3 = $product->file_name3 ? Storage::disk('s3')->url($product->file_name3): "";

        return view('admin/product_edit', ['product' => $product, 'image1' => $image1, 'image2' => $image2, 'image3' => $image3]);
    }

    //Productの更新
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);

        $product = Product::findOrFail($id);

        //TODO:画像が変更された場合、元の画像を削除する処理を追加
        if($request->file('product_image1')){
            $file1 = $request->file('product_image1');
            $path1 = Storage::disk('s3')->putFile('/Product', $file1, 'public');
            $product->file_name = $path1;
        }

        if($request->file('product_image2')){
            $file2 = $request->file('product_image2');
            $path2 = Storage::disk('s3')->putFile('/Product', $file2, 'public');
            $product->file_name2 = $path2;
        }

        if($request->file('product_image3')){
            $file3 = $request->file('product_image3');
            $path3 = Storage::disk('s3')->putFile('/Product', $file3, 'public');
            $product->file_name3 = $path3;
        }

        $product->title = $request->title;
        $product->description = $request->description ? $request->description : '';
        $product->price = $request->price ? $request->price : null;
        $product->product_url = $request->product_url ? $request->product_url : '';
        $product->category_id = $request->category_id ? $request->category_id : null;
        $product->save();

        return redirect('/admin/products');
    }

    //画像１の削除
    public function deleteImg1(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        
        //TODO: S3から画像を削除する処理を追加

        $product->file_name = '';
        $product->save();

        return redirect("/admin/products/{$id}/edit");
    }

    //画像2の削除
    public function deleteImg2(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        
        //TODO: S3から画像を削除する処理を追加

        $product->file_name2 = '';
        $product->save();

        return redirect("/admin/products/{$id}/edit");
    }

    //画像3の削除
    public function deleteImg3(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        
        //TODO: S3から画像を削除する処理を追加

        $product->file_name3 = '';
        $product->save();

        return redirect("/admin/products/{$id}/edit");
    }

    //Productの削除
    public function destroy(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/admin/products');
    }
}

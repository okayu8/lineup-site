<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $path = Storage::disk('s3')->url('hoge/1wRZQDtl4XnvYBgFRASZOXulRujAtbbHwIunofN1.jpeg');

        return view('admin/dashboard', ['path' => $path]);
    }

    public function registry()
    {
        // $this->middleware('auth');

        return view('admin/registry');
    }
    
    public function siteSetting()
    {
        return view('admin/site_settings');
    }

    public function profile()
    {
        return view('admin/profile_edit');
    }

    public function footer()
    {
        return view('admin/footer_edit');
    }

    public function uploadTest(Request $request)
    {
        $file = $request->file('file');
        // 第一引数はディレクトリの指定
        // 第二引数はファイル
        // 第三引数はpublicを指定することで、URLによるアクセスが可能となる
        $path = Storage::disk('s3')->putFile('/hoge', $file, 'public');
        // hogeディレクトリにアップロード
        // $path = Storage::disk('s3')->putFile('/hoge', $file, 'public');
        // ファイル名を指定する場合はputFileAsを利用する
        // $path = Storage::disk('s3')->putFileAs('/', $file, 'hoge.jpg', 'public');
        return redirect('/admin');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Footer;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Services\FooterService;

class FooterController extends Controller
{
    protected $footerService;
    public function __construct(FooterService $footer_service)
    {
        $this->middleware('auth');
        $this->footerService = $footer_service;
    }

    //Footerページの表示
    public function index()
    {
        $footer = $this->footerService->getAllFooter();

        return view('admin/footer_edit', ['footer' => $footer]);
    }

    //Footerの作成
    public function store(Request $request)
    {
        $this->validate($request, [
            'display_name' => 'required|max:100'
        ]);
        $footer = new Footer();
        $footer->display_name = $request->display_name;
        $footer->url = $request->url;
        
        $footer->save();

        return redirect('/admin/footer');
    }

    //Footerの更新
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'display_name' => 'required|max:100'
        ]);
        $footer = Footer::findOrFail($id);
        $footer->display_name = $request->display_name;
        $footer->url = $request->url;
        
        $footer->save();

        return redirect('/admin/footer');
    }

    //Footerの削除
    public function destroy(Request $request, $id)
    {
        $footer = Footer::findOrFail($id);
        $footer->delete();

        return redirect('/admin/footer');
    }
}

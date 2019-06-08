<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
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
        return view('admin/dashboard');
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

    public function products()
    {
        return view('admin/products');
    }

    public function profile()
    {
        return view('admin/profile_edit');
    }

    public function footer()
    {
        return view('admin/footer_edit');
    }
}

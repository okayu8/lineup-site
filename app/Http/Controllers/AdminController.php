<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
}

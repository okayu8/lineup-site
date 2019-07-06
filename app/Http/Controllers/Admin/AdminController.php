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
        return view('admin/dashboard');
    }

    public function registry()
    {
        return view('admin/registry');
    }
}

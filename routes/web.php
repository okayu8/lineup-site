<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();
Route::get('/', 'HomeController@index');

//admin
Route::get('/admin', 'Admin\AdminController@index');
Route::get('/admin/registry', 'Admin\AdminController@registry');
Route::resource('/admin/site-setting', 'Admin\SiteSettingController', ['only' => ['index', 'update']]);
Route::resource('/admin/products', 'Admin\ProductController', ['only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']]);
Route::resource('/admin/profile', 'Admin\ProfileController', ['only' => ['index', 'update']]);
Route::resource('/admin/footer', 'Admin\FooterController', ['only' => ['index', 'store', 'update', 'destroy']]);

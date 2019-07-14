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
Route::get('/product/{id}', 'ProductDispController@show');
Route::get('/profile', 'ProfileDispController@show');

//admin
Route::get('/admin', 'Admin\AdminController@index');
Route::get('/admin/registry', 'Admin\AdminController@registry');
Route::resource('/admin/site-setting', 'Admin\SiteSettingController', ['only' => ['index', 'update']]);
Route::put('/admin/site-setting/deleteimg1/{id}', 'Admin\SiteSettingController@deleteImg1');
Route::put('/admin/site-setting/deleteimg2/{id}', 'Admin\SiteSettingController@deleteImg2');
Route::put('/admin/site-setting/deleteimg3/{id}', 'Admin\SiteSettingController@deleteImg3');
Route::resource('/admin/products', 'Admin\ProductController', ['only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']]);
Route::put('/admin/products/deleteimg1/{id}', 'Admin\ProductController@deleteImg1');
Route::put('/admin/products/deleteimg2/{id}', 'Admin\ProductController@deleteImg2');
Route::put('/admin/products/deleteimg3/{id}', 'Admin\ProductController@deleteImg3');
Route::resource('/admin/profile', 'Admin\ProfileController', ['only' => ['index', 'update']]);
Route::resource('/admin/footer', 'Admin\FooterController', ['only' => ['index', 'store', 'update', 'destroy']]);

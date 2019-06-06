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
Route::get('/admin', 'AdminController@index');
Route::get('/admin/registry', 'AdminController@registry');
Route::get('/admin/site-settings', 'AdminController@siteSetting');
Route::get('/admin/products', 'AdminController@products');
Route::get('/admin/profile', 'AdminController@profile');
Route::get('/admin/footer', 'AdminController@footer');

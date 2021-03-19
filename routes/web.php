<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('index',[6
// 	'as'=>'trang-chu',
// 	'user'=>'PageController@getIndex'
// ]);

Route::get('index','App\Http\Controllers\PageController@getIndex')->name('trang-chu');

Route::get('loai-san-pham/{type}','App\Http\Controllers\PageController@getLoaiSp')->name('loaisanpham');

Route::get('chi-tiet-san-pham/{id}','App\Http\Controllers\PageController@getChitiet')->name('chitietsanpham');

Route::get('lien-he','App\Http\Controllers\PageController@getLienHe')->name('lienhe');

Route::get('gioi-thieu','App\Http\Controllers\PageController@getGioiThieu')->name('gioithieu');

Route::get('search','App\Http\Controllers\PageController@getSearch')->name('search');






Route::get('add-to-cart/{id}',[
	'as' => 'themgiohang',
	'uses' => 'App\Http\Controllers\PageController@getAddToCart'
]);



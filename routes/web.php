<?php

use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('index',[
    'as'=>'trang-chu',
    'uses'=>'App\Http\Controllers\PageController@getIndex'
]);

Route::get('loaisanpham/{Loai}',[
    'as'=>'loai-san-pham',
    'uses'=>'App\Http\Controllers\PageController@getSanpham'
]);

Route::get('chitietsanpham/{Chitiet}', [
    'as'=>'chi-tiet-san-pham',
    'uses'=>'App\Http\Controllers\PageController@getChitiet'
]);

Route::get('lienhe',[
    'as'=>'lien-he',
    'uses'=>'App\Http\Controllers\PageController@getLienhe'
]);

Route::get('gioithieu',[
    'as'=>'gioi-thieu',
    'uses'=>'App\Http\Controllers\PageController@getGioithieu'
]);

Route::get('nhaxb/{NhaXB}',[
    'as'=>'nha-xuat-ban',
    'uses'=>'App\Http\Controllers\PageController@getNhaxuatban'
]);

Route::get('dangnhapuser',[
    'as'=>'dang-nhap-user',
    'uses'=>'App\Http\Controllers\UserController@getDangnhap'
]);

Route::post('dangnhapuser',[
    'as'=>'dang-nhap-user',
    'uses'=>'App\Http\Controllers\UserController@postDangnhap'
]);

Route::get('dangkyuser',[
    'as'=>'dang-ky-user',
    'uses'=>'App\Http\Controllers\UserController@getDangky'
]);

Route::post('dangkyuser', [
    'as'=>'dang-ky-user',
    'uses'=>'App\Http\Controllers\UserController@postDangky'
]);

Route::get('dangxuatuser', [
    'as'=>'dang-xuat-user',
    'uses'=>'App\Http\Controllers\UserController@getDangxuat'
]);

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'sach'], function () {
        Route::get('listsach','App\Http\Controllers\BookController@getListSach');

        Route::get('themsach','App\Http\Controllers\BookController@getThemSach');
        Route::post('themsach','App\Http\Controllers\BookController@postThemSach');

        Route::get('suasach/{book_id}','App\Http\Controllers\BookController@getSuaSach');
        Route::post('suasach/{book_id}','App\Http\Controllers\BookController@postSuaSach');

        Route::get('xoasach/{book_id}', 'App\Http\Controllers\BookController@getXoaSach');
    });

    Route::group(['prefix' => 'loai'], function () {
        Route::get('listloai','App\Http\Controllers\CatController@getListLoai');

        Route::get('themloai','App\Http\Controllers\CatController@getThemLoai');
        Route::post('themloai','App\Http\Controllers\CatController@postThemLoai');

        Route::get('sualoai/{cat_id}','App\Http\Controllers\CatController@getSuaLoai');
        Route::post('sualoai/{cat_id}','App\Http\Controllers\CatController@postSuaLoai');

        Route::get('xoaloai/{cat_id}', 'App\Http\Controllers\CatController@getXoaLoai');
    });

    Route::group(['prefix' => 'nhaxb'], function () {
        Route::get('listnxb','App\Http\Controllers\PubController@getListNxb');

        Route::get('themnxb','App\Http\Controllers\PubController@getThemNxb');
        Route::post('themnxb','App\Http\Controllers\PubController@postThemNxb');

        Route::get('suanxb/{pub_id}','App\Http\Controllers\PubController@getSuaNxb');
        Route::post('suanxb/{pub_id}','App\Http\Controllers\PubController@postSuaNxb');

        Route::get('xoanxb/{pub_id}', 'App\Http\Controllers\PubController@getXoaNxb');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('listuser','App\Http\Controllers\UserController@getListUser');

    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('listadmin','App\Http\Controllers\AdminController@getListAdmin');

        Route::get('themadmin','App\Http\Controllers\AdminController@getThemAdmin');
        Route::post('themadmin','App\Http\Controllers\AdminController@postThemAdmin');

        Route::get('suaadmin/{username}','App\Http\Controllers\AdminController@getSuaAdmin');
        Route::post('suaadmin/{username}','App\Http\Controllers\AdminController@postSuaAdmin');

        Route::get('xoaadmin/{username}', 'App\Http\Controllers\AdminController@getXoaAdmin');
    });
});

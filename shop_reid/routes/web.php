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

Route::get('/',[
    'as'=>'trangchu',
    'uses'=>'PageController@getIndex'
]);

Route::get('shop',[
    'as'=>'shop',
    'uses'=>'PageController@getShop'
]);

Route::get('chi-tiet-san-pham/{id}',[
    'as'=>'chitietsanpham',
    'uses'=>'PageController@getChitiet'
]);

Route::get('dang-nhap',[
    'as'=>'dangnhap',
    'uses'=>'PageController@getLogin'
]);

Route::post('dang-nhap',[
    'as'=>'dangnhap',
    'uses'=>'PageController@postLogin'
]);

Route::get('dang-ki',[
    'as'=>'dangki',
    'uses'=>'PageController@getSignin'
]);

Route::post('dang-ki',[
    'as'=>'dangki',
    'uses'=>'PageController@postSignin'
]);

Route::get('dia-chi',[
    'as'=>'diachi',
    'uses'=>'PageController@getDiachi'
]);

Route::post('dia-chi',[
    'as'=>'diachi',
    'uses'=>'PageController@postDiachi'
]);

Route::get('goi-thieu',[
    'as'=>'gioithieu',
    'uses'=>'PageController@getGioithieu'
]);

Route::get('tin-tuc',[
    'as'=>'tintuc',
    'uses'=>'PageController@getTintuc'
]);

Route::post('tin-tuc',[
    'as'=>'tintuc',
    'uses'=>'PageController@postTintuc'
]);

Route::get('hoa-don',[
    'as'=>'hoadon',
    'uses'=>'PageController@getHoadon'
]);

Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddtoCart'
]); 

Route::get('del-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'PageController@getDelItemCart'
]);

Route::post('hoa-don',[
    'as'=>'hoadon',
    'uses'=>'PageController@postCheckout'
]);

Route::get('dang-xuat',[
    'as'=>'logout',
    'uses'=>'PageController@postLogout'
]);




//admin




Route::get('ad-cap-nhat-san-pham',[
    'as'=>'adcapnhatsp',
    'uses'=>'AdminController@getAdCapnhatSp'
]);

Route::get('ad-cap-nhat-tin-tuc',[
    'as'=>'adcapnhattintuc',
    'uses'=>'AdminController@getAdCapnhatTt'
]);

Route::get('ad-danh-muc',[
    'as'=>'addanhmuc',
    'uses'=>'AdminController@getAdDanhmuc'
]);

Route::get('ad-don-hang',[
    'as'=>'addonhang',
    'uses'=>'AdminController@getAdDonhang'
]);

Route::get('ad-dang-nhap',[
    'as'=>'addangnhap',
    'uses'=>'AdminController@getAdLogin'
]);

Route::get('ad-dang-ki',[
    'as'=>'addangki',
    'uses'=>'AdminController@getAdRegister'
]);

Route::get('ad-san-pham',[
    'as'=>'adsanpham',
    'uses'=>'AdminController@getAdSanpham'
]);

Route::get('ad-thanh-vien',[
    'as'=>'adthanhvien',
    'uses'=>'AdminController@getAdThanhvien'
]);

Route::get('ad-tin-tuc',[
    'as'=>'adtintuc',
    'uses'=>'AdminController@getAdTintuc'
]);
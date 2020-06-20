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

Route::get('index', [
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);

Route::get('product/{type}', [
    'as'=>'sanpham',
    'uses'=>'PageController@getProPagebyType'
]);

Route::get('introduction', [
    'as'=>'gioithieu',
    'uses'=>'PageController@getIntroPage'
]);

Route::get('contact',[
    'as'=>'lienhe',
    'uses'=>'PageController@getContactPage'
]);

Route::get('cart',[
    'as'=>'giohang',
    'uses'=>'PageController@getCartPage'
]);

Route::get('product-detail/{id}', [
    'as'=>'chitiet',
    'uses'=>'PageController@getDetailPage'
]);

// Route for register
Route::get('register', [
    'as'=>'dangky',
    'uses'=>'AccountController@getRegister'
]);

Route::post('addNguoidung',[
    'as'=>'addUsers',
    'uses'=>'AccountController@addUser'
]);

// Route for seller register
Route::get('sellerRegister',[
    'as'=>'dangkybanhang',
    'uses'=>'AccountController@getSellerRegister'
]);

Route::post('addSeller',[
    'as'=>'addSellerRegister',
    'uses'=>'AccountController@addSeller'
]);

// Route tim kiem
Route::get('timkiem',[
    'as'=>'tim-kiem',
    'uses'=>'PageController@getSearch']);

    
Route::post('dang-nhap', [
    'as' => 'login',
    'uses' => 'AccountController@login',
]);
// Route::post('login','AccountController@login');

Route::get('dang-xuat', [
    'as' => 'logout',
    'uses' => 'AccountController@getLogout',
]);

// Route thêm sản phẩm vào giỏ hàng 

Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddToCart'
]);

// Route đến trang checkout

Route::get('checkout',[
    'as'=>'dathang',
    'uses'=>'PageController@getCheckout'
]);

Route::post('checkout',[				
    'as'=>'dathang',			
    'uses'=>'PageController@postCheckout'			
    ]);		
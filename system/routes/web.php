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

Route::get('home', function () {
    return view('template.home');
});

Route::get('shop-grid', function () {
    return view('template.shop-grid');
});

Route::get('shop-detail', function () {
    return view('template.shop-detail');
});

Route::get('shoping-cart', function () {
    return view('template.shoping-cart');
});

Route::get('contact', function () {
    return view('template.contact');
});

Route::get('checkout', function () {
    return view('template.checkout');
});

Route::get('blog', function () {
    return view('template.blog');
});

Route::get('blog-details', function () {
    return view('template.blog-details');
});

Route::get('index1', function () {
    return view('template.index');
});

Route::get('login', function () {
    return view('template.login');
});

Route::get('index', function () {
    return view('template-admin.index');
});
Route::get('produk', function () {
    return view('template-admin.utils.produk');
});

Route::get('kategori', function () {
    return view('template-admin.utils.kategori');
});
Route::get('pelanggan', function () {
    return view('template-admin.utils.pelanggan');
});
Route::get('suplier', function () {
    return view('template-admin.utils.suplier');
});

Route::get('user', function () {
    return view('template-admin.utils.user');
});




<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductVariantController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('client.home');
});
Route::get('/san-pham', function () {
    return view('client.sanpham');
});
Route::get('/login', function () {
    return view('user.login');
});
Route::get('/admin', function () {
    return view('admin.home');
});

//thuong hieu
Route::controller(BrandController::class)
    ->prefix('brand')
    ->group(function () {
    Route::get('list', 'index')->name('brand.list');
    Route::get('search', 'search')->name('brand.search');
    Route::get('create', 'create')->name('brand.create');
    Route::post('store', 'store')->name('brand.store');
    Route::get('edit/{id}', 'edit')->name('brand.edit');
    Route::post('update/{id}', 'update')->name('brand.update');
    Route::delete('delete/{id}', 'destroy')->name('brand.destroy');
});
// danh muc
Route::controller(CategoryController::class)
    ->prefix('danhmuc')
    ->group(function () {
    Route::get('list', 'index')->name('danhmuc.list');
    Route::get('search', 'search')->name('danhmuc.search');
    Route::get('create', 'create')->name('danhmuc.create');
    Route::post('store', 'store')->name('danhmuc.store');
    Route::get('{id}/edit', 'edit')->name('danhmuc.edit');
    Route::post('{id}/update', 'update')->name('danhmuc.update');
    Route::delete('{id}/destroy', 'destroy')->name('danhmuc.destroy');
});
// san pham
Route::controller(ProductController::class)
    ->prefix('sanpham')
    ->group(function () {
        Route::get('list', 'index')->name('index');
        Route::get('search', 'search')->name('search');
        Route::get('show-product/{id}', 'show')->name('show');
        Route::get('create', 'create')->name('create');
        Route::post('create', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('edit/{id}', 'update')->name('update');
        Route::delete('delete/{id}', 'destroy')->name('destroy');
});
// thuoc tinh
Route::controller(ProductVariantController::class)
->prefix('thuoc-tinh')
->group(function () {
    Route::get('/', 'index')->name('thuoc-tinh.list');
    Route::get('/create', 'create')->name('thuoc-tinh.create');
    Route::post('/store', 'store')->name('thuoc-tinh.store');
});

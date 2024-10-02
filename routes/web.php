<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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
Route::get('/admin/category-list', function () {
    return view('admin.danhmuc.list');
});
Route::controller(BrandController::class)->group(function () {
    Route::get('/brand-list', 'index')->name('brand.list');
    Route::get('/create-brand', 'create')->name('brand.create');
    Route::post('/create-brand', 'store')->name('brand.store');
    Route::get('/edit-brand/{id}', 'edit')->name('brand.edit');
    Route::post('/edit-brand/{id}', 'update')->name('brand.update');
    Route::delete('/delete-brand/{id}', 'destroy')->name('brand.destroy');
});

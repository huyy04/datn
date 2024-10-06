<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
// User
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('client.home'); })->name('client.home');
Route::get('/san-pham', function () {
    return view('client.sanpham');
});
Route::get('/login', function () {
    return view('user.login');
});


// Phân quyền admin
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.home');})->name('admin.home');
Route::get('/admin/category-list', function () {
    return view('admin.danhmuc.list');
});
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

Route::controller(ProductController::class)
    ->prefix('product')
    ->group(function () {
        Route::get('list', 'index')->name('product.index');
        Route::get('search', 'search')->name('product.search');
        Route::get('create', 'create')->name('product.create');
        Route::post('store', 'store')->name('product.store');
        Route::get('edit/{id}', 'edit')->name('product.edit');
        Route::post('edit/{id}', 'update')->name('product.update');
        Route::delete('delete/{id}', 'destroy')->name('product.destroy');
});
});


require __DIR__.'/auth.php';

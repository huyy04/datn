<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LoginUserController;
use App\Http\Controllers\Auth\ProfileController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductVariantController;
use App\Http\Controllers\Admin\BillController;
use App\Http\Controllers\Admin\UserController;


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
    return view('client.home'); })->name('client.home');
Route::get('/san-pham', function () {
    return view('client.sanpham');
});


Route::get('/register', [RegisteredUserController::class, 'create'])->name('user.register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

Route::get('/login', [LoginUserController::class, 'create'])->name( 'user.login');
Route::post('/login', [LoginUserController::class, 'store'])->name('login.store');


Route::middleware('auth')->group(function () {
    // Các route yêu cầu người dùng đã đăng nhập
    Route::post('/logout', [LoginUserController::class, 'logout'])->name('logout');
});

// Phân quyền admin
//Route::middleware(['auth', 'isAdmin'])->group(function () {
//    Route::get('/admin', function () {
//        return view('admin.home');})->name('admin.home');

Route::get('/admin', function () {
    return view('admin.home');
})->name('admin.home');

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
    Route::get('/edit/{id}', 'edit')->name('danhmuc.edit');
    Route::post('/update/{id}', 'update')->name('danhmuc.update');
    Route::delete('/destroy/{id}', 'destroy')->name('danhmuc.destroy');
});

Route::controller(ProductController::class)
    ->prefix('san-pham')
    ->group(function () {
        Route::get('list', 'index')->name('san-pham.index');
        Route::get('search', 'search')->name('san-pham.search');
        Route::get('create', 'create')->name('san-pham.create');
        Route::post('store', 'store')->name('san-pham.store');
        Route::get('show/{id}', 'show')->name('san-pham.show');
        Route::get('/{id}/edit', 'edit')->name('san-pham.edit');
        Route::put('/{id}/update', 'update')->name('san-pham.update');
        Route::delete('/{id}/delete', 'destroy')->name('san-pham.destroy');
});

Route::controller(ProductVariantController::class)->prefix('thuoc-tinh')->group(function () {
    Route::get('list', 'index')->name('thuoc-tinh.index');
    Route::get('search', 'search')->name('thuoc-tinh.search');
    Route::get('create', 'create')->name('thuoc-tinh.create');
    Route::post('store', 'store')->name('thuoc-tinh.store');
});

Route::controller(UserController::class)
    ->prefix('user')
    ->group(function () {
        Route::get('list', 'index')->name('user.list');
        Route::get('search', 'search')->name('user.search');
        Route::get('create', 'create')->name('user.create');
        Route::post('store', 'store')->name('user.store');
        Route::get('{id}/edit', 'edit')->name('user.edit');
        Route::post('{id}/update', 'update')->name('user.update');
        Route::delete('{id}/destroy', 'destroy')->name('user.destroy');
    });

Route::controller(BillController::class)
    ->prefix('bill')
    ->group(function () {
        Route::get('list', 'index')->name('bill.list');
        Route::get('search', 'search')->name('bill.search');
        Route::get('{id}/show', 'show')->name('bill.show');
        Route::get('{id}/edit', 'edit')->name('bill.edit');
        Route::post('{id}/update', 'update')->name('bill.update');
        Route::delete('{id}/destroy', 'destroy')->name('bill.destroy');
    });
//});




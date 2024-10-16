<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\API\ProductController;
use App\Http\Controllers\Admin\API\CategoryController;
use App\Http\Controllers\Admin\API\ProductVariantController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(ProductController::class)
    ->prefix('san-pham')
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/{id}', 'show');
        Route::post('/store', 'store');
        Route::put('/update/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy');
});

Route::controller(CategoryController::class)
    ->prefix('danh-muc')
    ->group(function () {
        Route::get('/', 'index');
        Route::post('store', 'store');
        Route::put('update/{id}', 'update');
        Route::delete('delete/{id}', 'delete');
    });

Route::controller(ProductVariantController::class)->prefix('thuoc-tinh')->group(function () {
    Route::get('/', 'index');
    Route::post('/store', 'store');
    Route::put('update/{id}', 'update');
    Route::delete('delete/{id}', 'delete');
});

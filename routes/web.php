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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Dashboard
Route::prefix('dashboard')->group(function () {
    // Trang chủ dashboard
    Route::get('/',[\App\Http\Controllers\backend\DashboardController::class,'index'])->name('backend.dashboard');
    // Quản lý sản phẩm
    Route::prefix('products')->group(function(){
        Route::get('/', [\App\Http\Controllers\backend\ProductController::class,'index'])->name('backend.product.index');
        //Thêm mới
        Route::get('/create', [\App\Http\Controllers\backend\ProductController::class,'create'])->name('backend.product.create');
        Route::post('/', [\App\Http\Controllers\backend\ProductController::class,'store'])->name('backend.product.store');
        //Chỉnh sửa
        Route::get('/{id}/edit', [\App\Http\Controllers\backend\ProductController::class,'edit'])->name('backend.product.edit');
        Route::put('/{id}', [\App\Http\Controllers\backend\ProductController::class,'update'])->name('backend.product.update');

        // Route::get('/{id}', [\App\Http\Controllers\Backend\ProductController::class,'showImages'])->name('backend.product.showImage');
    });
    // Quản lý người dùng
    Route::prefix('users')->group(function(){
        Route::get('/test', [\App\Http\Controllers\backend\UserController::class,'test'])->name('backend.user.test');
        Route::get('/', [\App\Http\Controllers\backend\UserController::class,'index'])->name('backend.user.index');
        Route::get('/create', [\App\Http\Controllers\backend\UserController::class,'create'])->name('backend.user.create');
        Route::get('/{id}', [\App\Http\Controllers\Backend\UserController::class, 'showProducts'])->name('backend.user.showProducts');
    });
    // Quản lý danh mục
    Route::prefix('categories')->group(function(){
        Route::get('/', [\App\Http\Controllers\backend\CategoryController::class,'index'])->name('backend.categories.index');
        //Thêm mới
        Route::get('/create', [\App\Http\Controllers\backend\CategoryController::class,'create'])->name('backend.categories.create');
        Route::post('/', [\App\Http\Controllers\backend\CategoryController::class,'store'])->name('backend.categories.store');
        //Chỉnh sửa
        Route::get('/{id}/edit', [\App\Http\Controllers\backend\CategoryController::class,'edit'])->name('backend.categories.edit');
        Route::put('/{id}', [\App\Http\Controllers\backend\CategoryController::class,'update'])->name('backend.categories.update');

        // Route::get('/{id}', [\App\Http\Controllers\Backend\CategoryController::class,'showProducts'])->name('backend.categories.showProducts');
    });
    // Quản lý đặt hàng
    Route::prefix('orders')->group(function(){
        Route::get('/', [\App\Http\Controllers\backend\OrderController::class,'index'])->name('backend.order.index');
        Route::get('/{id}', [\App\Http\Controllers\Backend\OrderController::class,'showProducts'])->name('backend.order.showProducts');
    });
});

// Trang bán hàng
Route::prefix('/')->group(function () {
    Route::get('/',[\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('frontend.index');
});

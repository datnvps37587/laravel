<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\API\CategoryControllerAPI;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\DanhMucBaiVietController;



Route::get('/', function () {
    return redirect()->route('login');
});

// Đăng nhập & Đăng xuất
Auth::routes();
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// USER
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/change-password', [UserController::class, 'changePassword'])->name('password.change');
Route::post('/update-password', [UserController::class, 'updatePassword'])->name('password.update');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Quản lý danh mục
    Route::resource('categories', CategoryController::class);
    Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');


    // Quản lý sản phẩm
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
    Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('products', [ProductController::class, 'store'])->name('products.store');

    // Quản lý bình luận
    Route::resource('comments', CommentController::class);
    Route::prefix('admin/comments')->group(function () {
        Route::get('/', [CommentController::class, 'index'])->name('admin.comments.index');
        Route::post('/delete/{id}', [CommentController::class, 'destroy'])->name('admin.comments.delete');
        Route::post('/toggle/{id}', [CommentController::class, 'toggle'])->name('admin.comments.toggle');
    });
    

    // Quản lý đánh giá
    Route::resource('reviews', ReviewController::class);

    // Quản lý tin tức
    Route::resource('baiviet', BaiVietController::class);


    Route::prefix('admin/baiviet/danhmuc')->group(function () {
        Route::get('/', [DanhMucBaiVietController::class, 'index'])->name('danhmuc.index');
        Route::get('/create', [DanhMucBaiVietController::class, 'create'])->name('danhmuc.create');
        Route::post('/store', [DanhMucBaiVietController::class, 'store'])->name('danhmuc.store');
    });

    // Quản lý đơn hàng
    Route::resource('orders', OrderController::class);

    
});

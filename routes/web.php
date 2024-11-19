<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;


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

Route::get('/', [AppController::class, 'index'])->name('app.index');





Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admindb');
Route::middleware(['auth', 'revalidate'])->group(function(){
    Route::get('/home', [UserController::class, 'index'])->name('user.index');
    Route::post('/add-cart/{id}', [ShopController::class, 'add_cart'])->name('add.cart');
    Route::get('/cart', [ShopController::class, 'cart'])->name('cart');
    Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/product-details/{id}', [ShopController::class, 'product_details'])->name('product.details');
    Route::get('/cart/{id}', [ShopController::class, 'remove_cart'])->name('remove.cart');
    Route::get('/checkout/{id}', [ShopController::class, 'checkout'])->name('checkout');
    Route::post('/add-checkout/{id}', [ShopController::class, 'add_checkout'])->name('add.checkout');
    Route::get('/order-history/{id}', [ShopController::class, 'order_history'])->name('order.history');
});

Route::middleware(['auth', 'auth.admin', 'revalidate'])->group(function(){
    Route::get('/show-product', [AdminController::class, 'index'])->name('admin.index');


    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::post('/add_category', [CategoryController::class, 'store'])->name('add_category');
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('edit-category');
    Route::post('/update-category/{id}', [CategoryController::class, 'update'])->name('update_category');
    Route::get('/delete_category/{id}', [CategoryController::class, 'destroy'])->name('delete_category');


    Route::get('/product', [ProductController::class, 'index'])->name('admin.product');
    Route::post('/add_product', [ProductController::class, 'store'])->name('add.product');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('edit.product');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('update.product');
    Route::get('/delete-product/{id}', [ProductController::class, 'destroy'])->name('delete.product');


    Route::get('/brand', [BrandController::class, 'index'])->name('admin.brand');
    Route::post('/add-brand', [BrandController::class, 'store'])->name('add-brand');
    Route::get('/edit-brand/{id}', [BrandController::class, 'edit_brand'])->name('edit-brand');
    Route::post('/update-brand/{id}', [BrandController::class, 'update_brand'])->name('update-brand');
    Route::get('/delete_brand/{id}', [BrandController::class, 'delete_brand'])->name('delete-brand');

    Route::get('/transaction', [TransactionController::class, 'index'])->name('admin.transaction');
    Route::get('/edit-transaction/{id}', [TransactionController::class, 'edit'])->name('edit.trans');
    Route::post('/update-transaction/{id}', [TransactionController::class, 'update'])->name('update.trans');
   
});





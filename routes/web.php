<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/admin/login', [LoginController::class, 'login'])->name('login');
Route::post('/admin/login', [LoginController::class, 'post_login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/danh-muc/{category}', [HomeController::class, 'category'])->name('home.category');
Route::get('//{product}-{slug?}', [HomeController::class, 'product'])->name('home.product');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
Route::get('/myaccount', [HomeController::class, 'myaccount'])->name('myaccount');
Route::get('/compare', [HomeController::class, 'compare'])->name('compare');
route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/', [AdminController::class, 'index'])->name('admin.category.index');
    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class
    ]);
});


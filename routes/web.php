<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\OrderHomeController;
use App\Http\Controllers\OrderController;

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
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');

Route::group(['prefix'=>'cart'], function(){
    Route::get('/',[CartController::class, 'view'])->name('home.cart');
    Route::get('/clear',[CartController::class, 'clear'])->name('home.cart-clear');
    Route::get('/add/{product}',[CartController::class, 'add'])->name('home.cart-add');
    Route::get('/remove/{product}',[CartController::class, 'remove'])->name('home.cart-remove');
    Route::get('/update/{product}',[CartController::class, 'update'])->name('home.cart-update');
    
});
Route::group(['prefix'=>'account'], function(){
    Route::get('/login',[AccountController::class, 'login'])->name('home.login');
    Route::post('/login',[AccountController::class, 'post_login'])->name('home.post_login');
    Route::get('/profile',[AccountController::class, 'profile'])->name('home.profile');
    Route::get('/logout',[AccountController::class, 'logout'])->name('home.logout');
    Route::get('/register',[AccountController::class, 'register'])->name('home.register');
    Route::post('/register',[AccountController::class, 'post_register'])->name('home.register');
    Route::get('/changer-password',[AccountController::class, 'changer-password'])->name('home.changer-password');
    
});
Route::group(['prefix'=>'order','middleware' => 'acc'], function(){
    Route::get('/',[OrderHomeController::class, 'order'])->name('home.order');
    Route::get('/checkout',[OrderHomeController::class, 'checkout'])->name('home.order_checkout');
    Route::post('/checkout',[OrderHomeController::class, 'post_checkout'])->name('home.order_checkout');
    Route::get('/detail/{order}',[OrderHomeController::class, 'detail'])->name('home.order_detail');    
});     
Route::get('/danh-muc/{category}', [HomeController::class, 'category'])->name('home.category');
Route::get('//{product}-{slug?}', [HomeController::class, 'product'])->name('home.product');
Route::get('/myaccount', [HomeController::class, 'myaccount'])->name('myaccount');
Route::get('/compare', [HomeController::class, 'compare'])->name('compare');



// ADMIN Route

Route::get('/admin/login', [LoginController::class, 'login'])->name('login');
Route::post('/admin/login', [LoginController::class, 'post_login'])->name('login');
Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/', [AdminController::class, 'index'])->name('admin.category.index');
    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class
    ]);
    Route::group(['prefix'=>'order'], function(){
        Route::get('/',[OrderController::class, 'index'])->name('order.index');
        Route::get('/detail/{order}',[OrderController::class, 'detail'])->name('order.detail');    
        Route::post('/status/{order}',[OrderController::class, 'status'])->name('order_status');    
    });
});


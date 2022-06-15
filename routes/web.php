<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Login_adController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\OrderHomeController;
use App\Http\Controllers\OrderAdminController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\LocaleController;

Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');
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
Route::get('/compare', [HomeController::class, 'compare'])->name('compare');


Route::get('locale/{lange}', [LocaleController::class, 'setLang']);

 
Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', 'HomeController@changeLanguage')
        ->name('user.change-language');
});
 Route::get('test','HomeController@test')->name('test');


Route::group(['prefix'=>'blog'], function(){
    Route::get('/', [HomeController::class, 'blog'])->name('blog');
    Route::get('/{blog_cat_id}-{slug}', [HomeController::class, 'blog_cat_id'])->name('blog_cat_id');
    Route::get('/{blog_cat_id}-{slug}/{slug2}/{blog}', [HomeController::class, 'blog_detail'])->name('blog_detail');
    Route::resources([
        'comment' => CommentBlogController::class
    ]);
});

                                //ADD Products ROUTE

Route::group(['prefix'=>'wishlist','middleware' => 'acc'], function(){
    Route::get('/',[WishlistController::class, 'view'])->name('home.wishlist');
    Route::get('/add/{product}', [WishlistController::class, 'add'])->name('home.add-wishlist');  
    Route::get('/remove/{product}',[WishlistController::class, 'remove'])->name('home.remove-wishlist');  
});

                                //Compare Route
Route::group(['prefix'=>'compare','middleware' => 'acc'], function(){
    Route::get('/',[CompareController::class, 'view'])->name('home.compare');
    Route::get('/add/{product}', [CompareController::class, 'add'])->name('home.add-compare');  
    Route::get('/remove/{product}',[CompareController::class, 'remove'])->name('home.remove-compare');  
});
                                    // Cart Route
Route::group(['prefix'=>'cart','middleware' => 'acc'], function(){
    Route::get('/',[CartController::class, 'view'])->name('home.cart');
    Route::get('/clear',[CartController::class, 'clear'])->name('home.cart-clear');
    Route::get('/add/{product}',[CartController::class, 'add'])->name('home.cart-add');
    Route::get('/remove/{product}',[CartController::class, 'remove'])->name('home.cart-remove');
    Route::get('/update/{product}',[CartController::class, 'update'])->name('home.cart-update');
});

                                // ACCOUNT Route
Route::group(['prefix'=>'account'], function(){
    Route::get('/login',[AccountController::class, 'login'])->name('home.login');
    Route::post('/login',[AccountController::class, 'post_login'])->name('home.post_login');
    Route::get('/profile',[AccountController::class, 'profile'])->name('home.profile');
    Route::get('/logout',[AccountController::class, 'logout'])->name('home.logout');
    Route::get('/register',[AccountController::class, 'register'])->name('home.register');
    Route::post('/register',[AccountController::class, 'post_register'])->name('home.register');

});       

Route::group(['prefix'=>'my-account','middleware' => 'acc'], function(){
    Route::get('/profile',[AccountController::class, 'my_account'])->name('my_account');
    Route::get('/changer-password',[AccountController::class, 'changer_password'])->name('home.changer_password');
    Route::post('/changer-password',[AccountController::class, 'post_changer_password'])->name('home.changer_password');
    Route::post('/edit',[AccountController::class, 'post_edit_account'])->name('home.account_edit');
});   

                            // Order route
Route::group(['prefix'=>'order','middleware' => 'acc'], function(){
    Route::get('/',[OrderHomeController::class, 'order_list'])->name('home.order');
    Route::get('/checkout',[OrderHomeController::class, 'checkout'])->name('home.order_checkout');
    Route::get('/get-districts',[OrderHomeController::class, 'getTbl_Districts'])->name('home.getTbl_Districts');
    Route::get('/get-wards',[OrderHomeController::class, 'getTbl_Wards'])->name('home.getTbl_Wards');
    Route::post('/checkout',[OrderHomeController::class, 'post_checkout'])->name('home.order_checkout');
    Route::post('/checkout/coupon',[OrderHomeController::class, 'check_coupon'])->name('home.checkout_coupon');
    Route::get('/checkout/coupon/_del',[OrderHomeController::class, 'del_coupon'])->name('home.del_coupon');
    Route::get('/detail/{order}',[OrderHomeController::class, 'detail'])->name('home.order_detail');  
    Route::get('/thank',[OrderHomeController::class, 'thank'])->name('thank'); 
});     

                                    //Categoru & Product Route
Route::get('/danh-muc/{category}', [HomeController::class, 'category'])->name('home.category');

Route::group(['prefix'=>'//{product}-{category?}-{slug?}'], function(){
    Route::get('/', [HomeController::class, 'product'])->name('home.product');
    Route::resources([
        'review' => ReviewController::class,
    ]);
}); 

Route::get('/myaccount', [HomeController::class, 'myaccount'])->name('myaccount');




                                    // ADMIN Route

Route::get('/admin/login', [Login_adController::class, 'login'])->name('login');
Route::post('/admin/login', [Login_adController::class, 'post_login'])->name('login');
Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('filter-order', [DashboardController::class, 'fillterOrder'])->name('filter.order');
    Route::get('filter-money', [DashboardController::class, 'filterMoney'])->name('filter.money');     
    Route::get('/logout', [Login_adController::class, 'logout_admin'])->name('ad_logout');
    Route::get('/', [AdminController::class, 'index'])->name('admin.category.index');
    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductAdminController::class,
        'banner' => BannerController::class,
        'coupon' => CouponController::class,
        'blog_cat' => Blog_catController::class,
        'blog' => Blog_AdminController::class,
        'contact' => ContactController::class,
        'brand_sale' => Brand_saleController::class
    ]);
    Route::group(['prefix'=>'order'], function(){
        Route::get('/',[OrderAdminController::class, 'index'])->name('order.index');
        Route::get('/detail/{order}',[OrderAdminController::class, 'detail'])->name('order.detail');    
        Route::post('/status/{order}',[OrderAdminController::class, 'status'])->name('order_status');    
    });
});


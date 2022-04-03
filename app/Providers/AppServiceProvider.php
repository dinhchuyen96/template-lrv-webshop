<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        view()->composer('*',function($view){
            $totalQuantity = 0;
            $totalWishlist = 0;
            $subPrice = 0;
            $totalPrice = 0;
            $vat=0;
            $tax = 0;
            $cats = Category::orderBy('name','ASC')->where('status','>',0)->get();
            $carts = session('cart') ? session('cart'):[];
            $wishlists = session('wishlist')? session('wishlist') : [];
            $totalWishlist = count($wishlists);
            foreach($carts as $key =>$cart){
                $totalQuantity += $cart->quantity;
                $subPrice += $cart->price * $cart->quantity;
                $tax = $subPrice * 0.02;
                $vat = $totalQuantity * $subPrice * 0.01;
                $totalPrice = $subPrice + $vat + $tax;
            }
            $view->with(compact('cats','carts','totalQuantity','tax','subPrice','totalPrice','vat','totalWishlist'));
        });
    }
}

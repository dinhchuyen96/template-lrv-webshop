<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Auth;

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
            $acc = Auth::guard('account')->user(); // lấy thông tin account đang đăng nhập
            // dd($acc->all());
            if($acc == null){
                $acc = [
                    'first_name' => "Guest",
                    'last_name' => ""
                ];
                $acc =(object)$acc; // tạo đối tượng
                // dd($acc);
            }
            $wishlists = session('wishlist')? session('wishlist') : []; // lấy sản phẩm trong sesion wishlist
            $totalWishlist = count($wishlists); // đếm số sản phẩm trong wishlist


            $totalQuantity = 0; // tổng số lượng order bằng 0
            $totalWishlist = 0; // tổng số lượng sản phẩm yêu thích = 0
            $subPrice = 0; // Giá trước khi thanh toán = 0
            $totalPrice = 0; // tổng tiền = 0
            $vat=0; // thuế vat =0
            $tax = 0; // thuế ECO
            $cats = Category::orderBy('name','ASC')->where('status','>',0)->get(); // Lấy danh sách danh mục có trong bảng danh mục 
            $carts = session('cart') ? session('cart'):[];  // lấy giỏ hàng trong session('cart')
            
            foreach($carts as $key =>$cart){ //Duyệt mảng sản phẩm có trong giỏ hàng
                $totalQuantity += $cart->quantity;  // Tính tổng số lượng sản phẩm có trong giỏ hàng
                $subPrice += $cart->price * $cart->quantity; // tính tiền chưa thuế / phí
                $tax = $subPrice * 0.02;    // thuế môi trường
                $vat = $totalQuantity * $subPrice * 0.01; // tổng thuế
                $totalPrice = $subPrice + $vat + $tax; // tính tổng tiền của checkout
            }

            

            $view->with(compact('cats','carts','totalQuantity','tax','subPrice','totalPrice','vat','totalWishlist','acc'));
        });
    }
}

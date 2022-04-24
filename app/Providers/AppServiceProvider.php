<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\Big_category;
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
            // dd($acc->id);
            
            if($acc == null){
                $acc = [
                    'id' => 0,
                    'first_name' => "Guest",
                    'last_name' => ""
                ];
                $acc =(object)$acc; // tạo đối tượng
                // dd($acc);
            }
            $wishlists = session('wishlist')? session('wishlist') : []; // lấy sản phẩm trong sesion wishlist
            $totalWishlist = count($wishlists); // đếm số sản phẩm trong wishlist
            
            $procompare = session('compare')? session('compare') : [];
            $totalCompare= count($procompare);

            $totalQuantity = 0; // tổng số lượng order bằng 0
            $subPrice = 0; // Giá trước khi thanh toán = 0
            $totalPrice = 0; // tổng tiền = 0
            $vat=0; // thuế vat =0
            $tax = 0; // thuế ECO
            // load with de chong n+1
            #relate https://viblo.asia/p/tim-hieu-ve-eager-loading-trong-laravel-XL6lA8YJZek
            $cats = Category::with(['children' => function ($q) {
                $q->active(); //scope
            }])->orderBy('name','ASC')->active()->where('parent_id', 0)->get(); // Lấy danh sách danh mục có trong bảng danh mục 
            
            $carts = session('cart') ? session('cart'):[];  // lấy giỏ hàng trong session('cart')
            // dd($carts);
            foreach($carts as $key =>$cart){ //Duyệt mảng sản phẩm có trong giỏ hàng
                $totalQuantity += $cart->quantity;  // Tính tổng số lượng sản phẩm có trong giỏ hàng
                $subPrice += $cart->price * $cart->quantity; // tính tiền chưa thuế / phí
                $tax = $subPrice * 0.02;    // thuế môi trường
                $vat = $totalQuantity * $subPrice * 0.01; // tổng thuế
                $totalPrice = $subPrice + $vat + $tax; // tính tổng tiền của checkout
            }

            $products_search = null;
            $search_value = request()->search;
            $cat_id = request()->cat_id;
            // $messages = "ahihnnnnnnnnnnni";
            if($search_value){
                $products_search = Product::orderBy('name','ASC')->search()->get();
            }else{
                // $products_search = null;
                if($cat_id){
                    $products_search = Product::orderBy('name','ASC')->search()->get();
                }
            };

            
            
           

            $view->with(compact('products_search','cats','carts','totalQuantity','tax','subPrice','totalPrice','vat','totalWishlist','acc','totalCompare'));
        });
    }
}

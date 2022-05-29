<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Review;
use App\Models\Big_category;
use App\Models\Blog_cat;
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
                    'id' => -12,
                    'first_name' => "Guest",
                    'last_name' => "",
                    'avatar' => 'man.jpg'
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
            $fee =0; // tổng phí
            // load with de chong n+1
            #relate https://viblo.asia/p/tim-hieu-ve-eager-loading-trong-laravel-XL6lA8YJZek
            $cats = Category::with(['children' => function ($q) {
                $q->active(); //scope
            }])->orderBy('name','ASC')->active()->where('parent_id', 0)->get(); // Lấy danh sách danh mục có trong bảng danh mục 
            $blog_cats = Blog_cat::orderBy('id', 'ASC')->where('status','>',0)->get();
            $carts = session('cart') ? session('cart'):[];  // lấy giỏ hàng trong session('cart')
            // dd($carts);

            // session()->flush();
            

            foreach($carts as $key =>$cart){ //Duyệt mảng sản phẩm có trong giỏ hàng
                $totalQuantity += $cart->quantity;  // Tính tổng số lượng sản phẩm có trong giỏ hàng
                $subPrice += $cart->price * $cart->quantity; // tính tiền chưa thuế / phí
                $tax = $subPrice * 0.02;    // thuế môi trường
                $vat = ($tax + $subPrice) * 0.1; // tổng thuế vat
                $fee = ($tax + $vat);
                $totalPrice = $subPrice + $vat + $tax; // tính tổng tiền của checkout
                // session()->push('cart',$totalPrice);
            }
            // dd(session('cart'));
            // session()->flush();
            $coupon = session('coupon') ? session('coupon'):[];
            if($coupon){
                if($coupon->discount_ab){
                    $totalPrice = $totalPrice-$coupon->discount_ab;
                }else{
                    $totalPrice =$totalPrice-$totalPrice*$coupon->discount_rl/100;
                }
                
            }


            $products_search = null;
            $search_value = request()->search;
            $search_value_cat = request()->cat_id;
            // $messages = "ahihnnnnnnnnnnni";
            if($search_value){
                $products_search = Product::orderBy('name','ASC')->search()->get();
            }
                // $products_search = null;
            if($search_value_cat){
                $products_search = Product::orderBy('name','ASC')->search()->get();
            }
            $hotline = Contact::where('status','>',0)->first();
            // dd($products_search);
           

            $view->with(compact('coupon','search_value','search_value_cat','products_search','blog_cats','cats','carts','totalQuantity','tax','subPrice','totalPrice','vat','fee','totalWishlist','acc','totalCompare','hotline'));
        });
    }
}

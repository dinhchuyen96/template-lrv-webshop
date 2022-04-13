<?php
    namespace App\Http\Controllers;
    use App\Models\Category;
    use App\Models\Product;
    use App\Models\Review;
    use App\Models\Banner;
    class HomeController extends Controller{
        public function home(){
            $category = Category::paginate(2);
            $product_sale = Product::product_sale(8);
            $product_new = Product::product_new(4);
            $banners = Banner::banner(3);
                        
            return view('site\home',compact('product_sale','product_new','banners'));
        }
        public function contactus(){
            return view('site.contactus');
        }
        public function myaccount(){
            return view('site\myaccount');
        }
        public function category(Category $category){
            $products = $category->products_byCat()->paginate(4);
            return view('site\category',compact('category','products'));
        }
        public function product(Product $product,Category $category){
            $reviews = Review::reviews($product->id); //take Product_id to scopereviews in Model Review
            $number_reviews = count($reviews);
            $products_byCat = $category->products_byCat()->paginate(4);
            dd($products_byCat);
            return view('site\product',compact('products_byCat','product','reviews','number_reviews'));
        }
    };
?>
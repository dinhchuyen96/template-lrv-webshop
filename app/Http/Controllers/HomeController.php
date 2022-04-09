<?php
    namespace App\Http\Controllers;
    use App\Models\Category;
    use App\Models\Product;
    use App\Models\Review;
    class HomeController extends Controller{
        public function home(){
            $category = Category::paginate(2);
            $product_sale = Product::product_sale(8);
            $product_new = Product::product_new(4);
                        
            return view('site\home',compact('product_sale','product_new'));
        }
        public function contactus(){
            return view('site.contactus');
        }
        public function myaccount(){
            return view('site\myaccount');
        }
        public function compare(){
            return view('site\compare');
        }
        public function category(Category $category){
            $products = $category->products()->paginate(4);
            return view('site\category',compact('category','products'));
        }
        public function product(Product $product){
            $reviews = Review::reviews($product->id);
            $number_reviews = count($reviews);
            $avg_rating = Review::avg_rating();
            // dd($avg_rating);

            return view('site\product',compact('product','reviews','number_reviews','avg_rating'));
        }
    };
?>
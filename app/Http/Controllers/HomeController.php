<?php
    namespace App\Http\Controllers;
    use App\Models\Category;
    use App\Models\Product;
    use App\Models\Review;
    use App\Models\Banner;
    use Illuminate\Http\Request;
    class HomeController extends Controller{
        public function home(Request $request,Product $product){
            $category = Category::paginate(2);
            $product_sale = Product::product_sale(8);
            $product_new = Product::product_new(4);
            $banners = Banner::banner(3);
            // dd($product_new);
            return view('site\home',compact('product_sale','product_new','banners'));
        }
        public function contactus(){
            return view('site.contactus');
        }
        public function myaccount(){
            return view('site\myaccount');
        }
        public function category(Category $category){
            $products = $category->products_byCat()->paginate(12);
            $products1 = $category->products_byParent_Cat()->paginate(12);
            // dd($category->id);
            return view('site\category',compact('category','products','products1'));
        }
        public function product(Product $product,Category $category){
            // dd($category);
            $products_related = $category->products_byCat()->paginate(6);
            $reviews = Review::reviews($product->id); //take Product_id to scopereviews in Model Review
            return view('site\product',compact('product','category','reviews','products_related'));
        }
    };
?>
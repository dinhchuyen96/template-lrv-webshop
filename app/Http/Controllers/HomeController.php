<?php
    namespace App\Http\Controllers;
    use App\Models\Blog;
    use App\Models\Blog_cat;
    use App\Models\Category;
    use App\Models\Contact;
    use App\Models\Product;
    use App\Models\Review;
    use App\Models\Banner;
    use App\Models\Brand_sale;
    use Illuminate\Http\Request;
    use Carbon\Carbon;
    use DB;
    class HomeController extends Controller{
        public function home(Request $request,Product $product){
            $category = Category::paginate(2);
            $product_sale = Product::product_sale(10);
            $product_new = Product::product_new(4);
            $product_top_sale = Product::product_top_sale(10);
            $banners = Banner::banner(3);
            $logo = Brand_sale::where('status','>',0)->get();
            // dd($product_sale);
            return view('client.site\home',compact('product_sale','product_new','product_top_sale','banners','logo'));
        }
        public function contactus(){
            $contacts = Contact::where('status','>',0)->first();
            // dd($contacts[0]);
            return view('client.site.contactus',compact('contacts'));
        }
        public function myaccount(){
            return view('client.site\myaccount');
        }
        public function category(Category $category){
            // dd($category);
            $products = $category->products_byCat()->paginate(12);
            $products1 = $category->products_byParent_Cat()->paginate(12);
            // dd($category->id);
            return view('client.site.category',compact('category','products','products1'));
        }
        public function product(Product $product,Category $category){
            $products_related = $category->products_byCat()->paginate(6);
            $reviews = Review::reviews($product->id); //take Product_id to scopereviews in Model Review
            return view('client.site.product',compact('product','category','reviews','products_related'));
        }
        public function blog(Blog_cat $blog)
        {   
            $data_blog = Blog::paginate(10);
            // dd($data_blog);
            // dd($blog);
            return view('client.site.blog.blog',compact('data_blog'));
        }
        public function blog_cat_id(Blog_cat $blog_cat_id)
        {   
            // dd($blog_cat_id->id);
            $data_blog = $blog_cat_id->blog_byCat()->paginate(10);
            // dd($test);
            
            return view('client.site.blog.blog_byCat',compact('data_blog','blog_cat_id'));
        }
        public function blog_detail(Blog_cat $blog_cat_id, $slug, $slug2 ,Blog $blog)
        {
            // dd($blog);
           return view('client.site.blog.blog_detail',compact('blog','blog_cat_id'));
        }
    };
?>
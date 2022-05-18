<?php
    namespace App\Http\Controllers;
    use App\Models\Blog;
    use App\Models\Blog_cat;
    use App\Models\Category;
    use App\Models\Contact;
    use App\Models\Product;
    use App\Models\Review;
    use App\Models\Banner;
    use Illuminate\Http\Request;
    use DB;
    class HomeController extends Controller{
        public function home(Request $request,Product $product){
            $category = Category::paginate(2);
            $product_sale = Product::product_sale(8);
            $product_new = Product::product_new(4);
            $banners = Banner::banner(3);
            // $tab_pro = Product::get()->groupBy('parent_cat');
            // dd($tab_pro);
            return view('site\home',compact('product_sale','product_new','banners'));
        }
        public function contactus(){
            $contacts = Contact::first();
            // dd($contacts[0]);
            return view('site.contactus',compact('contacts'));
        }
        public function myaccount(){
            return view('site\myaccount');
        }
        public function category(Category $category){
            // dd($category);
            $products = $category->products_byCat()->paginate(12);
            $products1 = $category->products_byParent_Cat()->paginate(12);
            // dd($category->id);
            return view('site\category',compact('category','products','products1'));
        }
        public function product(Product $product,Category $category){
            $products_related = $category->products_byCat()->paginate(6);
            $reviews = Review::reviews($product->id); //take Product_id to scopereviews in Model Review
            return view('site\product',compact('product','category','reviews','products_related'));
        }
        public function blog(Blog_cat $blog)
        {   
            $data_blog = Blog::paginate(10);
            // dd($data_blog);
            // dd($blog);
            return view('site\blog',compact('data_blog'));
        }
        public function blog_cat_id(Blog_cat $blog_cat_id)
        {   
            // dd($blog_cat_id->id);
            $data_blog = $blog_cat_id->blog_byCat()->paginate(10);
            // dd($data_blog);
            return view('site\blog_byCat',compact('data_blog','blog_cat_id'));
        }
        public function blog_detail(Blog_cat $blog_cat_id, $slug, $slug2 ,Blog $blog)
        {
            // dd($blog);
           return view('site.blog_detail',compact('blog','blog_cat_id'));
        }
    };
?>
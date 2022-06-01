<?php
    namespace App\Http\Controllers;
    use App\Models\Blog;
    use App\Models\Blog_cat;
    use App\Models\Category;
    use App\Models\Contact;
    use App\Models\Product;
    use App\Models\Review;
    use App\Models\Order;
    use App\Models\OrderDetail;
    use App\Models\Banner;
    use App\Models\Brand_sale;
    use Illuminate\Http\Request;
    use Carbon\Carbon;
    use Auth;
    use DB;
    class HomeController extends Controller{
        public function __construct() {
            header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
            header("Pragma: no-cache"); // HTTP 1.0.
            header("Expires: 0"); // Proxies.
            header('Access-Control-Allow-Origin: *');      
            // Quay lại trang, xóa session
        }
    
        public function home(Request $request,Product $product){
            $category = Category::paginate(2);
            $product_sale = Product::product_sale(5);
            $product_new = Product::product_new(4);
            $product_top_sale = Product::product_top_sale(5);
            $banners = Banner::banner(3);
            $logo = Brand_sale::where('status','>',0)->get();
            return view('client.site\home',compact('product_sale','product_new','product_top_sale','banners','logo'));
        }

        public function contactus(){
            $contacts = Contact::where('status','>',0)->first();
            return view('client.site.contactus',compact('contacts'));
        }

        public function myaccount(){
            return view('client.site\myaccount');
        }

        public function category(Category $category){
            $products = $category->products_byCat()->paginate(12);
            $products1 = $category->products_byParent_Cat()->paginate(12);
            return view('client.site.category',compact('category','products','products1'));
        }

        public function product(Product $product,Category $category){
            $products_related = $category->products_byCat()->paginate(6);
            $acc = Auth::guard('account')->user();
            if($acc){
                $acc_id = $acc->id;
            }else{
                $acc_id = -12;
            }
            $check = false;
            $now = Carbon::now();
            $order_detail = OrderDetail::where('product_id', $product->id)->get();
            foreach ($order_detail as $order_detail){
                $updated_at = Carbon::parse($order_detail->order->updated_at);
                $diff = $updated_at->diffInDays($now);                
                if($order_detail->order->account_id == $acc_id && $order_detail->order->status == 3 && $diff <= 7 ){
                    $check = true;              //Chỉ cho phép tài khoản người dùng review sản phẩm trong vòng 7 ngày sau khi cập nhật trạng thái đơn hàng là thành công      
                }   
            }
            
            $reviews = Review::reviews_byProId($product->id); //take Product_id to scopereviews in Model Review
            $review_all = Review::orderBy('id','ASC')->where('parent_id', 0)->reviews_byProId($product->id); 
            
            $now = Carbon::now();
            $time_comments = Carbon::create(2022,06,01,13,30,05);
            $timestring = $time_comments->diffForHumans($now);
            
            // dd($timestring);
            return view('client.site.product',compact('check','now','order_detail','product','category','reviews','review_all','products_related'));
        }

        public function blog(Blog_cat $blog)
        {   
            $data_blog = Blog::paginate(10);
            return view('client.site.blog.blog',compact('data_blog'));
        }

        public function blog_cat_id(Blog_cat $blog_cat_id)
        {   
            $data_blog = $blog_cat_id->blog_byCat()->paginate(10);            
            return view('client.site.blog.blog_byCat',compact('data_blog','blog_cat_id'));
        }

        public function blog_detail(Blog_cat $blog_cat_id, $slug, $slug2 ,Blog $blog)
        {
           return view('client.site.blog.blog_detail',compact('blog','blog_cat_id'));
        }
    };
?>
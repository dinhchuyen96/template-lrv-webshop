<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\OrderDetail;
use App\Models\Product;
use Carbon\Carbon;
class OrderHomeController extends Controller
{
    public function checkout(){
        $acc = Auth::guard('account')->user();
        $carts = session('cart') ? session('cart'):[];
        // $coupon = session('coupon') ? session('coupon'):[];
        // dd($coupon->discount_ab);
        if($carts){
            return view('site\checkout', compact('acc'));
        }else{
            return redirect()->route('home')->with('ok',"Mời bạn đặt hàng");
        }
        
    }
    public function check_coupon(Request $req)
    {
        $code = $req->get('code');
        $coupon = Coupon::where('status','>',0)->where('code',$code)->first();
        // dd($coupon->code);
        if($coupon!=null){
            $item = [
                'code' => $coupon->code,
                'status' => $coupon->status,
                'begin' => $coupon->begin,
                'end' => $coupon->end,
                'discount_ab' => $coupon->discount_ab,
                'discount_rl' => $coupon->discount_rl
            ];
            $item = (object)$item;
            // dd($item);
            $now = Carbon::now();
            $start_date = Carbon::parse($coupon->begin);
            $end_date = Carbon::parse($coupon->end);

            if($now->between($start_date,$end_date)){
                session(['coupon'=>$item]);
                return redirect()->back()->with('ok','Áp dụng coupon thành công');
            } else {
                return redirect()->back()->with('no','Coupon không chính xác hoặc đã hết hạn sử dụng');
            }            
            return redirect()->back()->with('ok','Áp dụng coupon thành công');   
        }
        return redirect()->back()->with('no','Coupon không chính xác hoặc đã hết hạn sử dụng');
    }

    public function del_coupon(){
            session()->forget(['coupon']); // xóa coupon khỏi session
            return redirect()->back()->with('ok','Xóa coupon thành công');;
    }

    public function post_checkout(Request $req){
        $carts = session('cart') ? session('cart'):[];
        // dd($req);
        // dd($carts);
        if($carts){
            $data = $req->all('first_name','discount_ab','discount_rl','category_id','last_name','email','phone','address','shipping_method','payment_method','status','order_note','fee','total_price');
            $data['account_id'] = Auth::guard('account')->user()->id;
            // dd($data);

            $order = Order::create($data);
            if($order){
                foreach($carts as $key => $item){
                    // dd($item);
                    OrderDetail::create([
                        'product_id' =>$item->id,
                        'category_id' =>$item->category_id,
                        'order_id' =>$order->id,
                        'quantity' => $item->quantity,
                        'price' => $item->price
                    ]);
                }
            }
            session()->forget(['cart', 'coupon']);
            return redirect()->route('home')->with('ok',"Đặt hàng thành công");
            
        }else{
            return redirect()->route('home')->with('ok',"Mời bạn đặt hàng");
        }
    }       
    public function wishlist()
    {
        $acc_id = Auth::guard('account')->user()->id;
        // dd($acc_id);
        return view('site.wishlist');
    }
    
    public function order_list(){ // lịch sử đơn hàng
        $acc_id = Auth::guard('account')->user()->id;
        $orders = Order::where('account_id', $acc_id)->orderBy('id','DESC')->get();
        // dd($orders);
        $i = count($orders)+1;
        return view('site.order_list',compact('orders','i'));
    }
    
    public function detail(Order $order){ // chi tiết từng đơn hàng
        //  dd($order);
        $i=0;
        return view('site.order_detail',compact('order','i'));
    }
}

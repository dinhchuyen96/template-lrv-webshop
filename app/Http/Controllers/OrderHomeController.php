<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
class OrderHomeController extends Controller
{
    public function checkout(){
        $acc = Auth::guard('account')->user();
        $carts = session('cart') ? session('cart'):[];
        if($carts){
            return view('site\checkout', compact('acc'));
        }else{
            return redirect()->route('home')->with('ok',"Mời bạn đặt hàng");
        }
        
    }
    public function post_checkout(Request $req){
        $carts = session('cart') ? session('cart'):[];
        // dd($carts);
        if($carts){
            $data = $req->all('first_name','category_id','last_name','email','phone','address','shipping_method','payment_method','status','order_note','total_price');
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
                session(['cart'=>null]);
            }
            return redirect()->route('home')->with('ok',"Đặt hàng thành công");
        }else{
            return redirect()->route('home')->with('ok',"Mời bạn đặt hàng");
        }
    }       
    
    
    public function order(){
        $acc_id = Auth::guard('account')->user()->id;
        $orders = Order::where('account_id', $acc_id)->orderBy('id','DESC')->get();
        // dd($orders);
        $i = count($orders)+1;
        return view('site.order',compact('orders','i'));
    }
    public function wishlist()
    {
        $acc_id = Auth::guard('account')->user()->id;
        // dd($acc_id);
        return view('site.wishlist');
    }
    public function detail(Order $order){
        //  dd($order);
        return view('site.order_detail',compact('order'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
class OrderAdminController extends Controller
{
    public function index()
    {
         $orders = Order::orderBy('id','DESC')->search()->paginate(15);
         return view('admin.order.index',compact('orders'));
    }
    public function detail(Order $order)
    {
      // dd($order);
      $i =0;
       return view('admin.order.detail', compact('i','order'));
    }
    public function status(Order $order,Request $req)
    {
      $order_detail = OrderDetail::where('order_id',$order->id);
       $order->update(['status'=>$req->status]);
       $order_detail->update(['status'=>$req->status]);
       return redirect()->back()->with('yes','cập nhật thành công');
    }
}

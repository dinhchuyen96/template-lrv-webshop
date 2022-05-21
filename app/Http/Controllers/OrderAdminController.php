<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderAdminController extends Controller
{
    public function index()
    {
         // $orders = Order::orderBy('id', 'DESC')->search()->paginate(2);
         // $orderwait = 0; // số đơn hàng đợi duyệt
         // foreach ($orders as $orders){
         //    if($orders->status == 0){
         //       $orderwait++;
         //    }
         // }
         $orders = Order::orderBy('id','DESC')->search()->paginate(15);
         return view('admin.order.index',compact('orders'));
    }
    public function detail(Order $order)
    {
      // dd($order);
       return view('admin.order.detail', compact('order'));
    }
    public function status(Order $order,Request $req)
    {
       $order->update(['status'=>$req->status]);
       return redirect()->back()->with('yes','cập nhật thành công');
    }
}

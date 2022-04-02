<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function index()
    {
         $orders = Order::orderBy('id', 'DESC')->search()->paginate(15);
         $i = count($orders)+1;
         return view('admin.order.index',compact('orders','i'));
    }
    public function detail(Order $order)
    {
       return view('admin.order.detail', compact('order'));
    }
    public function status(Order $order,Request $req)
    {
       $order->update(['status'=>$req->status]);
       return redirect()->back()->with('yes','cập nhật thành công');
    }
}

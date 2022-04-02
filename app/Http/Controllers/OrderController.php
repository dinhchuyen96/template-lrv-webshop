<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function index()
    {
         $orders = Order::orderBy('id', 'DESC')->paginate(15);
         return view('admin.order.index',compact('orders'));
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

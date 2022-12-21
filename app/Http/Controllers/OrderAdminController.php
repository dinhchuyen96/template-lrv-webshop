<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderAdminController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->search()->paginate(15);

        return view('admin.order.index', compact('orders'));
    }

    public function detail(Order $order)
    {
        // dd($order);
        $i = 0;

        return view('admin.order.detail', compact('i', 'order'));
    }

    public function status(Order $order, Request $req)
    {
        if ($req->status == 1) {
            foreach ($order->details as $orders) {
                $product = Product::find($orders->product_id);
                Product::where('id', $orders->product_id)->update(['amout' => $product->amout - $orders->quantity, 'order_number' => $product->order_number + $orders->quantity]);
            }
        } elseif ($req->status == 4) {
            foreach ($order->details as $orders) {
                $product = Product::find($orders->product_id);
                Product::where('id', $orders->product_id)->update(['amout' => $product->amout + $orders->quantity, 'order_number' => $product->order_number - $orders->quantity]);
            }
        }
        $order_detail = OrderDetail::where('order_id', $order->id);
        $order->update(['status' => $req->status]);
        $order_detail->update(['status' => $req->status]);

        return redirect()->back()->with('yes', 'Cập nhật trạng thái thành công');
    }
}

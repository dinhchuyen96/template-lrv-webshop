<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Review;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $product_count = Product::count();
        $product_show = Product::where('status', 1)->count();
        $product_hide = Product::where('status', 0)->count();
        $order_count = Order::where('status', 0)->count();
        $cus_count = Account::count();
        $check = true;
        // $topfive = OrderDetail::select('product_id',DB::raw('COUNT(product_id) as count'))->groupBy('product_id')->orderBy('count','desc')->limit(5)->get();
        $topfive = Product::where('status', 1)->orderBy('order_number', 'DESC')->limit(5)->get();
        $topcus = Order::select('account_id', DB::raw('COUNT(account_id) as count'))->groupBy('account_id')->orderBy('count', 'desc')->limit(5)->get();
        // dd($topfive);
        return view('admin.dashboard.index', compact('check', 'product_count', 'product_show', 'product_hide', 'order_count', 'cus_count', 'topfive', 'topcus'));
    }

    public function list_account()
    {
        $account = Account::orderBy('id', 'DESC')->search()->get();
        // dd($acc);
        return view('admin.list_account', compact('account'));
    }

    public function account_detail(Account $account)
    {
        $numberOrder = Order::where('account_id', $account->id)->count();
        $orderlist = Order::where('account_id', $account->id)->where('status', 3)->get();
        $numberPro = 0;
        foreach ($orderlist as $order) {
            $numberPro += OrderDetail::where('order_id', $order->id)->sum('quantity');
        }
        $numberSuccess = Order::where('account_id', $account->id)->where('status', '3')->count();
        $numberFail = Order::where('account_id', $account->id)->where('status', '4')->count();
        $numberReview = Review::where('account_id', $account->id)->count();
        $moneyPay = Order::where('account_id', $account->id)->where('status', '3')->sum('total_price');

        return view('admin.account_detail', compact('account', 'numberOrder', 'numberSuccess', 'numberFail', 'numberReview', 'moneyPay', 'numberPro'));
    }

    public function fillterOrder(Request $request)
    {
        $check = false;
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $status = $request->status;
        if ($status == -1) {
            $orders = Order::whereBetween('created_at', [$startDate.' 00:00:00', $endDate.' 23:59:59'])->get();
        } else {
            $orders = Order::whereBetween('created_at', [$startDate.' 00:00:00', $endDate.' 23:59:59'])
            ->where('status', $status)
            ->get();
        }

        return view('admin.dashboard.index', compact('orders', 'check'));
    }

    public function filterMoney(Request $request)
    {
        $check = false;
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $status = $request->status;
        if ($status == -1) {
            $number = Order::whereBetween('created_at', [$startDate.' 00:00:00', $endDate.' 23:59:59'])->count();
            $totalMoney = Order::whereBetween('created_at', [$startDate.' 00:00:00', $endDate.' 23:59:59'])->sum('total_price');
        } else {
            $number = Order::where('status', $status)->whereBetween('created_at', [$startDate.' 00:00:00', $endDate.' 23:59:59'])->count();
            $totalMoney = Order::where('status', $status)->whereBetween('created_at', [$startDate.' 00:00:00', $endDate.' 23:59:59'])->sum('total_price');
        }

        return view('admin.dashboard.index', compact('totalMoney', 'number', 'check'));
    }
}

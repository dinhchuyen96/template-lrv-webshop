<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function fillterOrder(Request $request)
    {
       $startDate = $request->start_date;
       $endDate = $request->end_date;
       $status = $request->status;
       if ($status == -1) {
            $orders = Order::whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59'])->get();
       } else {
            $orders = Order::whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59'])
            ->where('status', $status)
            ->get();
       }
       return view('admin.dashboard.index', compact('orders'));
    }
    public function filterMoney(Request $request)
    {
       $startDate = $request->start_date;
       $endDate = $request->end_date;
       $status = $request->status;
       if($status == -1){
             $number = Order::whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59'])->count();
             $totalMoney = Order::whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59'])->sum('total_price');
       }else{
            $number = Order::where('status',$status)->whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59'])->count();  
            $totalMoney = Order::where('status',$status)->whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59'])->sum('total_price');       
        }
       return view('admin.dashboard.index', compact('totalMoney','number'));
      
    }
}

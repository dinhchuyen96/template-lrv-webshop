<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Order;
class OrderHomeController extends Controller
{
    public function checkout(){
        $acc = Auth::guard('account')->user();
        // dd($acc);
        return view('site\checkout', compact('acc'));
    }
    public function post_checkout(Request $req){
        dd($req->all());
    }
}

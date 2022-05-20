<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Auth;
class LoginController extends Controller
{
    public function login(){
        return view('site.ad_login');
    }
    public function post_login(Request $req){
        $data = $req->only('email','password');
        $check_login = Auth::attempt($data);
        if($check_login){
            return redirect()->route('category.index')->with('yes','WellCome Back');
        }else{
            return redirect()->back()->with('no','Mật khẩu không hợp lệ');
        };
    }
}

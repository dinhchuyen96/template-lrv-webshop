<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Account\LoginRequest;
use App\Models\User;
use Auth;
class Login_adController extends Controller
{
    public function login(){ // login tài khoản quản trị viên
        return view('client.site.account.login_ad');
    }
    public function post_login(Request $req){
        $data = $req->only('email','password');
        $check_login = Auth::attempt($data);
        if($check_login){
            return redirect()->route('order.index')->with('yes','WellCome Back');
        }else{
            return redirect()->back()->with('wrong','Tài khoản hoặc mật khẩu không chính xác');
        };
    }
    public function logout_admin(){ // logout tài khoản quản trị viên
        Auth::logout();
        return redirect()->back();
    }
}

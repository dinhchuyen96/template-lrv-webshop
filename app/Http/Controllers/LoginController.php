<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Account\LoginRequest;
use App\Models\User;
use Auth;
class LoginController extends Controller
{
    public function login(){ // login tài khoản quản trị viên
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
    public function logout_admin(){ // logout tài khoản quản trị viên
        Auth::logout();
        return redirect()->back()->with('ok','Đăng xuất thành công');
    }
}

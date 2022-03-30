<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Http\Requests\AccountRequest;
use Auth;

class AccountController extends Controller
{
    public function login(){
        return view('site.login');
    }
    public function post_login(Request $req){
       $data = $req->only('email','password');
       if(Auth::guard('account')->attempt($data)){
           return redirect()->route('home')->with('ok','nhập nhâp thành công');
       }else{
        return redirect()->route('home.login')->with('no','Mời bạn đăng nhập lại');
       }
    }
    public function register(){
        return view('site.register');
        
    }
    public function post_register(AccountRequest $req){
        $data= $req->all();
        $data['password'] = bcrypt($req->password);
        Account::create($data);
        return redirect()->route('home.login')->with('ok','Đăng ký thành công');
       
    }
    public function logout(){
        Auth::guard('account')->logout();
        return redirect()->route('home')->with('ok','Đăng xuất thành công');
    }
}

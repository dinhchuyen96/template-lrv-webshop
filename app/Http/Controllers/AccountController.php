<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Http\Requests\AccountRequest;
use App\Http\Requests\ChangerPasswordRequest;
use Auth;
use Hash;

class AccountController extends Controller
{
    public function login(){
        return view('site.login');
    }
    public function post_login(Request $req){
       $data = $req->only('email','password');
       if(Auth::guard('account')->attempt($data)){
           return redirect()->route('home')->with('ok','Đăng nhập thành công');
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
    public function changer_password()
    {
        return view('site.changer_pw');
    }
    public function post_changer_password(ChangerPasswordRequest $req){
        $user = Auth::guard('account')->user();
        $old_password = $req->get('old_password');
        if (Hash::check($old_password, $user->password)) {            
            $user->password = bcrypt($req->get('new_password'));
            $user->save();
            Auth::guard('account')->logout();
            return redirect()->route('home.login')->with('ok','Thay đổi mật khẩu thành công, Mời bạn đăng nhập lại');
        }else{
             return redirect()->back()->with('no','Mời bạn nhập lại mật khẩu');
        }
       
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Http\Requests\AccountRequest;

class AccountController extends Controller
{
    public function login(){
        return view('site.login');
    }
    public function post_login(Request $req){
       
    }
    public function register(){
        return view('site.register');
        
    }
    public function post_register(AccountRequest $req){
        $data= $req->all();
        $data['password'] = bcrypt($req->password);
        $data['birth_day'] = date('Y-m-d H:i:s');
        Account::create($data);
        return redirect()->route('home.login')->with('ok','đăng ký thành công');
       
    }
    public function logout(){
        
    }
}

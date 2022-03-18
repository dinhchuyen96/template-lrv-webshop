<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class LoginController extends Controller
{
    public function login(){
        return view('site\login');
    }
    public function post_login(Request $req){
        $req->validate([
            'email' => 'required|exists:users',
            'password' => 'required',
        ],[
            'email.required' => 'Email ahihi',
            'email.exists' => 'Email không hợp lệ',
            'password.required' => 'Password ahihi'
        ]);
        $data = $req->only('email','password');
        $check_login = Auth::attempt($data);
        if($check_login){
            return redirect()->route('home')->with('yes','WellCome Back');
        }else{
            return redirect()->back()->with('no','Mật khẩu không hợp lệ');
        };
    }
}

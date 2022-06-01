<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Order;
use App\Http\Requests\Account\RegisterRequest;
use App\Http\Requests\Account\ChangerPasswordRequest;
use App\Http\Requests\Account\EditAccountRequest;
use App\Http\Requests\Account\LoginRequest;
use Auth;
use Hash;
use Str;

class AccountController extends Controller
{
    public function my_account(){
        $acc_id = Auth::guard('account')->user()->id;
        $orders = Order::where('account_id', $acc_id)->orderBy('id','DESC')->get();
        // dd($orders);
        $i = count($orders)+1;
        return view('client.site.account.myaccount',compact('orders','i'));
    }

    public function post_edit_account(EditAccountRequest $req){
        // dd($req->all());
        $data= $req->all();
        $user = Auth::guard('account')->user();
        if($req->has('upload')){
            $file_name = $req->upload->getClientOriginalName();
            $partInfo = pathinfo($file_name);
            $ext = $partInfo['extension'];
            $base_name = $partInfo['filename']; 
            $final_name = Str::slug($base_name).'-'.time().'.'.$ext;
            $check_upload = $req->upload->move(public_path('uploads/avatars'), $final_name);
            if($check_upload){
                $data['avatar'] = $final_name;
            }
        }
        $user->update($data);
        return redirect()->route('home')->with('ok','Cập nhật thành công');
    }


    public function login(){ // đăng nhập tài khoản khách hàng
        return view('client.site.account.login');
    }


    public function post_login(LoginRequest $req){
       $data = $req->only('email','password');
       if(Auth::guard('account')->attempt($data)){
           return redirect()->route('home')->with('ok','Đăng nhập thành công');
       }else{
        return redirect()->route('home.login')->with('wrong','Mời bạn đăng nhập lại');
       }
    }
    public function register(){
        return view('client.site.account.register');
        
    }
    public function post_register(RegisterRequest $req){
        $data= $req->all();
        $data['password'] = bcrypt($req->password);
        //upload avatar
        $file_name = $req->upload->getClientOriginalName();
        $partInfo = pathinfo($file_name);
        $ext = $partInfo['extension'];

        $base_name = $partInfo['filename']; 

        $final_name = Str::slug($base_name).'-'.time().'.'.$ext;

        $check_upload = $req->upload->move(public_path('uploads/avatars'), $final_name);

        if($check_upload){
            $data['avatar'] = $final_name;
        };
        // dd($data);
        Account::create($data);
        return redirect()->route('home.login')->with('ok','Đăng ký thành công');
       
    }
    public function logout(){
        Auth::guard('account')->logout();
        return redirect()->route('home')->with('ok','Đăng xuất thành công');
    }
    public function changer_password()
    {
        return view('client.site.account.changer_pw');
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

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Order;
use App\Http\Requests\Account\RegisterRequest;
use App\Http\Requests\Account\ChangerPasswordRequest;
use App\Http\Requests\Account\EditAccountRequest;
use App\Http\Requests\Account\LoginRequest;
use App\Http\Requests\Account\ResetPasswordRequest;
use App\Http\Requests\Account\ForgetPasswordRequest;
use Auth;
use Hash;
use Str;
use Mail;
use Session;

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
        $data= $req->only('sex','first_name','last_name','email','phone','birth_day','address');
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
         if(Auth::guard('account')->user()->status == 0){
            $customer = Auth::guard('account')->user();
            Session::put('customer_active', $customer);
            Auth::guard('account')->logout();
            return redirect()->route('home.login')->with('no','Tài khoản của bạn chưa kích hoạt <br> vui lòng click vào 
            <a href="'.route('account.get_actived').'">đây để tiến hành kích hoạt</a>');
         }
           return redirect()->route('home')->with('ok','Đăng nhập thành công');
       }else{
            return redirect()->route('home.login')->with('wrong','Mời bạn đăng nhập lại');
       }
    }
    public function register(){
        return view('client.site.account.register');
        
    }
    public function check_email(Request $request){ 
        $query = $request->input('query');
        $user = Account::where('email', $query)->get(); 
        if($user->isNotEmpty()){
            $html = "Email đã tồn tại, vui lòng chọn email khác";
        }else{
            $html ="";
        }
        return response()->json(['html' => $html]);
    }
    public function check_phone(Request $request){ 
        $query = $request->input('queryphone');
        $phone = Account::where('phone', $query)->get(); 
        if($phone->isNotEmpty()){
            $errorphone = "Số điện thoại đã tồn tại, vui lòng chọn số khác";
        }else{
            $errorphone ="";
        }
        return response()->json(['errorphone' => $errorphone]);
    }

    public function post_register(RegisterRequest $req){
        $token = strtoupper(Str::random(10));
        $data= $req->only('sex','first_name','last_name','email','phone','birth_day','address');
        $data['token'] = $token;
        $data['password'] = bcrypt($req->password);
        //upload avatar
        if($req->upload !=null){
            $file_name = $req->upload->getClientOriginalName();
            $partInfo = pathinfo($file_name);
            $ext = $partInfo['extension'];

            $base_name = $partInfo['filename']; 

            $final_name = Str::slug($base_name).'-'.time().'.'.$ext;

            $check_upload = $req->upload->move(public_path('uploads/avatars'), $final_name);
            if($check_upload){
                $data['avatar'] = $final_name;
            };
        }
        
        if($customer = Account::create($data)){
            Mail::send('emails.active_account', compact('customer'), function($email) use($customer){
                $email->subject('Sinrato - Xác nhận tài khoản');
                $email->to($customer->email, $customer->last_name);
            });
                return redirect()->route('home.login')->with('ok','Đăng ký thành công, vui lòng xác nhận tài khoản qua email');
        }

     
       
    }

    public function active_account(Account $customer, $token) {
        if($customer-> token == $token){
            $customer->update(['status' => 1]);
            $customer->update(['token' => null]);
            return redirect()->route('home.login')->with('ok', 'Xác nhận thành công mời bạn đăng nhập');
        }else{
            return abort(404); 
        }
    }
    public function get_actived(){
        $token = strtoupper(Str::random(10));
        $customer = Session::get('customer_active');
        $customer->update(['token' =>$token]);
        Mail::send('emails.active_account', compact('customer'), function($email) use($customer){
            $email->subject('Sinrato - Xác nhận tài khoản');
            $email->to($customer->email, $customer->last_name);
        });
        return redirect()->back()->with('ok', 'Vui lòng kiểm tra Email để kích hoạt tài khoản');
    }

    public function forget_Password(){
        return view('client.site.account.forgetpassword');
    }
    public function post_Forget_Password(ForgetPasswordRequest $req){
        $token = strtoupper(Str::random(10));
        $customer = Account::where('email', $req->email)->first();
        $customer->update(['token' =>$token]);
        Mail::send('emails.mail_forget_password', compact('customer'), function($email) use($customer){
            $email->subject('Sinrato - Lấy lại mật khẩu');
            $email->to($customer->email, $customer->last_name);
        });
            return redirect()->route('home.login')->with('ok', 'Vui lòng kiểm tra email để thay đổi mật khẩu');
        
    }
     public function reset_Password(Account $customer, $token) {
        // dd($customer);
        if($customer->token === $token){
           return view('client.site.account.reset_pw');
        }else{
           return abort(404); 
        };
        
    }
    public function post_reset_Password(ResetPasswordRequest $req, Account $customer){
        // dd($req);
        $password_h = bcrypt($req->password);
        $customer->update(['password' => $password_h, 'token' => null]);
        return redirect()->route('home.login')->with('ok', 'Đổi mật khẩu thành công, vui lòng đăng nhập');
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

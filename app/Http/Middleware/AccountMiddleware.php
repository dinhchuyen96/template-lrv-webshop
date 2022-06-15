<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccountMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        if(auth()->guard('account')->check()){
            if(guard('account')->user()->status == 0){
                return redirect()->route('home.login')->with('no','Tài khoản chưa xác nhận!');
            }else{
                return $next($request);
            }
            
        }else{
            return redirect()->route('home.login');//->with('ok','Mời bạn đăng nhập');
        }
        return $next($request);
    }
}

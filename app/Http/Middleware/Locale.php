<?php

namespace App\Http\Middleware;

use Closure;
use Config;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
{
   if(Session::get("locale") != null) {
       App::setLocale(Session::get("locale"));
   }else{
       Session::put("locale","en");
       App::setLocale(Session::get("locale"));
   }
    return $next($request);
}

}

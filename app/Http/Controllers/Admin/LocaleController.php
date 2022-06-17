<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function setLang($locale){
        App::setLocale($locale);
        Session::put('locale', $locale);
        return redirect()->back();
    }
}

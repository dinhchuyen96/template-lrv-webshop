<?php
    namespace App\Http\Controllers;
    
    class HomeController extends Controller{
        public function home(){
            return view('site\home');
        }
        
        public function register(){
            return view('site\register');
        }
        public function cart(){
            return view('site\cart');
        }
        public function checkout(){
            return view('site\checkout');
        }
        public function contactus(){
            return view('site\contactus');
        }
        public function wishlist(){
            return view('site\wishlist');
        }
        public function myaccount(){
            return view('site\myaccount');
        }
        public function compare(){
            return view('site\compare');
        }
    };
?>
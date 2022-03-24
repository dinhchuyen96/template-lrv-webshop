<?php

namespace App\Http\Controllers;
use App\Http\Models;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function view(){
        return view('site\cart');
    }
    public function add(Product $product){
        
    }
    public function remove(Product $product){
        
    }
    public function update(Product $product, $quantity=1){
        
    }
    public function clear(Product $product){
        
    }
}

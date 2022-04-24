<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function view(){
        // session(['cart'=> null]);
        $carts = session('cart')? session('cart') : [];
        // dd($carts);
        return view('site\cart',compact('carts'));
    }
    
    public function add(Product $product){

        $carts = session('cart')?session('cart'):[];
        $quantity = request('quantity',1);
        if(isset($carts[$product->id])){
            $carts[$product->id]->quantity +=$quantity;
        }else{
             $item = [
                'id' => $product->id,
                'category_id' => $product->category_id,
                'name' => $product->name,
                'image' =>$product->image,
                'price' => $product->price,
                'quantity' => $quantity
             ];
            $item =(object)$item;
            $carts[$product->id] = $item;       
        };
       
        // session(['cart'=> null]);
        // dd($carts);        
          session(['cart'=> $carts]);
          return redirect()->route('home')->with('ok', 'Thêm sản phẩm vào giỏ hàng thành công');
    }
    public function remove(Product $product){
        $carts = session('cart') ? session('cart'):[];
        if(isset($carts[$product->id])){
            unset($carts[$product->id]); 
            session(['cart'=> $carts]);
        }
        if($carts != null){
            return redirect()->route('home.cart')->with('ok', 'Xóa sản phẩm khỏi giỏ hàng thành công');
        }        
        if($carts == null){
            return redirect()->route('home')->with('ok', 'Giỏ hàng rỗng, mời bạn đặt hàng');;
        }
    }
    public function update(Product $product, $quantity=1){
        $carts = session('cart') ? session('cart'):[];
        $quantity = request('quantity',1);
        if(isset($carts[$product->id])){
             $carts[$product->id]->quantity =$quantity;
             session(['cart'=> $carts]);
        }
        return redirect()->route('home.cart')->with('ok', 'Cập nhật số lượng thành công');
    }
    public function clear(Product $product){
         session(['cart'=> null]);
        return redirect()->route('home.cart')->with('ok', 'xóa giỏ hàng thành công');
    }
}
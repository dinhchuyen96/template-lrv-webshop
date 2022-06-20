<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\CartRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct() {
        header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
        header("Pragma: no-cache"); // HTTP 1.0.
        header("Expires: 0"); // Proxies.
        header('Access-Control-Allow-Origin: *');      
    }

    public function view(){
        // session(['cart'=> null]);
        $carts = session('cart')? session('cart') : [];
        // dd("ahihi");
        return view('client.site\cart',compact('carts'));
    }
    
    public function add(Product $product,CartRequest $req){
        $carts = session('cart')?session('cart'):[];
        $quantity = $req->input('quantity')?:1;
        // dd($quantity);
        $quantity = request('quantity',1);
        if(isset($carts[$product->id])){
            $carts[$product->id]->quantity +=$quantity;
        }else{
             $item = [
                'id' => $product->id,
                'category_id' => $product->category_id,
                'name' => $product->name,
                'image' =>$product->image,
                'price' => $product->sale_price > 0 ? $product->sale_price : $product->price,
                'quantity' => $quantity,
             ];
            $item =(object)$item;
            $carts[$product->id] = $item;       
        }; 
          session(['cart'=> $carts]);
          return redirect()->back()->with('ok', 'Thêm sản phẩm vào giỏ hàng thành công');
    }
    
    public function remove(Product $product){
        $carts = session('cart') ? session('cart'):[];
        if(isset($carts[$product->id])){
            unset($carts[$product->id]); 
            session(['cart'=> $carts]);
        }
        if(!empty($carts)){
            return redirect()->route('home.cart')->with('ok', 'Xóa sản phẩm khỏi giỏ hàng thành công');
        }        
        if(empty($carts)){
            return redirect()->route('home')->with('no', 'Giỏ hàng rỗng, mời bạn đặt hàng');;
        }
    }
    public function update(Product $product, $quantity=1){
        $carts = session('cart') ? session('cart'):[];
        $quantity = request('quantity',1);
        if(isset($carts[$product->id])){
             $carts[$product->id]->quantity =$quantity;
             session(['cart'=> $carts]);
        }
        return redirect()->route('home.cart')->with('ok', 'Cập nhật giỏ hàng thành công');
    }
    public function clear(Product $product){
        session()->forget(['cart', 'coupon']);
        return redirect()->route('home.cart')->with('ok', 'xóa giỏ hàng thành công');
    }
}
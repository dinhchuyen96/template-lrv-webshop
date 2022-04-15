<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function view(){
        $wishlists = session('wishlist')? session('wishlist') : [];
        // dd($wishlists);
        return view('site\wishlist',compact('wishlists'));
    }
    public function add(Product $product)
    {
        $wishlists = session('wishlist')? session('wishlist') : [];
        // dd($wishlists);
        $item = [
            'id' => $product->id,
            'name' => $product->name,
            'image' => $product->image,
            'price' => $product->price,
            'sale_price' => $product->sale_price,
            'category_id' => $product->category_id
        ];
        $item =(object)$item;
        $wishlists[$product->id] = $item;
        session(['wishlist'=> $wishlists]);
        
        return redirect()->route('home')->with('ok', 'Thêm sản phẩm vào wishlist thành công');
    }
    public function remove(Product $product){
        $wishlists = session('wishlist')? session('wishlist') : [];
        if(isset($wishlists[$product->id])){
            unset($wishlists[$product->id]); 
            session(['wishlist'=> $wishlists]);
        }
        if($wishlists != null){
             return redirect()->route('home.wishlist')->with('ok', 'Xóa sản phẩm khỏi wishlist thành công');
        }       
        if($wishlists == null){
            return redirect()->route('home')->with('ok', 'Wishlist rỗng, mời bạn chọn lại');;
        }
    }
}

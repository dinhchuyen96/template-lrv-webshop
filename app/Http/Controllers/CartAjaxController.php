<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class CartAjaxController extends Controller
{
    public function add(Request $request){
       $carts = session('cart')?session('cart'):[];        
       $product = Product::find($request->id);
       $quantity = $request->quantity;
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
        return response()->json(['status' => 200,
                                'product' => $product,
                                'quantity' => $quantity
                                ]);

        
    }
}

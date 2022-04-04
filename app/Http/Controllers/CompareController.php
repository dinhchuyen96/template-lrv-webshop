<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CompareController extends Controller
{
    public function view(){
        $procompare = session('compare')? session('compare') : [];
        //  dd($procompare);

        return view('site\compare',compact('procompare'));
    }
    public function add(Product $product)
    {
        //  dd($product);
        $procompare = session('compare')? session('compare') : [];
        $item = [
            'id' => $product->id,
            'name' => $product->name,
            'image' => $product->image,
            'price' => $product->price,
            'description' => $product->description,
            'sale_price' => $product->sale_price,
            'category_id' => $product->category_id
        ];
        $item =(object)$item;
        $procompare[$product->id] = $item;
        session(['compare'=> $procompare]);
        // session(['compare'=> null]);
        //  dd($procompare);
        return redirect()->route('home')->with('ok', 'thêm sản phẩm vào compare thành công');
    }
    public function remove(Product $product){
        $procompare = session('compare')? session('compare') : [];
        if(isset($procompare[$product->id])){
            unset($procompare[$product->id]); 
            session(['compare'=> $procompare]);
        }
        return redirect()->route('home.compare')->with('ok', 'xóa sản phẩm khỏi compare thành công');
        if($procompare == null){
            return redirect()->route('home');
        }
    }
}

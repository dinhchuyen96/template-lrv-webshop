<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompareController extends Controller
{
    public function view(){
        $procompare = session('compare')? session('compare') : [];
        return view('client.site\compare',compact('procompare'));
    }
    public function add(Product $product)
    {
        //luc tao compare san pham se add vao mang de luu nhung san pham da dc compare o day

        //nen can luu thong tin cua san pham do' o day
        //thoi cu doc di NullHandler
        //  dd($product);
        // sua o cho nay review_rt  add cai nay vao trong mang roi lay ra
        $procompare = session('compare')? session('compare') : [];
        $item = [
            'id' => $product->id,
            'name' => $product->name,
            'image' => $product->image,
            'price' => $product->price,
            'sort_description' => $product->sort_description,
            'description' => $product->description,
            'sale_price' => $product->sale_price,
            'category_id' => $product->category_id,
            "cat" => $product->cat, //cai nay hom trc a them cho em day gio cu thieu truoc nao cua product khi compare deu phai them o day
            'review_rt' => $product->review_rt
        ];
        $item =(object)$item;
        $procompare[$product->id] = $item;
        session(['compare'=> $procompare]);
        // session(['compare'=> null]);
        //  dd($procompare);
        return redirect()->route('home')->with('ok', 'Thêm sản phẩm vào compare thành công');
    }
    public function remove(Product $product){
        $procompare = session('compare')? session('compare') : [];
        if(isset($procompare[$product->id])){
            unset($procompare[$product->id]); 
            session(['compare'=> $procompare]);
            if($procompare != null){
                return redirect()->route('home.compare')->with('ok', 'Xóa sản phẩm khỏi compare thành công');
            }
            if($procompare == null){
                return redirect()->route('home')->with('ok', 'Compare rỗng, mời bạn chọn lại');          
            }
        }
    }
}

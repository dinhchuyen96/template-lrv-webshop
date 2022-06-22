<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\WishlistDetails;
use Illuminate\Http\Request;
use Auth;

class WishlistController extends Controller
{
    
    public function view(){
        $acc_id = Auth::guard('account')->user()->id;
        $wishlists = Wishlist::where('account_id', $acc_id)->get();
        // dd($wishlists);
        if($wishlists == null){
            return redirect()->route('home')->with('ok', 'Wishlist rỗng, mời bạn chọn lại');;
        }
        return view('client.site\wishlist',compact('wishlists'));
    }
    public function add(Product $product)
    {
        $acc_id = Auth::guard('account')->user()->id;

        $data['account_id'] =  $acc_id;
        $wishlist = Wishlist::create($data);
        WishlistDetails::create([
            'wishlist_id' => $wishlist->id,
            'product_id' =>$product->id,
        ]);        
        return redirect()->route('home')->with('ok', 'Thêm sản phẩm vào wishlist thành công');
    }
    public function remove(Wishlist $product){
        
        $product->delete();
        $acc_id = Auth::guard('account')->user()->id;
        $wishlists = Wishlist::where('account_id', $acc_id)->get();
        if($wishlists->isEmpty()){
            return redirect()->route('home')->with('ok', 'Wishlist rỗng, mời bạn chọn lại');;
        }else{
            return redirect()->route('home.wishlist')->with('ok', 'Xóa sản phẩm khỏi wishlist thành công');
        }
              
       
    }
}

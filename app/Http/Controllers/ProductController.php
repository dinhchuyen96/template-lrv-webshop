<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductCreateRequest;
use Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::search()->paginate(5);

        return view('admin.product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats =Category::orderBy('name','ASC')->get();
        return view('admin.product.create', compact('cats'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $req)
    {
        $data = $req->all('name','price','sale_price','category_id','status');
        // upload ảnh
        $file_name = $req->upload->getClientOriginalName();
        $partInfo = pathinfo($file_name);
        $ext = $partInfo['extension'];
        $base_name = $partInfo['filename']; 
        $final_name = Str::slug($base_name).'-'.time().'.'.$ext;

        $check_upload = $req->upload->move(public_path('uploads/'), $final_name);
        if($check_upload){
            $data['image'] = $final_name;
        };
        if(Product::create($data)){
            return redirect('product.index')->with('yes','thêm mới thành công');
        }else{
            return redirect('product.index')->with('yes','thêm mới thành công');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        // dd($category);
        return redirect()->route('product.index')->with('yes','Xóa thành công');;
    }
}

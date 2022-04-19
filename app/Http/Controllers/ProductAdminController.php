<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductEditRequest;
use Str;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro_cats = Category::orderBy('name','DESC')->get();
        $data_product = Product::orderBy('id','DESC')->search()->paginate(10);
        return view('admin.product.index',compact('data_product','pro_cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pro_cats =Category::orderBy('name','ASC')->get();
        return view('admin.product.create', compact('pro_cats'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $req)
    {
        $data_product = $req->all('name','sort_description','description','price','sale_price','category_id','status',);
        // upload ảnh
        $file_name = $req->upload->getClientOriginalName();

        $partInfo = pathinfo($file_name);
        $ext = $partInfo['extension'];

        $base_name = $partInfo['filename']; 

        $final_name = Str::slug($base_name).'-'.time().'.'.$ext;

        $check_upload = $req->upload->move(public_path('uploads/'), $final_name);

        if($check_upload){
            $data_product['image'] = $final_name;
        };

        if(Product::create($data_product)){
            return redirect()->route('product.index')->with('yes','thêm mới thành công');
        }else{
            return redirect()->route('product.index')->with('yes','thêm mới thất bại');
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
        $pro_cats =Category::orderBy('name','ASC')->get();
        $pros = Product::orderBy('name', 'ASC')->get();
        return view('admin.product.edit', compact('pro_cats','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductEditRequest $req,Product $product)
    {
        $data_product = $req->all('name','price','sale_price','category_id','status','description','sort_description','title_slide','take_slide');
        if($req->has('upload')){
            $file_name = $req->upload->getClientOriginalName();
            $partInfo = pathinfo($file_name);
            $ext = $partInfo['extension'];
            $base_name = $partInfo['filename']; 
            $final_name = Str::slug($base_name).'-'.time().'.'.$ext;
            $check_upload = $req->upload->move(public_path('uploads/'), $final_name);
            if($check_upload){
                $data_product['image'] = $final_name;
            }
        }
        $product->update($data_product);
        return redirect()->route('product.index')->with('yes','Cập nhật thành công');
    }
    // public function update_rating(Request $req, Product $product)
    // {
    //     $data_rating = $req->only('rating');
    //     $product->update($data_rating);
    //     return redirect()->back();
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        // dd($product);
        return redirect()->route('product.index')->with('yes','Xóa thành công');
    }
}

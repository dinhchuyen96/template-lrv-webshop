<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Requests\Product\ProductCreateRequest;
use App\Http\Requests\Product\ProductEditRequest;
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
        // dd($data_product->all());
        return view('admin.product.index',compact('data_product','pro_cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p_cats =Category::where('parent_id','=',0)->orderBy('name','ASC')->get();
        $c_cats =Category::orderBy('name','ASC')->get();
        // dd($c_cats);
        // dd($p_cats);
        return view('admin.product.create', compact('p_cats','c_cats'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $req)
    {
        $data_product = $req->all('name','number_sale','sort_description','description','price','percent_sale','sale_price','parent_cat','category_id','status',);
        // upload ảnh
        // dd($data_product);
        $file_name = $req->upload->getClientOriginalName();

        $partInfo = pathinfo($file_name);
        $ext = $partInfo['extension'];

        $base_name = $partInfo['filename']; 

        $final_name = Str::slug($base_name).'-'.time().'.'.$ext;

        $check_upload = $req->upload->move(public_path('uploads/products'), $final_name);

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
        $p_cats =Category::where('parent_id','=',0)->orderBy('name','ASC')->get();
        $c_cats = Category::orderBy('name','ASC')->get();;
        // $pros = Product::orderBy('name', 'ASC')->get();
        // dd($p_cats);
        // dd($product);
        return view('admin.product.edit', compact('p_cats','c_cats','product'));
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
        // dd($req->all());
        $data_product = $req->all('name','number_sale','price','sale_price','percent_sale','parent_cat','category_id','status','description','sort_description','title_slide','take_slide');
        if($req->has('upload')){
            $file_name = $req->upload->getClientOriginalName();
            $partInfo = pathinfo($file_name);
            $ext = $partInfo['extension'];
            $base_name = $partInfo['filename']; 
            $final_name = Str::slug($base_name).'-'.time().'.'.$ext;
            $check_upload = $req->upload->move(public_path('uploads/products'), $final_name);
            if($check_upload){
                $data_product['image'] = $final_name;
            }
        }
        // dd($data_product);
        $product->update($data_product);
        return redirect()->route('product.index')->with('yes','Cập nhật thành công');
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
        // dd($product);
        return redirect()->route('product.index')->with('yes','Xóa thành công');
    }
}

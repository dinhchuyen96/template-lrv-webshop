<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Review;
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
        $pros = Category::orderBy('name','DESC')->get();
        $data2 = Product::orderBy('id','DESC')->search()->paginate(10);
        return view('admin.product.index',compact('data2','pros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pros =Category::orderBy('name','ASC')->get();
        return view('admin.product.create', compact('pros'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $req)
    {
        $data2 = $req->all('name','description','price','sale_price','category_id','status');
        // upload ảnh
        $file_name = $req->upload->getClientOriginalName();

        $partInfo = pathinfo($file_name);
        $ext = $partInfo['extension'];

        $base_name = $partInfo['filename']; 

        $final_name = Str::slug($base_name).'-'.time().'.'.$ext;

        $check_upload = $req->upload->move(public_path('uploads/'), $final_name);

        if($check_upload){
            $data2['image'] = $final_name;
        };

        if(Product::create($data2)){
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
        $pros = Category::orderBy('name', 'ASC')->get();
        return view('admin.product.edit', compact('pros','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Product $product)
    {
        $data2 = $req->all('name','price','sale_price','category_id','status');
        if($req->has('upload')){
            $file_name = $req->upload->getClientOriginalName();
            $partInfo = pathinfo($file_name);
            $ext = $partInfo['extension'];
            $base_name = $partInfo['filename']; 
            $final_name = Str::slug($base_name).'-'.time().'.'.$ext;
            $check_upload = $req->upload->move(public_path('uploads/'), $final_name);
            if($check_upload){
                $data2['image'] = $final_name;
            }
        }
        $product->update($data2);
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
        // dd($category);
        return redirect()->route('product.index')->with('yes','Xóa thành công');;
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand_sale;
use Illuminate\Http\Request;
use App\Http\Requests\Brand_saleRequest;
use App\Http\Requests\Brand_saleEditRequest;

use Str;


class Brand_saleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Brand_sale::orderBy('id','DESC')->paginate(10);
        return view('admin.brand_sale.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand_sale.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Brand_saleRequest $request)
    {
        $data = $request->all('name','status','category_id');
        // dd($data_banner);
        $file_name = $request->upload->getClientOriginalName();

        $partInfo = pathinfo($file_name);
        $ext = $partInfo['extension'];

        $base_name = $partInfo['filename']; 

        $final_name = Str::slug($base_name).'-'.time().'.'.$ext;

        $check_upload = $request->upload->move(public_path('uploads/logo'), $final_name);

        if($check_upload){
            $data['logo'] = $final_name;
        };

        Brand_sale::create($data);
        return redirect()->route('brand_sale.index')->with('yes', "thêm mới brand sale thành công");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\brand_sale  $brand_sale
     * @return \Illuminate\Http\Response
     */
    public function show(brand_sale $brand_sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brand_sale  $brand_sale
     * @return \Illuminate\Http\Response
     */
    public function edit(brand_sale $brand_sale)
    {
        return view('admin.brand_sale.edit', compact('brand_sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\brand_sale  $brand_sale
     * @return \Illuminate\Http\Response
     */
    public function update(Brand_saleEditRequest $request, brand_sale $brand_sale)
    {
        $data = $request->all('name','status','category_id');
        if($request->has('upload')){
            $file_name = $request->upload->getClientOriginalName();
            $partInfo = pathinfo($file_name);
            $ext = $partInfo['extension'];
            $base_name = $partInfo['filename']; 
            $final_name = Str::slug($base_name).'-'.time().'.'.$ext;
            $check_upload = $request->upload->move(public_path('uploads/logo'), $final_name);
            if($check_upload){
                $data['logo'] = $final_name;
            }
        }
        // dd($data_banner);
        $brand_sale->update($data);
        return redirect()->route('brand_sale.index')->with('yes','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\brand_sale  $brand_sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(brand_sale $brand_sale)
    {
        $brand_sale->delete();
        return redirect()->route('brand_sale.index')->with('yes', "Xóa thành công");
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;

use App\Models\Category;
use App\Models\Product;
use Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_banner = Banner::orderBy('id','DESC')->paginate(10);
        return view('admin.banner.index', compact('data_banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pros =Product::orderBy('name','ASC')->get();
        return view('admin.banner.create', compact('pros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        // dd($request->all());
        $data_banner = $request->all('name','product_id','title','upload','status');
        // dd($data_banner);
        $file_name = $request->upload->getClientOriginalName();

        $partInfo = pathinfo($file_name);
        $ext = $partInfo['extension'];

        $base_name = $partInfo['filename']; 

        $final_name = Str::slug($base_name).'-'.time().'.'.$ext;

        $check_upload = $request->upload->move(public_path('uploads/banner'), $final_name);

        if($check_upload){
            $data_banner['image_slide'] = $final_name;
        };
        Banner::create($data_banner);
        return redirect()->route('banner.index')->with('yes', "thêm mới Banner thành công");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(banner $banner)
    {
        $pros =Product::orderBy('name','ASC')->get();

        return view('admin.banner.edit', compact('banner','pros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, banner $banner)
    {
        $data_banner = $request->all('name','product_id','status','title','created_at');
        if($request->has('upload')){
            $file_name = $request->upload->getClientOriginalName();
            $partInfo = pathinfo($file_name);
            $ext = $partInfo['extension'];
            $base_name = $partInfo['filename']; 
            $final_name = Str::slug($base_name).'-'.time().'.'.$ext;
            $check_upload = $request->upload->move(public_path('uploads/banner'), $final_name);
            if($check_upload){
                $data_banner['image_slide'] = $final_name;
            }
        }
        // dd($data_banner);
        $banner->update($data_banner);
        return redirect()->route('banner.index')->with('yes','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(banner $banner)
    {
        $banner->delete();
        return redirect()->route('banner.index')->with('yes', "Xóa thành công");
    }
}

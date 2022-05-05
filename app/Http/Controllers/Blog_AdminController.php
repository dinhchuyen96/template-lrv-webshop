<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blog_cat;
use Illuminate\Http\Request;
use Str;

class Blog_AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::orderBy('id','DESC')->search()->paginate(10);
        // dd($data);
        return view('admin.blog.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog_cat = Blog_cat::orderBy('id', 'desc')->get();
        // dd($blog_cat);
        return view('admin.blog.create', compact('blog_cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $data_blog = $request->all('name','cat_id','title','content','image_blog','status',);
        if($request->upload){
            $file_name = $request->upload->getClientOriginalName();

            $partInfo = pathinfo($file_name);
            $ext = $partInfo['extension'];

            $base_name = $partInfo['filename']; 

            $final_name = Str::slug($base_name).'-'.time().'.'.$ext;

            $check_upload = $request->upload->move(public_path('uploads/blog'), $final_name);

            if($check_upload){
                $data_blog['image_blog'] = $final_name;
            };
        }
        // dd($data_blog);
        Blog::create($data_blog);
        return redirect()->route('blog.index')->with('yes','Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {   
        $blog_cat = Blog_cat::orderBy('id', 'ASC')->get();
        // dd($blog);
        return view('admin.blog.edit', compact('blog','blog_cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $data_blog = $request->all('name','blog_cat','','title','content','status');
        if($request->has('upload')){
            $file_name = $request->upload->getClientOriginalName();
            $partInfo = pathinfo($file_name);
            $ext = $partInfo['extension'];
            $base_name = $partInfo['filename']; 
            $final_name = Str::slug($base_name).'-'.time().'.'.$ext;
            $check_upload = $request->upload->move(public_path('uploads/blog'), $final_name);
            if($check_upload){
                $data_blog['image_blog'] = $final_name;
            }
        }
        $blog->update($data_blog);
        return redirect()->route('blog.index')->with('yes','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('yes', "Xóa thành công");
    }
}

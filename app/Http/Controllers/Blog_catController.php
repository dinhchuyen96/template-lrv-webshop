<?php

namespace App\Http\Controllers;

use App\models\blog_cat;
use Illuminate\Http\Request;

class Blog_catController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog_cat::orderBy('id','DESC')->search()->paginate(10);
        // dd($data);
        return view('admin.blog_cat.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog_cat.create'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        blog_cat::create($request->only('name','status'));
        return redirect()->route('blog_cat.index')->with('yes','Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\blog_cat  $blog_cat
     * @return \Illuminate\Http\Response
     */
    public function show(blog_cat $blog_cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\blog_cat  $blog_cat
     * @return \Illuminate\Http\Response
     */
    public function edit(blog_cat $blog_cat)
    {
        return view('admin.blog_cat.edit', compact('blog_cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\blog_cat  $blog_cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog_cat $blog_cat)
    {
        $blog_cat->update($request->only('cat_name','status'));
        // dd($blog_cat);
        return redirect()->route('blog_cat.index')->with('yes','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\blog_cat  $blog_cat
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog_cat $blog_cat)
    {
        $blog_cat->delete();
        // dd($category);
        return redirect()->route('blog_cat.index')->with('yes','Xóa thành công');
    }
}

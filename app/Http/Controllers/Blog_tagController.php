<?php

namespace App\Http\Controllers;

use App\models\blog_tag;
use Illuminate\Http\Request;

class Blog_tagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog_tag::orderBy('id','DESC')->search()->paginate(10);
        // dd($data);
        return view('admin.blog_tag.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog_tag.create'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        blog_tag::create($request->only('tag_name','status'));
        return redirect()->route('blog_tag.index')->with('yes','Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\blog_tag  $blog_tag
     * @return \Illuminate\Http\Response
     */
    public function show(blog_tag $blog_tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\blog_tag  $blog_tag
     * @return \Illuminate\Http\Response
     */
    public function edit(blog_tag $blog_tag)
    {
        return view('admin.blog_tag.edit', compact('blog_tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\blog_tag  $blog_tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog_tag $blog_tag)
    {
        $blog_tag->update($request->only('tag_name','status'));
        // dd($blog_tag);
        return redirect()->route('blog_tag.index')->with('yes','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\blog_tag  $blog_tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog_tag $blog_tag)
    {
        //
    }
}

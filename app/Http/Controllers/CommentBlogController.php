<?php

namespace App\Http\Controllers;

use App\Models\Comment_Blog;
use Illuminate\Http\Request;

class CommentBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment_Blog::orderBy('id', 'DESC')->paginate(15);
        // dd($comments);
        return view('admin.comment_blog.index',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();
        // dd($data);
        Comment_Blog::create($data);
        return redirect()->back()->with('ok','Gửi comment thành công'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment_Blog  $comment_Blog
     * @return \Illuminate\Http\Response
     */
    public function show(Comment_Blog $comment_Blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment_Blog  $comment_Blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment_Blog $comment_Blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment_Blog  $comment_Blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment_Blog $comment_Blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment_Blog  $comment_Blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment_Blog $comment)
    {
        // dd($comment);
        $comment->delete();
        return redirect()->back()->with('yes','Xóa thành công');
    }
}

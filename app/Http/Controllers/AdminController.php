<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function dashboard(){
        // User::create([
        //     'name' => 'Admin Manerger',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt(123456)
        // ]);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
    public function logout1(){
        Auth::logout();
        return redirect()->route('home')->with('ok','Đăng xuất thành công');
    }
    // public function logout( Request $request )
    // {
    //     if(Auth::guard('admin')->check()) // this means that the admin was logged in.
    //         {
    //             Auth::guard('admin')->logout();
    //             return redirect()->route('admin.login');
    //         }

    //         $this->guard()->logout();
    //         $request->session()->invalidate();

    //         return $this->loggedOut($request) ?: redirect('/');
    // }
}

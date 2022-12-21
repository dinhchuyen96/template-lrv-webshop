<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewRequest $request, Product $product)
    {
        // dd(1);
        $data = $request->only('product_id', 'account_id', 'parent_id', 'content_review', 'rating');
        $acc = Auth::guard('account')->user();
        $acc = (object) $acc;
        $data['avatar'] = $acc->avatar;
        $data['name_reviewer'] = $acc->first_name.' '.$acc->last_name;
        $data['account_id'] = $acc->id;
        $data['product_id'] = $product->id;
        // dd($data['name_reviewer']);
        // dd($data);
        Review::create($data);

        return redirect()->back()->with('ok', 'Đăng review thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product, $slug, Review $review)
    {
        $review->update($review->only('content_review'));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, Category $category, $lug, Review $review)
    {
        // dd($review);
        $review->delete();

        return redirect()->back()->with('ok', 'Xóa review thành công');
    }
}

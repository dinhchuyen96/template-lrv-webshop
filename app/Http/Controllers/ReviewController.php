<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function add(Request $req)
    {
        $data= $req->all();
        Review::create($data);
        return redirect()->back(); 
    }
    public function showreviews()
    {
        
    }
}

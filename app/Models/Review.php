<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $fillable = ['account_id','product_id','name_reviewer','content_review','rating'];

    public function scopeReviews($query, $product_id){ // take reviews in table Reviews, product_id from HomeController 
        $query = $query->where('product_id',$product_id)->get();
        // dd($product_id);
        return $query;
    }
    
    
}

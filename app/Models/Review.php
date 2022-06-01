<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $fillable = ['id','account_id','avatar','product_id','parent_id','name_reviewer','content_review','rating'];

    public function scopeReviews_byProId($query, $product_id){ // take reviews in table Reviews, product_id from HomeController 
        $query = $query->where('product_id',$product_id)->get();
        return $query;
    }
    public function children()
    {
        return $this->hasMany(Review::class, 'parent_id', 'id');
    }
    public function time_comments($time_comment){
        $now = Carbon::now();
        $time_comments = Carbon::create($time_comment);
        $timestring = $time_comments->diffForHumans($now);
        return $timestring;
    }
    
}

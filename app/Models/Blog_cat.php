<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_cat extends Model
{
    use HasFactory;
    protected $table = 'blog_cats';
    protected $fillable = ['id','name','status',];


    // public function blog()
    // {
    //     return $this->hasMany(Blog::class, 'cat_id', 'id');
    // }
    public function scopeSearch($query)
    {
        $search_value = request()->search;
        if($search_value){
            $query = $query->where('name','LIKE','%'.$search_value.'%');
        }
        return $query;
        // dd($query);
    }
    public function blog_byCat(){
        return $this->hasMany(Blog::class,'cat_id','id');
    }
}


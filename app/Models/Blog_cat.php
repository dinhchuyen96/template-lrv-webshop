<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_cat extends Model
{
    use HasFactory;
    protected $table = 'blog_cat';
    protected $fillable = ['id','cat_name','status',];



    public function scopeSearch($query)
    {
        $search_value = request()->search;
        if($search_value){
            $query = $query->where('cat_name','LIKE','%'.$search_value.'%');
        }
        return $query;
        // dd($query);
    }
}


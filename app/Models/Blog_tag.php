<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_tag extends Model
{
    use HasFactory;
    protected $table = 'blog_tag';
    protected $fillable = ['id','tag_name','status',];



    public function scopeSearch($query)
    {
        $search_value = request()->search;
        if($search_value){
            $query = $query->where('tag_name','LIKE','%'.$search_value.'%');
        }
        return $query;
        // dd($query);
    }
}


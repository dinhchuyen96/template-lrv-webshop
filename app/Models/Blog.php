<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = ['name','content','status','image',];


    public function scopeSearch($query)
    {
        $search_value = request()->search;
        if($search_value){
            $query = $query->where('name','LIKE','%'.$search_value.'%');
        }
        return $query;
        // dd($query);
    }
}

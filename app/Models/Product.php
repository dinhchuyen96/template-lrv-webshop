<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','status','price','sale_price','image','category_id'];
    
    public function scopeSearch($query)
    {
        $search_value = request()->search;
        $cat_id = request()->cat_id;

        if($search_value){
            $query = $query->where('name','LIKE','%'.$search_value.'%');
        }

        if($cat_id){
            $query = $query->where('category_id', $cat_id);
        }
        return $query;
    }

    public function cat()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}

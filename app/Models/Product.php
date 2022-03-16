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

        if($search_value){
            $query = $query->where('name','LIKE','%'.$search_value.'%');
        }
        return $query;
    }
}

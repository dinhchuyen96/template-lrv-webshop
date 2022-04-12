<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['id','name','sort_description','description','status','price','sale_price','image','category_id','avg_rating'];

    
    
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
    
    public function scopeProduct_sale($query, $limit = 4){
        $query = $query->where('sale_price','>',0)->where('status','>',0)->limit($limit)->get();
        return $query;
    }
    public function scopeProduct_new($query, $limit = 4){
        $query = $query->orderBy('id','DESC')->where('status','>',0)->limit($limit)->get();
        return $query;
    }
    
    public function Count_cart(){
        
    }
}

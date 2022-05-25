<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['id','name','sort_description','description','status','price','percent_sale','sale_price','image','parent_cat','category_id','avg_rating'];

    
    
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
        // dd($query);
    }

    public function cat()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function p_cat()
    {
        return $this->belongsTo(Category::class, 'parent_cat', 'id');
    }
    public function review_rt()
    {
        return $this->hasMany(Review::class, 'product_id', 'id');
    }

    public function scopeProduct_sale($query, $limit = 4){
        $query = $query->where('sale_price','>',0)->where('status','>',0)->orderBy('percent_sale','DESC')->limit($limit)->get();
        return $query;
    }
    
    public function scopeProduct_top_sale($query, $limit = 6){
        $query = $query->where('number_sale','>',0)->where('status','>',0)->orderBy('number_sale','DESC')->limit($limit)->get();
        return $query;
    }
    public function scopeProduct_new($query, $limit = 4){
        $query = $query->orderBy('id','DESC')->where('status','>',0)->limit($limit)->get();
        return $query;
    }   
    
}

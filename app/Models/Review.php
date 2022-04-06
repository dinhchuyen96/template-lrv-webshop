<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $fillable = ['product_id','name_reviewer','review','rating'];

    public function scopeReviews($query,$product_id){ // Lấy review trong csdl theo product_id
        $query = $query->where('product_id',$product_id)->get();
        return $query;
    }
    public function scopeAvg_rating($query)
    {   
    
            return $query = 1111111111;
    }
    
}

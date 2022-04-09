<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','status','title','image_slide','product_id','date_created'];

    public function pro()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    
}

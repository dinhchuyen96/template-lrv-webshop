<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand_sale extends Model
{
    use HasFactory;
    protected $table = 'brand_sales';
    protected $fillable = ['id','name','logo','status','category_id'];

    public function cat()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}

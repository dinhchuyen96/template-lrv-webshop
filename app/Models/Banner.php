<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'status', 'title', 'product_id', 'image_slide', 'product_id', 'date_created'];

    public function pro()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function scopeBanner($query, $limit = 3)
    {
        $query = $query->orderBy('id', 'DESC')->where('status', '>', 0)->limit($limit)->get();

        return $query;
    }
}

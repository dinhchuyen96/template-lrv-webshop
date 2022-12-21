<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishlistDetails extends Model
{
    use HasFactory;

    protected $table = 'wishlist_details';

    protected $fillable = ['wishlist_id', 'product_id'];

    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class, 'wishlist_id', 'id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function cat()
    {
        return $this->belongsTo(Wishlist::class, 'wishlist_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlists';
    protected $fillable = ['id','account_id','product_id'];

    public function account()
    {
        return $this->hasOne(Account::class,'id','account_id');
    }
   
    public function details()
    {
        return $this->hasMany(WishlistDetails::class, 'wishlist_id','id');
    }

}

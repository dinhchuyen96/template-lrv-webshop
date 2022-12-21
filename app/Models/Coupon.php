<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $table = 'coupons';

    protected $fillable = ['name', 'discount_ab', 'discount_rl', 'code', 'begin', 'end', 'status'];

    public function scopeSearch($query)
    {
        $search_value = request()->search;
        if ($search_value) {
            $query = $query->where('name', 'LIKE', '%'.$search_value.'%')->orWhere('code', 'LIKE', '%'.$search_value.'%')->WhereNull('created_at', 'LIKE', '%'.$search_value.'%');
        }

        return $query;
    }

    public function scopeCheck_coupon($query)
    {
        $search_value = request()->search;
        if ($search_value) {
            $query = $query->where('name', 'LIKE', '%'.$search_value.'%');
        }

        return $query;
    }
}

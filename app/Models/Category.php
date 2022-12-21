<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = ['id', 'name', 'status', 'parent_id'];

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }

    public function scopeSearch($query)
    {
        $search_value = request()->search;
        if ($search_value) {
            $query = $query->where('name', 'LIKE', '%'.$search_value.'%');
        }

        return $query;
    }

    public function products_byCat()
    {
        return $this->hasMany(product::class, 'category_id', 'id');
    }

    public function products_byParent_Cat()
    {
        return $this->hasMany(product::class, 'parent_cat', 'id')->limit(6);
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
}

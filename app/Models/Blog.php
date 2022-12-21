<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = ['cat_id', 'name', 'title', 'content', 'status', 'image_blog'];

    public function comment_blog()
    {
        return $this->hasMany(Comment_Blog::class, 'blog_id', 'id');
    }

    public function scopeSearch($query)
    {
        $search_value = request()->search;
        if ($search_value) {
            $query = $query->where('name', 'LIKE', '%'.$search_value.'%');
        }

        return $query;
        // dd($query);
    }

    public function scopeFilter_Date($query)
    {
        $start = Carbon::parse($request->start_date);
        $end = Carbon::parse($request->end_date);
        $get_all_blog = User::whereDate('created_at', '<=', $end)
        ->whereDate('created_at', '>=', $start)
        ->get();

        return $get_all_user;
    }

    public function cat_blog()
    {
        return $this->belongsTo(Blog_cat::class, 'cat_id', 'id');
    }
}

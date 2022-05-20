<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_Blog extends Model
{
    use HasFactory;
    protected $table = 'comment_blogs';
    protected $fillable = ['id','blog_id','name','email','comment','webside','date_created'];

    public function blog_name()
    {
        return $this->belongsTo(Blog::class,'blog_id','id');
    }
}

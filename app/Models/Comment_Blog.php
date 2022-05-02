<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_Blog extends Model
{
    use HasFactory;
    protected $fillable = ['id','blog_id','name','email','comment','status','website','date_created'];

    
}

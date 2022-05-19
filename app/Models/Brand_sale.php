<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand_sale extends Model
{
    use HasFactory;
    protected $table = 'brand_sales';
    protected $fillable = ['name','logo','status'];
}

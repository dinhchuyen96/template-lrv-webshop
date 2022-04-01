<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Order extends Authenticatable
{
    use  HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'account_id',
        'first_name',
        'last_name',
        'sex',
        'email',
        'phone',
        'address',
        'quantity',
        'shipping_method',
        'payment_method',
        'order_note',
        'total_price'
    ];
    public function account()
    {
        return $this->hasOne(Account::class,'id','account_id');
    }
    public function products()
    {
        return $this -> belongsToMany(Product::class, 'order_details');
    }
    public function details()
    {
        return $this -> hasMany(OrderDetail::class, 'order_id','id');
    }
}
    
    

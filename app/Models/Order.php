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
        'category_id',
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
        'total_price',
        'status'
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
    public function totalQuantity()
    {
        $total = 0;
        foreach ($this->details as $dt){
            $total += $dt->quantity;
        }
        return $total;
    }
    public function totalAmount()
    {
        $total = 0;
        foreach ($this->details as $dt){
            $total += $dt->quantity * $dt->price;
        }
        return $total;
    }
    public function scopeSearch($query)
    {
        $search_value = request()->search;
        if($search_value){
            $query = $query->where('phone','LIKE','%'.$search_value.'%');            
        }
        return $query;
    }
}
    
    

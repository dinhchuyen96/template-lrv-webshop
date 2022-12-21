<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable
{
    use  HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'sex',
        'email',
        'phone',
        'password',
        'address',
        'avatar',
        'birth_day',
        'token',
        'status',
    ];

    public function scopeSearch($query)
    {
        $search_value = request()->search;

        if ($search_value) {
            $query = $query->where('last_name', 'LIKE', '%'.$search_value.'%')->orWhere('phone', 'LIKE', '%'.$search_value.'%')->orWhere('email', 'LIKE', '%'.$search_value.'%');
        }

        return $query;
        // dd($query);
    }
}

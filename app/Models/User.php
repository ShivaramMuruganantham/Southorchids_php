<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use HasFactory, Notifiable;

    protected $guarded = [];

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function carts() {
        return $this->hasMany(Cart::class);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}

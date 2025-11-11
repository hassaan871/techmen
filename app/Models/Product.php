<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Order;

class Product extends Model
{
    protected $fillable = [
        'seller_id',
        'name',
        'description',
        'processor',
        'ram',
        'storage',
        'display',
        'graphics',
        'price'
    ];

    public function sellers() {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function orders() {
        return $this->belongsToMany(Order::class)->withPivot('quantity', 'price_at_purchase')->withTimestamps();
    }
}

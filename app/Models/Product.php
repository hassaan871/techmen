<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Order;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'seller_id',
        'name',
        'brand',
        'model',
        'description',
        'category',
        'is_blocked',
    ];

    protected static function booted() 
    {
        static::deleting(function ($product) {
            $product->variants()->delete();
        });
    }

    public function scopeNotBlocked($query) 
    {
        return $query->where('is_blocked', false);
    }

    public function scopeBySeller($query, $sellerId) 
    {
        return $query->where('seller_id', $sellerId);
    }

    public function seller() 
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function orders() 
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity', 'price_at_purchase')->withTimestamps();
    }

    public function variants() 
    {
        return $this->hasMany(Variant::class);
    }
}

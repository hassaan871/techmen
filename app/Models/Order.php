<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Order extends Model
{
     protected $fillable = [
        'user_id',
        'status',
        'total_price',
    ];
    
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('variant_id','quantity', 'price_at_purchase')->withTimestamps();
    }

    public function variants() {
        return $this->belongsToMany(Variant::class, 'order_product')->withPivot('product_id','quantity', 'price_at_purchase')->withTimestamps();
    }
}

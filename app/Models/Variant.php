<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Variant extends Model
{
    use SoftDeletes; 
    
    protected $fillable = [
        'product_id',
        'processor',
        'ram',
        'storage',
        'display',
        'graphics',
        'price',
        'stock',
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}

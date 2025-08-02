<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'price',
        'discount_price',
        'stock',
        'product_image',
        'status',
        'description',
    ];

//   public static function boot()
//     {
//         parent::boot();

//         static::creating(function ($product) {
//             $product->slug = Str::slug($product->name) . '-' . uniqid();
//         });
//     }
}

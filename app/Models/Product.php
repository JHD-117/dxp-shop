<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Brand;
use App\Models\OrderItem;
use App\Models\Reference;


class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'images',
        'description',
        'price',
        'is_active',
        'is_featured',
        'in_stock',
        'on_sale',
        'category_id',
        'brand_id',
        'reference_brand_id',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function reference()
    {
        return $this->belongsTo(Reference::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}

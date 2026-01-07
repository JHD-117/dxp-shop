<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Brand;
use App\Models\Product;

class reference extends Model
{
    use HasFactory;

    protected $fillable = ['brand_id', 'name', 'slug', 'image', 'is_active'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

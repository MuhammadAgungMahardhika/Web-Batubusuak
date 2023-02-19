<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function product_gallery()
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }
    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}

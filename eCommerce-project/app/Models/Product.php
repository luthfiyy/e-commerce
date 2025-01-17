<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'regular_price',
        'stock_status',
        'quantity',
        'image',
        'category_id',
        'brand_id'
    ];

    public function index()
    {
        $products = Product::all();
    }
    
    public function category()
    {
        $products = Product::select('stock_status')->distinct()->get();
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand()
    {
        return $this->hasMany(Brand::class, 'brand_id');
    }

}

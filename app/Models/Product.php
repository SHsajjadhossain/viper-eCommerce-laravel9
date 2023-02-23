<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'product_name',
        'product_price',
        'product_code',
        'product_quantity',
        'product_short_description',
        'product_long_description',
        'product_photo',
        'product_slug'
    ];


    function relationtocategory(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    function relationtoproductthumnail(){
        return $this->belongsTo(Product_thumbnail::class, 'id', 'product_id');
    }

}

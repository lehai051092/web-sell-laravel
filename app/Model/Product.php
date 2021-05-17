<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = 'ws_products';
    protected $primaryKey = 'product_id';
    protected $fillable = ['category_id', 'brand_id', 'product_name', 'product_desc', 'product_price', 'feature_image_path', 'product_status'];
}

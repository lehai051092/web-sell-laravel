<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'ws_product_image';
    protected $primaryKey = 'product_image_id';
    protected $fillable = ['product_image_path', 'product_id'];
}

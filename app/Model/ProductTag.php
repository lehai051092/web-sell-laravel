<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    protected $table = 'ws_product_tag';
    protected $primaryKey = 'product_tag_id';
    protected $fillable = ['product_id', 'tag_id'];
}

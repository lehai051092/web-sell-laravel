<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    protected $table = 'ws_brands';
    protected $primaryKey = 'brand_id';
    protected $fillable = ['brand_name', 'brand_status'];
}

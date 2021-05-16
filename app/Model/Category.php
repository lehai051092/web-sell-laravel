<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'ws_categories';
    protected $primaryKey = 'category_id';
    protected $fillable = ['category_name', 'category_status', 'category_parent'];
}

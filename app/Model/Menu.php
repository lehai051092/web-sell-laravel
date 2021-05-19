<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;

    protected $table = "ws_menus";
    protected $primaryKey = "menu_id";
    protected $fillable = ['menu_name', 'menu_parent_id', 'menu_status'];
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'ws_tags';
    protected $primaryKey = 'tag_id';
    protected $fillable = ['tag_name'];
}

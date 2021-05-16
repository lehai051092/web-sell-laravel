<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAdmin extends Model
{
    use SoftDeletes;

    protected $table = 'ws_users_admin';

    protected $fillable = ['admin_email', 'admin_name', 'admin_phone'];

    protected $hidden = [
        'admin_password', 'remember_token',
    ];
}

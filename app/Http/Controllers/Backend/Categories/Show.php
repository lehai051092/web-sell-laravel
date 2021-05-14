<?php

namespace App\Http\Controllers\Backend\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Show extends Controller
{
    public function showCategories()
    {
        return view('admin.pages.categories.list');
    }
}

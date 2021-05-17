<?php

namespace App\Http\Controllers\Backend\Products\Actions;

use App\Http\Controllers\Backend\Products\Index;
use Illuminate\Http\Request;

class Add extends Index
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function redirectAddProduct()
    {
        $htmlCategoriesOption = $this->productsService->getCategoriesRecursive($parentId = '');
        $htmlBrandOption = '';
        return view('admin.pages.products.form-add', compact('htmlCategoriesOption', 'htmlBrandOption'));
    }
}

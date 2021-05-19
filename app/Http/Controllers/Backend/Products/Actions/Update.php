<?php

namespace App\Http\Controllers\Backend\Products\Actions;

use App\Http\Controllers\Backend\Products\Index;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Update extends Index
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function redirectEditProduct($id)
    {
        $category = $this->productsService->findById($id);
        $htmlOption = $this->productsService->getCategoriesRecursive($category->category_parent);
        return view('admin.pages.products.form-edit', compact('htmlOption', 'category'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateProduct($id, Request $request): RedirectResponse
    {
        $this->productsService->updateProduct($id, $request);
        return redirect()->route('backend.products.index');
    }
}

<?php

namespace App\Http\Controllers\Backend\Categories\Actions;

use App\Http\Controllers\Backend\Categories\Index;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Update extends Index
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function redirectEditCategory($id)
    {
        $category = $this->categoriesService->findById($id);
        $htmlOption = $this->categoriesService->getCategoriesRecursive($category->category_parent, $category->category_id);
        return view('admin.pages.categories.form-edit', compact('htmlOption', 'category'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateCategory($id, Request $request): RedirectResponse
    {
        $this->categoriesService->updateCategory($id, $request);
        return redirect()->route('backend.categories.index');
    }
}

<?php

namespace App\Http\Controllers\Backend\Categories;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Add extends Index
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function redirectAdd()
    {
        $htmlOption = $this->categoriesService->getCategoriesRecursive($parentId = '');
        return view('admin.pages.categories.form-add', compact('htmlOption'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function createCategory(Request $request): RedirectResponse
    {
        $this->categoriesService->createCategory($request);
        return redirect()->route('backend.categories.list');
    }
}

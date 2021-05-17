<?php

namespace App\Http\Controllers\Backend\Brands\Actions;

use App\Http\Controllers\Backend\Brands\Index;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Update extends Index
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function redirectEditBrand($id)
    {
        $brand = $this->brandsService->findById($id);
        return view('admin.pages.brands.form-edit', compact( 'brand'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateBrand($id, Request $request): RedirectResponse
    {
        $this->brandsService->updateBrand($id, $request);
        return redirect()->route('backend.brands.index');
    }
}

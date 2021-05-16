<?php

namespace App\Http\Controllers\Backend\Brands\Actions;

use App\Http\Controllers\Backend\Brands\Index;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Add extends Index
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function redirectAddBrand()
    {
        return view('admin.pages.brands.form-add');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function createBrand(Request $request): RedirectResponse
    {
        $this->brandsService->createBrand($request);
        return redirect()->route('backend.brands.list');
    }
}

<?php

namespace App\Http\Controllers\Backend\Brands\Actions;

use App\Http\Controllers\Backend\Brands\Index;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Delete extends Index
{
    /**
     * @param $id
     * @return RedirectResponse
     */
    public function deleteBrand($id): RedirectResponse
    {
        $this->brandsService->deleteBrand($id);
        return redirect()->route('backend.brands.index');
    }
}

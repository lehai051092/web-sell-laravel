<?php

namespace App\Http\Controllers\Backend\Products\Actions;

use App\Http\Controllers\Backend\Categories\Index;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Delete extends Index
{
    /**
     * @param $id
     * @return RedirectResponse
     */
    public function deleteCategory($id): RedirectResponse
    {
        $this->categoriesService->deleteCategory($id);
        return redirect()->route('backend.products.index');
    }
}

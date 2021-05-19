<?php

namespace App\Http\Controllers\Backend\Menus\Actions;

use App\Http\Controllers\Backend\Menus\Index;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Delete extends Index
{
    /**
     * @param $id
     * @return RedirectResponse
     */
    public function deleteMenu($id): RedirectResponse
    {
        $this->menusService->deleteMenu($id);
        return redirect()->route('backend.menus.index');
    }
}

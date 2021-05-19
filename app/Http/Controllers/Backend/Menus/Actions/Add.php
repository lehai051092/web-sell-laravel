<?php

namespace App\Http\Controllers\Backend\Menus\Actions;

use App\Http\Controllers\Backend\Menus\Index;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Add extends Index
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function redirectAddMenu()
    {
        $htmlOption = $this->menusService->getMenusRecursive($parentId = '', $currentMenuId = null);
        return view('admin.pages.menus.form-add', compact('htmlOption'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function createMenu(Request $request): RedirectResponse
    {
        $this->menusService->createMenu($request);
        return redirect()->route('backend.menus.index');
    }
}

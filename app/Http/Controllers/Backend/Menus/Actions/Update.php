<?php

namespace App\Http\Controllers\Backend\Menus\Actions;

use App\Http\Controllers\Backend\Menus\Index;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Update extends Index
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function redirectEditMenu($id)
    {
        $menu = $this->menusService->findById($id);
        $htmlOption = $this->menusService->getMenusRecursive($menu->menu_parent_id, $menu->menu_id);
        return view('admin.pages.menus.form-edit', compact('htmlOption', 'menu'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateMenu($id, Request $request): RedirectResponse
    {
        $this->menusService->updateMenu($id, $request);
        return redirect()->route('backend.menus.index');
    }
}

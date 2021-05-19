<?php

namespace App\Http\Controllers\Backend\Menus;

use App\Helper\VariablesInterface;
use App\Http\Controllers\Controller;
use App\Services\Backend\Interfaces\MenusServiceInterface;

class Index extends Controller
{
    /**
     * @var MenusServiceInterface
     */
    protected $menusService;

    /**
     * Index constructor.
     * @param MenusServiceInterface $menusService
     */
    public function __construct(
        MenusServiceInterface $menusService
    ) {
        $this->menusService = $menusService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listMenu()
    {
        $menus = $this->menusService->getMenusPaginate(VariablesInterface::LIMIT_PAGINATE_PAGE);
        $menusParent = $this->menusService->getMenusParent();
        return view('admin.pages.menus.index', compact('menus', 'menusParent'));
    }
}

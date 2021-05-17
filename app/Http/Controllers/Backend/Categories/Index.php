<?php

namespace App\Http\Controllers\Backend\Categories;

use App\Helper\VariablesInterface;
use App\Services\Backend\Interfaces\CategoriesServiceInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Index extends Controller
{
    /**
     * @var CategoriesServiceInterface
     */
    protected $categoriesService;

    /**
     * Index constructor.
     * @param CategoriesServiceInterface $categoriesService
     */
    public function __construct(
        CategoriesServiceInterface $categoriesService
    ) {
        $this->categoriesService = $categoriesService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listCategory()
    {
        $categories = $this->categoriesService->getCategoriesPaginate(VariablesInterface::LIMIT_PAGINATE_PAGE);
        return view('admin.pages.categories.index', compact('categories'));
    }
}

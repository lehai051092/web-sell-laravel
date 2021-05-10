<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Services\CategoryServiceInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * @var CategoryServiceInterface
     */
    protected $categoryService;

    /**
     * CategoryController constructor.
     * @param CategoryServiceInterface $categoryService
     */
    public function __construct(
        CategoryServiceInterface $categoryService
    ) {
        $this->categoryService = $categoryService;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $categories = $this->categoryService->getCategoriesPaginate(5);
        return view('category.index', compact('categories'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $htmlOption = $this->categoryService->getCategoryRecursive(CategoryServiceInterface::ROOT_PARENT_CATEGORY, $parentId = '');
        return view('category.add', compact('htmlOption'));
    }

    /***
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $this->categoryService->createCategory($request);
        return redirect()->route('categories.index');
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $category = $this->categoryService->findById($id);
        $htmlOption = $this->categoryService->getCategoryRecursive(CategoryServiceInterface::ROOT_PARENT_CATEGORY, $category->parent_id);
        return view('category.edit', compact('category', 'htmlOption'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update($id, Request $request): RedirectResponse
    {
        $this->categoryService->updateCategory($id, $request);
        return redirect()->route('categories.index');
    }

    /**
     * @param $id
     */
    public function delete($id)
    {

    }
}

<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Components\Category\CategoryRecursive;
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
    )
    {
        $this->categoryService = $categoryService;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('category.index');
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $data = $this->categoryService->getData();
        $categoryRecursive = new CategoryRecursive($data);
        $htmlOption = $categoryRecursive->getCategoryRecursive();
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
}

<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Services\CategoryServiceInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
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
        return view('category.index');
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $htmlOption = $this->categoryService->getCategoryRecursive(CategoryServiceInterface::ROOT_PARENT_CATEGORY);
        return view('category.add', compact('htmlOption'));
    }
}

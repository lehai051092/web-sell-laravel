<?php

namespace App\Http\Controllers\Backend\Categories;

use App\Http\Services\Backend\Categories\CategoriesServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Add extends Controller
{
    /**
     * @var CategoriesServiceInterface
     */
    protected $categoriesService;

    /**
     * Add constructor.
     * @param CategoriesServiceInterface $categoriesService
     */
    public function __construct(CategoriesServiceInterface $categoriesService)
    {
        $this->categoriesService = $categoriesService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function redirectAdd()
    {
        return view('admin.pages.categories.form-add');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function createCategory(Request $request): RedirectResponse
    {
        $this->categoriesService->createCategory($request);
        return redirect()->route('backend.categories.list');
    }
}

<?php

namespace App\Http\Controllers\Backend\Products;

use App\Helper\VariablesInterface;
use App\Services\Backend\Interfaces\ProductsServiceInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Index extends Controller
{
    /**
     * @var ProductsServiceInterface
     */
    protected $productsService;

    /**
     * Index constructor.
     * @param ProductsServiceInterface $productsService
     */
    public function __construct(
        ProductsServiceInterface $productsService
    ) {
        $this->productsService = $productsService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listProduct()
    {
        $products = $this->productsService->getProductsPaginate(VariablesInterface::LIMIT_PAGINATE_PAGE);
        return view('admin.pages.products.index', compact('products'));
    }
}

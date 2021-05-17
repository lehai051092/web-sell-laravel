<?php

namespace App\Http\Controllers\Backend\Brands;

use App\Helper\VariablesInterface;
use App\Services\Backend\Interfaces\BrandsServiceInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Index extends Controller
{
    /**
     * @var BrandsServiceInterface
     */
    protected $brandsService;

    /**
     * Index constructor.
     * @param BrandsServiceInterface $brandsService
     */
    public function __construct(
        BrandsServiceInterface $brandsService
    ) {
        $this->brandsService = $brandsService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listBrand()
    {
        $brands = $this->brandsService->getBrandsPaginate(VariablesInterface::LIMIT_PAGINATE_PAGE);
        return view('admin.pages.brands.index', compact('brands'));
    }
}

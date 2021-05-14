<?php
declare(strict_types=1);

namespace App\Http\Services\Backend\Categories\Impl;

use App\Helper\Options\Category;
use App\Http\Repositories\Backend\Categories\CategoriesRepositoryInterface;
use App\Http\Services\Backend\Categories\CategoriesServiceInterface;

class CategoriesServiceImpl implements CategoriesServiceInterface
{
    /**
     * @var CategoriesRepositoryInterface
     */
    protected $categoriesRepository;

    /**
     * @var Category
     */
    protected $helper;

    /**
     * CategoriesServiceImpl constructor.
     * @param CategoriesRepositoryInterface $categoriesRepository
     * @param Category $helper
     */
    public function __construct
    (
        CategoriesRepositoryInterface $categoriesRepository,
        Category $helper
    ) {
        $this->categoriesRepository = $categoriesRepository;
        $this->helper = $helper;
    }

    /**
     * @param $request
     * @return mixed
     */
    function createCategory($request)
    {
        $options = $this->helper->optionArray($request);
        return $this->categoriesRepository->create($options);
    }
}

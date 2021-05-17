<?php
declare(strict_types=1);

namespace App\Services\Backend\Impl;


use App\Repositories\Backend\Interfaces\ProductsRepositoryInterface;
use App\Services\Backend\Interfaces\CategoriesServiceInterface;
use App\Services\Backend\Interfaces\ProductsServiceInterface;

class ProductsService implements ProductsServiceInterface
{
    /**
     * @var ProductsRepositoryInterface
     */
    protected $productsRepository;

    /**
     * @var CategoriesServiceInterface
     */
    protected $categoriesService;

    /**
     * ProductsService constructor.
     * @param ProductsRepositoryInterface $productsRepository
     * @param CategoriesServiceInterface $categoriesService
     */
    public function __construct(
        ProductsRepositoryInterface $productsRepository,
        CategoriesServiceInterface $categoriesService
    ) {
        $this->productsRepository = $productsRepository;
        $this->categoriesService = $categoriesService;
    }

    /**
     * @param $limit
     * @return mixed
     */
    public function getProductsPaginate($limit)
    {
        return $this->productsRepository->getProductsPaginate($limit);
    }

    /**
     * @param $parentId
     * @return mixed
     */
    public function getCategoriesRecursive($parentId)
    {
        return $this->categoriesService->getCategoriesRecursive($parentId);
    }
}

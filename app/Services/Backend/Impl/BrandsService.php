<?php
declare(strict_types=1);

namespace App\Services\Backend\Impl;

use App\Helper\Options\Brand;
use App\Repositories\Backend\Interfaces\BrandsRepositoryInterface;
use App\Services\Backend\Interfaces\BrandsServiceInterface;

class BrandsService implements BrandsServiceInterface
{
    /**
     * @var BrandsRepositoryInterface
     */
    protected $brandsRepository;

    /**
     * @var Brand
     */
    protected $helper;

    /**
     * CategoriesServiceImpl constructor.
     * @param BrandsRepositoryInterface $brandsRepository
     * @param Brand $helper
     */
    public function __construct
    (
        BrandsRepositoryInterface $brandsRepository,
        Brand $helper
    ) {
        $this->brandsRepository = $brandsRepository;
        $this->helper = $helper;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->brandsRepository->getData();
    }

    /**
     * @param $request
     * @return mixed
     */
    public function createBrand($request)
    {
        $options = $this->helper->optionArray($request);
        return $this->brandsRepository->create($options);
    }

    /**
     * @param $limit
     * @return mixed
     */
    public function getBrandsPaginate($limit)
    {
        return $this->brandsRepository->getBrandsPaginate($limit);
    }

    /**
     * @param $id
     * @param $request
     * @return mixed
     */
    public function updateBrand($id, $request)
    {
        $options = $this->helper->optionArray($request);
        return $this->brandsRepository->update($id, $options);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteBrand($id)
    {
        return $this->brandsRepository->delete($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->brandsRepository->findById($id);
    }
}

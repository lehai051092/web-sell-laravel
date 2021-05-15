<?php
declare(strict_types=1);

namespace App\Services\Backend\Impl;

use App\Helper\Categories\CategoriesRecursive;
use App\Helper\Options\Category;
use App\Helper\VariablesInterface;
use App\Repositories\Backend\Interfaces\CategoriesRepositoryInterface;
use App\Services\Backend\Interfaces\CategoriesServiceInterface;

class CategoriesService implements CategoriesServiceInterface
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
     * @return mixed
     */
    public function getData()
    {
        return $this->categoriesRepository->getData();
    }

    /**
     * @param $request
     * @return mixed
     */
    public function createCategory($request)
    {
        $options = $this->helper->optionArray($request);
        return $this->categoriesRepository->create($options);
    }

    /**
     * @param $parentId
     * @return string
     */
    public function getCategoriesRecursive($parentId): string
    {
        $data = $this->getData();
        $categoriesRecursive = new CategoriesRecursive($data);

        return $categoriesRecursive->getCategoriesRecursive($id = VariablesInterface::OPTION_VALUE_ROOT_CATEGORY, $parentId);
    }

    /**
     * @param $limit
     * @return mixed
     */
    public function getCategoriesPaginate($limit)
    {
        return $this->categoriesRepository->getCategoriesPaginate($limit);
    }

    /**
     * @param $id
     * @param $request
     * @return mixed
     */
    public function updateCategory($id, $request)
    {
        $options = $this->helper->optionArray($request);
        return $this->categoriesRepository->update($id, $options);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteCategory($id)
    {
        return $this->categoriesRepository->delete($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->categoriesRepository->findById($id);
    }
}

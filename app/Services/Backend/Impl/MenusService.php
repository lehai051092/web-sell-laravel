<?php
declare(strict_types=1);

namespace App\Services\Backend\Impl;

use App\Helper\Menus\MenusParent;
use App\Helper\Menus\MenusRecursive;
use App\Helper\Options\Category;
use App\Helper\Options\Menu;
use App\Helper\VariablesInterface;
use App\Repositories\Backend\Interfaces\CategoriesRepositoryInterface;
use App\Repositories\Backend\Interfaces\MenusRepositoryInterface;
use App\Services\Backend\Interfaces\MenusServiceInterface;

class MenusService implements MenusServiceInterface
{
    /**
     * @var CategoriesRepositoryInterface
     */
    protected $menusRepository;

    /**
     * @var Category
     */
    protected $helper;

    /**
     * @var MenusRecursive
     */
    protected $menusRecursive;

    /**
     * CategoriesServiceImpl constructor.
     * @param MenusRepositoryInterface $menusRepository
     * @param Menu $helper
     * @param MenusRecursive $menusRecursive
     */
    public function __construct
    (
        MenusRepositoryInterface $menusRepository,
        Menu $helper,
        MenusRecursive $menusRecursive
    ) {
        $this->menusRepository = $menusRepository;
        $this->helper = $helper;
        $this->menusRecursive = $menusRecursive;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->menusRepository->getData();
    }

    /**
     * @param $request
     * @return mixed
     */
    public function createMenu($request)
    {
        $options = $this->helper->optionArray($request);
        return $this->menusRepository->create($options);
    }

    /**
     * @param $parentId
     * @param $currentMenuId
     * @return string
     */
    public function getMenusRecursive($parentId, $currentMenuId): string
    {
        $data = $this->getData();
        return $this->menusRecursive->getMenusRecursive($data, $id = VariablesInterface::OPTION_VALUE_ROOT, $parentId, $currentMenuId);
    }

    /**
     * @param $limit
     * @return mixed
     */
    public function getMenusPaginate($limit)
    {
        return $this->menusRepository->getMenusPaginate($limit);
    }

    /**
     * @param $id
     * @param $request
     * @return mixed
     */
    public function updateMenu($id, $request)
    {
        $options = $this->helper->optionArray($request);
        return $this->menusRepository->update($id, $options);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteMenu($id)
    {
        return $this->menusRepository->delete($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->menusRepository->findById($id);
    }

    /**
     * @return string
     */
    public function getMenusParent(): string
    {
        $data = $this->getData();
        return $this->menusRecursive->getMenusParent($data, $id = VariablesInterface::OPTION_VALUE_ROOT);
    }
}

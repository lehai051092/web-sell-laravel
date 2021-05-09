<?php
declare(strict_types=1);

namespace App\Http\Services\Impl;

use App\Http\Repositories\CategoryRepositoryInterface;
use App\Http\Services\CategoryServiceInterface;

class CategoryServiceImpl implements CategoryServiceInterface
{
    /**
     * @var string
     */
    protected $htmlSelect;

    /**
     * @var CategoryRepositoryInterface
     */
    protected $categoryRepository;

    /**
     * CategoryServiceImpl constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(
        CategoryRepositoryInterface $categoryRepository
    ) {
        $this->htmlSelect = '';
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->categoryRepository->getData();
    }

    /**
     * @param $id
     * @return string
     */
    public function getCategoryRecursive($id): string
    {
        $data = $this->getData();
        foreach ($data as $value) {
            if ($value['parent_id'] == $id) {
                $this->htmlSelect .= "<option>" . $value['name'] . "</option>";
                $this->getCategoryRecursive($value['id']);
            }
        }

        return $this->htmlSelect;
    }
}

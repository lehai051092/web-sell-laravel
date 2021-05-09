<?php
declare(strict_types=1);

namespace App\Http\Services\Impl;

use App\Http\Repositories\CategoryRepositoryInterface;
use App\Http\Services\CategoryServiceInterface;

class CategoryServiceImpl implements CategoryServiceInterface
{
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
     * @param $request
     * @return mixed
     */
    function createCategory($request)
    {
        $options = [
            'name' => $request->category_name,
            'parent_id' => $request->category_parent_id,
            'slug' => str_slug($request->category_name)
        ];

        return $this->categoryRepository->createNew($options);
    }
}

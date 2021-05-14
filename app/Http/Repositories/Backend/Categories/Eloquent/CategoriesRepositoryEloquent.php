<?php
declare(strict_types=1);

namespace App\Http\Repositories\Backend\Categories\Eloquent;

use App\Http\Repositories\Backend\Categories\CategoriesRepositoryInterface;
use App\Model\Backend\Category;

class CategoriesRepositoryEloquent implements CategoriesRepositoryInterface
{
    /**
     * @var Category
     */
    protected $category;

    /**
     * CategoriesRepositoryEloquent constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * @param $options
     * @return mixed
     */
    public function create($options)
    {
        return $this->category->create($options);
    }
}

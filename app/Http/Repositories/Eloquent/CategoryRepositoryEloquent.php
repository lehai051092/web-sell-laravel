<?php
declare(strict_types=1);

namespace App\Http\Repositories\Eloquent;

use App\Category;
use App\Http\Repositories\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepositoryEloquent implements CategoryRepositoryInterface
{
    /**
     * @var Category
     */
    protected $category;

    /**
     * CategoryRepositoryEloquent constructor.
     * @param Category $category
     */
    public function __construct(
        Category $category
    ) {
        $this->category = $category;
    }

    /**
     * @return Category[]|Collection
     */
    function getData()
    {
        return $this->category->all();
    }
}

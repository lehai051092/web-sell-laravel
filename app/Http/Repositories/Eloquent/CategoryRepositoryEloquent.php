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
    public function getData()
    {
        return $this->category->all();
    }

    /**
     * @param $options
     */
    public function createNew($options)
    {
        $this->category->create($options);
    }

    /**
     * @param $qty
     * @return mixed
     */
    public function getDataPaginate($qty)
    {
        return $this->category->latest()->paginate($qty);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->category->findOrFail($id);
    }

    /**
     * @param $id
     * @param $options
     * @return mixed
     */
    public function updateCategory($id, $options)
    {
        $this->findById($id)->update($options);
    }

    /**
     * @param $id
     * @return mixed
     */
    function deleteById($id)
    {
        $this->findById($id)->delete();
    }
}

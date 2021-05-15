<?php
declare(strict_types=1);

namespace App\Repositories\Backend\Eloquent;

use App\Model\Backend\Category;
use App\Repositories\Backend\Interfaces\CategoriesRepositoryInterface;

class CategoriesRepository implements CategoriesRepositoryInterface
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
     * @return Category[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getData()
    {
        return $this->category->all();
    }

    /**
     * @param $options
     * @return mixed
     */
    public function create($options)
    {
        return $this->category->create($options);
    }

    /**
     * @param $limit
     * @return mixed
     */
    public function getCategoriesPaginate($limit)
    {
        return $this->category->paginate($limit);
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
    public function update($id ,$options)
    {
        return $this->findById($id)->update($options);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->findById($id)->delete();
    }
}

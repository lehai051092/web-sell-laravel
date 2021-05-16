<?php
declare(strict_types=1);

namespace App\Repositories\Backend\Eloquent;

use App\Model\Brand;
use App\Repositories\Backend\Interfaces\BrandsRepositoryInterface;

class BrandsRepository implements BrandsRepositoryInterface
{
    /**
     * @var Brand
     */
    protected $brand;

    /**
     * CategoriesRepositoryEloquent constructor.
     * @param Brand $brand
     */
    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return Brand[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getData()
    {
        return $this->brand->all();
    }

    /**
     * @param $options
     * @return mixed
     */
    public function create($options)
    {
        return $this->brand->create($options);
    }

    /**
     * @param $limit
     * @return mixed
     */
    public function getBrandsPaginate($limit)
    {
        return $this->brand->paginate($limit);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->brand->findOrFail($id);
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

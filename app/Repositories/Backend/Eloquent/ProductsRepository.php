<?php
declare(strict_types=1);

namespace App\Repositories\Backend\Eloquent;

use App\Model\Product;
use App\Repositories\Backend\Interfaces\ProductsRepositoryInterface;

class ProductsRepository implements ProductsRepositoryInterface
{
    /**
     * @var Product
     */
    protected $product;

    /**
     * ProductsRepository constructor.
     * @param Product $product
     */
    public function __construct(
        Product $product
    ) {
        $this->product = $product;
    }

    /**
     * @param $limit
     * @return mixed
     */
    public function getProductsPaginate($limit)
    {
        return $this->product->paginate($limit);
    }
}

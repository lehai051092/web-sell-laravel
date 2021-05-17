<?php
declare(strict_types=1);

namespace App\Services\Backend\Interfaces;

interface ProductsServiceInterface
{
    public function getProductsPaginate($limit);

    public function getCategoriesRecursive($parentId);
}

<?php
declare(strict_types=1);

namespace App\Repositories\Backend\Interfaces;

interface ProductsRepositoryInterface
{
    public function getProductsPaginate($limit);
}

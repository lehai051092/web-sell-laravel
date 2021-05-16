<?php
declare(strict_types=1);

namespace App\Services\Backend\Interfaces;

interface BrandsServiceInterface
{
    public function getData();

    public function createBrand($request);

    public function getBrandsPaginate($limit);

    public function updateBrand($id, $request);

    public function deleteBrand($id);

    public function findById($id);
}

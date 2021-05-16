<?php
declare(strict_types=1);

namespace App\Repositories\Backend\Interfaces;

interface BrandsRepositoryInterface
{
    public function getData();

    public function create($options);

    public function getBrandsPaginate($limit);

    public function findById($id);

    public function update($id, $options);

    public function delete($id);
}

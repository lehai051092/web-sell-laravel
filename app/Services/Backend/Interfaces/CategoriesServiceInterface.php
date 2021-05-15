<?php
declare(strict_types=1);

namespace App\Services\Backend\Interfaces;

interface CategoriesServiceInterface
{
    public function getData();

    public function createCategory($request);

    public function getCategoriesRecursive($parentId);

    public function getCategoriesPaginate($limit);

    public function updateCategory($id, $request);

    public function deleteCategory($id);

    public function findById($id);
}

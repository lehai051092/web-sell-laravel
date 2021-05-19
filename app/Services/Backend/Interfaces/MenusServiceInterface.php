<?php
declare(strict_types=1);

namespace App\Services\Backend\Interfaces;

interface MenusServiceInterface
{
    public function getData();

    public function createMenu($request);

    public function getMenusRecursive($parentId, $currentMenuId);

    public function getMenusPaginate($limit);

    public function updateMenu($id, $request);

    public function deleteMenu($id);

    public function findById($id);

    public function getMenusParent();
}

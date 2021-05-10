<?php
declare(strict_types=1);

namespace App\Http\Services;

interface CategoryServiceInterface
{
    const ROOT_PARENT_CATEGORY = 0;

    /**
     * @return mixed
     */
    function getData();

    /**
     * @param $request
     * @return mixed
     */
    function createCategory($request);

    /**
     * @param $id
     * @param $parentId
     * @return mixed
     */
    function getCategoryRecursive($id, $parentId);

    /**
     * @param $qty
     * @return mixed
     */
    function getCategoriesPaginate($qty);

    /**
     * @param $id
     * @return mixed
     */
    function findById($id);

    /**
     * @param $id
     * @param $request
     * @return mixed
     */
    function updateCategory($id, $request);
}

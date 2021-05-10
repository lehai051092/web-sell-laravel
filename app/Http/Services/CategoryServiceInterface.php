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
     * @return mixed
     */
    function getCategoryRecursive($id);

    /**
     * @param $qty
     * @return mixed
     */
    function getCategoriesPaginate($qty);
}

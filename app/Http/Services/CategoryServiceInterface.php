<?php
declare(strict_types=1);

namespace App\Http\Services;

interface CategoryServiceInterface {
    const ROOT_PARENT_CATEGORY = 0;

    function getData();
    function getCategoryRecursive($id);
}

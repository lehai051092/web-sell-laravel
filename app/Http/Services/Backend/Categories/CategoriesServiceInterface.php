<?php
declare(strict_types=1);

namespace App\Http\Services\Backend\Categories;

interface CategoriesServiceInterface
{
    function createCategory($request);
}

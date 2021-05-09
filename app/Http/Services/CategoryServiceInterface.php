<?php
declare(strict_types=1);

namespace App\Http\Services;

interface CategoryServiceInterface
{
    function getData();

    function createCategory($request);
}

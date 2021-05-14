<?php
declare(strict_types=1);

namespace App\Helper\Options;

use App\Helper\OptionsInterface;

class Category implements OptionsInterface
{
    /**
     * @param $request
     * @return array
     */
    function optionArray($request): array
    {
        return [
            'category_name' => $request->category_name,
            'category_active' => $request->category_active,
            'category_parent' => $request->category_parent
        ];
    }
}

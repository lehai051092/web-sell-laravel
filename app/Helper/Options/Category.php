<?php
declare(strict_types=1);

namespace App\Helper\Options;

use App\Helper\OptionsAbstract;

class Category extends OptionsAbstract
{
    /**
     * @param $request
     * @return array
     */
    function optionArray($request): array
    {
        return [
            'category_name' => $request->category_name,
            'category_status' => $request->category_status,
            'category_parent' => $request->category_parent
        ];
    }
}

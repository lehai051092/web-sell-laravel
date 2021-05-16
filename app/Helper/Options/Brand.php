<?php
declare(strict_types=1);

namespace App\Helper\Options;

use App\Helper\OptionsAbstract;

class Brand extends OptionsAbstract
{
    /**
     * @param $request
     * @return array
     */
    function optionArray($request): array
    {
        return [
            'brand_name' => $request->brand_name,
            'brand_status' => $request->brand_status
        ];
    }
}

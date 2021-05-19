<?php
declare(strict_types=1);

namespace App\Helper\Options;

use App\Helper\OptionsAbstract;

class Menu extends OptionsAbstract
{
    /**
     * @param $request
     * @return array
     */
    function optionArray($request): array
    {
        return [
            'menu_name' => $request->menu_name,
            'menu_parent_id' => $request->menu_parent_id,
            'menu_status' => $request->menu_status
        ];
    }
}

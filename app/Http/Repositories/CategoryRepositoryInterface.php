<?php
declare(strict_types=1);

namespace App\Http\Repositories;

interface CategoryRepositoryInterface {
    /**
     * @return mixed
     */
    function getData();

    /**
     * @param $qty
     * @return mixed
     */
    function getDataPaginate($qty);

    /**
     * @param $options
     * @return mixed
     */
    function createNew($options);
}

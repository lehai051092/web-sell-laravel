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

    /**
     * @param $id
     * @return mixed
     */
    function findById($id);

    /**
     * @param $id
     * @param $options
     * @return mixed
     */
    function updateCategory($id, $options);

    /**
     * @param $id
     * @return mixed
     */
    function deleteById($id);
}

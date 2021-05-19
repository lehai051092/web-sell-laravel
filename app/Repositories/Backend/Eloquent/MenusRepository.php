<?php
declare(strict_types=1);

namespace App\Repositories\Backend\Eloquent;

use App\Model\Menu;
use App\Repositories\Backend\Interfaces\MenusRepositoryInterface;

class MenusRepository implements MenusRepositoryInterface
{
    /**
     * @var Menu
     */
    protected $menu;

    /**
     * MenusRepository constructor.
     * @param Menu $menu
     */
    public function __construct(
        Menu $menu
    ) {
        $this->menu = $menu;
    }

    /**
     * @return Menu[]|\Illuminate\Database\Eloquent\Collection\
     */
    public function getData()
    {
        return $this->menu->all();
    }

    /**
     * @param $options
     * @return mixed
     */
    public function create($options)
    {
        return $this->menu->create($options);
    }

    /**
     * @param $limit
     * @return mixed
     */
    public function getMenusPaginate($limit)
    {
        return $this->menu->paginate($limit);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->menu->findOrFail($id);
    }

    /**
     * @param $id
     * @param $options
     * @return mixed
     */
    public function update($id, $options)
    {
        return $this->findById($id)->update($options);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->findById($id)->delete();
    }
}

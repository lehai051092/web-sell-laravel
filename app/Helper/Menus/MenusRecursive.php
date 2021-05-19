<?php
declare(strict_types=1);

namespace App\Helper\Menus;

class MenusRecursive
{
    private $html = '';

    /**
     * @param $data
     * @param $id
     * @param $parentId
     * @param string $text
     * @param $currentMenuId
     * @return string
     */
    public function getMenusRecursive($data, $id, $parentId, $currentMenuId, $text = ''): string
    {
        foreach ($data as $key => $value) {
            if ($value['menu_parent_id'] == $id && $currentMenuId != $value['menu_id']) {
                if (isset($parentId) && $parentId == $value['menu_id']) {
                    $this->html .= "<option selected value='" . $value['menu_id'] . "'>" . $text . $value['menu_name'] . "</option>";
                } else {
                    $this->html .= "<option value='" . $value['menu_id'] . "'>" . $text . $value['menu_name'] . "</option>";
                }
                $this->getMenusRecursive($data, $value['menu_id'], $parentId, $currentMenuId, $text . '--');
            }
        }

        return $this->html;
    }

    /**
     * @param $data
     * @param $id
     * @param string $text
     * @return string
     */
    public function getMenusParent($data, $id, $text = ''): string
    {
        foreach ($data as $key => $value) {
            if ($value['menu_parent_id'] == $id) {
                $this->html .= "<p>" . $text . $value['menu_name'] . "</p>";
                $this->getMenusParent($data, $value['menu_id'], $text . '----');
            }
        }

        return $this->html;
    }
}

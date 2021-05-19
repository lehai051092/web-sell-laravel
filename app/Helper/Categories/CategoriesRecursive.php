<?php
declare(strict_types=1);

namespace App\Helper\Categories;

class CategoriesRecursive
{
    private $html = '';

    /**
     * @param $data
     * @param $id
     * @param $parentId
     * @param $currentCategoryId
     * @param string $text
     * @return string
     */
    public function getCategoriesRecursive($data, $id, $parentId, $currentCategoryId, $text = ''): string
    {
        foreach ($data as $key => $value) {
            if ($value['category_parent'] == $id && $currentCategoryId != $value['category_id']) {
                if (isset($parentId) && $parentId == $value['category_id']) {
                    $this->html .= "<option selected value='" . $value['category_id'] . "'>" . $text . $value['category_name'] . "</option>";
                } else {
                    $this->html .= "<option value='" . $value['category_id'] . "'>" . $text . $value['category_name'] . "</option>";
                }
                $this->getCategoriesRecursive($data, $value['category_id'], $parentId, $currentCategoryId, $text . '--');
            }
        }

        return $this->html;
    }

    public function getCategoriesParent($data, $id, $text = ''): string
    {
        foreach ($data as $key => $value) {
            if ($value['category_parent'] == $id) {
                $this->html .= "<p>" . $text . $value['category_name'] . "</p>";
                $this->getCategoriesParent($data, $value['category_id'], $text . '----');
            }
        }

        return $this->html;
    }
}

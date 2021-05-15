<?php
declare(strict_types=1);

namespace App\Helper\Categories;

class CategoriesRecursive
{
    private $htmlSelect = '';
    private $data;

    /**
     * CategoriesRecursive constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @param $id
     * @param $parentId
     * @param string $text
     * @return string
     */
    public function getCategoriesRecursive($id, $parentId, $text = ''): string
    {
        foreach ($this->data as $key => $value) {
            if ($value['category_parent'] == $id) {
                if (isset($parentId) && $parentId == $value['category_id']) {
                    $this->htmlSelect .= "<option selected value='" . $value['category_id'] . "'>" . $text . $value['category_name'] . "</option>";
                } else {
                    $this->htmlSelect .= "<option value='" . $value['category_id'] . "'>" . $text . $value['category_name'] . "</option>";
                }
                $this->getCategoriesRecursive($value['category_id'], $parentId, $text . '--');
            }
        }

        return $this->htmlSelect;
    }
}

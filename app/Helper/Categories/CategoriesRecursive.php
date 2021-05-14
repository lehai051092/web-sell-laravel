<?php
declare(strict_types=1);

namespace App\Helper\Categories;

class CategoriesRecursive
{
    private $htmlSelect;

    /**
     * @param $id
     * @param $parentId
     * @param string $text
     * @return string
     */
    public function getCategoryRecursive($id, $parentId, $text = ''): string
    {
        $data = '';

        foreach ($data as $key => $value) {
            if ($value['parent_id'] == $id) {
                if (isset($parentId) && $parentId === $value['id']) {
                    $this->htmlSelect .= "<option selected value='" . $value['id'] . "'>" . $text . $value['name'] . "</option>";
                } else {
                    $this->htmlSelect .= "<option value='" . $value['id'] . "'>" . $text . $value['name'] . "</option>";
                }
                $this->getCategoryRecursive($value['id'], $parentId, $text . '--');
            }
        }

        return $this->htmlSelect;
    }
}

<?php
declare(strict_types=1);

namespace App\Components\Category;

class CategoryRecursive {

    const ROOT_PARENT_CATEGORY = 0;

    /**
     * @var
     */
    private $data;

    /**
     * @var string
     */
    private $htmlSelect;

    /**
     * CategoryRecursive constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @param $id
     * @param string $text
     * @return string
     */
    public function getCategoryRecursive($id = self::ROOT_PARENT_CATEGORY, $text = ''): string
    {
        foreach ($this->data as $key => $value) {
            if ($value['parent_id'] == $id) {
                $this->htmlSelect .= "<option value='". $value['id'] . "'>" . $text . $value['name'] . "</option>";
                $this->getCategoryRecursive($value['id'], $text . '--');
            }
        }

        return $this->htmlSelect;
    }
}

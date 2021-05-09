<?php
declare(strict_types=1);

namespace App\Http\Services\Impl;

use App\Http\Repositories\CategoryRepositoryInterface;
use App\Http\Services\CategoryServiceInterface;

class CategoryServiceImpl implements CategoryServiceInterface
{
    /**
     * @var string
     */
    private $htmlSelect;


    /**
     * @var CategoryRepositoryInterface
     */
    protected $categoryRepository;

    /**
     * CategoryServiceImpl constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(
        CategoryRepositoryInterface $categoryRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->htmlSelect = '';
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->categoryRepository->getData();
    }

    /**
     * @param $request
     * @return mixed
     */
    function createCategory($request)
    {
        $options = [
            'name' => $request->category_name,
            'parent_id' => $request->category_parent_id,
            'slug' => str_slug($request->category_name)
        ];

        return $this->categoryRepository->createNew($options);
    }

    /**
     * @param $id
     * @param string $text
     * @return string
     */
    public function getCategoryRecursive($id, $text = ''): string
    {
        $data = $this->getData();

        foreach ($data as $key => $value) {
            if ($value['parent_id'] == $id) {
                $this->htmlSelect .= "<option value='" . $value['id'] . "'>" . $text . $value['name'] . "</option>";
                $this->getCategoryRecursive($value['id'], $text . '--');
            }
        }

        return $this->htmlSelect;
    }
}

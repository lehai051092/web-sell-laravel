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
    ) {
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
        $options = $this->arrayOptions($request);
        return $this->categoryRepository->createNew($options);
    }

    /**
     * @param $id
     * @param $parentId
     * @param string $text
     * @return string
     */
    public function getCategoryRecursive($id, $parentId, $text = ''): string
    {
        $data = $this->getData();

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

    /**
     * @param $qty
     * @return mixed
     */
    public function getCategoriesPaginate($qty)
    {
        return $this->categoryRepository->getDataPaginate($qty);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->categoryRepository->findById($id);
    }

    /**
     * @param $id
     * @param $request
     * @return mixed
     */
    public function updateCategory($id, $request)
    {
        $options = $this->arrayOptions($request);
        return $this->categoryRepository->updateCategory($id, $options);
    }

    /**
     * @param $request
     * @return array
     */
    protected function arrayOptions($request): array
    {
        return [
            'name' => $request->category_name,
            'parent_id' => $request->category_parent_id,
            'slug' => str_slug($request->category_name)
        ];
    }

    /**
     * @param $id
     * @return mixed
     */
    function deleteCategory($id)
    {
        return $this->categoryRepository->deleteById($id);
    }
}

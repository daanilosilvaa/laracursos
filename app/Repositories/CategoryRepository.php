<?php

namespace App\Repositories;

use App\Models\{
    Category
};
use App\Repositories\Contracts\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    protected $entity;

    public function __construct(Category $category)
    {
        $this->entity = $category;
    }
    public function getAllCategories()
    {
        return $this->entity->all();
    }

}

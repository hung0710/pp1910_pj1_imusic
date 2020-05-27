<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\CategoryInterface;
use App\Models\Category;

class CategoryRepository extends BaseRepository implements CategoryInterface
{
    public function getModel()
    {
        return Category::class;
    }
}
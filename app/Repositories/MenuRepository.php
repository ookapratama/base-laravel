<?php

namespace App\Repositories;

use App\Interfaces\Repositories\MenuRepositoryInterface;
use App\Models\Menu;

class MenuRepository extends BaseRepository implements MenuRepositoryInterface
{
    public function __construct(Menu $model)
    {
        parent::__construct($model);
    }

    public function getTree()
    {
        return $this->model->whereNull('parent_id')
            ->with('children')
            ->orderBy('order_no')
            ->get();
    }
}

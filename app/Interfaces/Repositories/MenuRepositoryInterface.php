<?php

namespace App\Interfaces\Repositories;

interface MenuRepositoryInterface extends BaseRepositoryInterface
{
    public function getTree();
}

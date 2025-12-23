<?php

namespace App\Repositories;

use App\Interfaces\Repositories\RoleRepositoryInterface;
use App\Models\Role;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    public function __construct(Role $model)
    {
        parent::__construct($model);
    }
}

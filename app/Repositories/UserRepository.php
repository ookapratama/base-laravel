<?php

namespace App\Repositories;

use App\Models\User;
use App\Interfaces\Repositories\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function paginated(array $request)
    {
        $perPage = $request['per_page'] ?? 5;
        $field = $request['sort_field'] ?? 'id';
        $sortOrder = $request['sort_order'] ?? 'desc';

        return $this->model->orderBy($field, $sortOrder)->paginate($perPage);
    }
}

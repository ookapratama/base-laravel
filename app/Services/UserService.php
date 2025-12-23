<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Log;

class UserService extends BaseService
{
    public function __construct(UserRepository $repository)
    {
        parent::__construct($repository);
    }

    public function store(array $data)
    {
        try {
            // business logic: standardizing name
            $data['name'] = strtoupper($data['name']);

            return $this->repository->create($data);
        } catch (\Throwable $e) {
            Log::error('[USER_STORE]', [
                'error' => $e->getMessage(),
                'data' => $data,
            ]);

            throw $e;
        }
    }

    public function update(int $id, array $data)
    {
        try {
            // business logic: standardizing name
            if (isset($data['name'])) {
                $data['name'] = strtoupper($data['name']);
            }

            // Remove password if not provided (empty string)
            if (empty($data['password'])) {
                unset($data['password']);
            }

            return $this->repository->update($id, $data);
        } catch (\Throwable $e) {
            Log::error('[USER_UPDATE]', [
                'id' => $id,
                'error' => $e->getMessage(),
                'data' => $data,
            ]);

            throw $e;
        }
    }
}

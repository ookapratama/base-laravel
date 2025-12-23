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
            // business logic
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
}

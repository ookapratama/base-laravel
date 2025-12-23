<?php

namespace App\Interfaces\Repositories;

interface UserRepositoryInterface
{
  public function paginated(array $params);

}
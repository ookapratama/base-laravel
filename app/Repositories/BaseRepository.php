<?php

namespace App\Repositories;


use App\Interfaces\Repositories\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;


abstract class BaseRepository implements BaseRepositoryInterface
{
  protected Model $model;

  public function __construct(Model $model)
  {
    $this->model = $model;
  }


  public function all()
  {
    return $this->model->all();
  }


  public function find(int $id)
  {
    return $this->model->findOrFail($id);
  }


  public function create(array $data)
  {
    return $this->model->create($data);
  }


  public function update(int $id, array $data)
  {
    $model = $this->find($id);
    $model->update($data);
    return $model;
  }


  public function delete(int $id)
  {
    return $this->find($id)->delete();
  }

  
}

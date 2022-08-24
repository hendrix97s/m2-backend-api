<?php

namespace App\Repositories;

class BaseRepository
{
  protected $model;

  public function __construct($model)
  {
    $this->model = new $model;
  }

  public function findById($id)
  {
    return $this->model->find($id);
  }

  public function findByUuid($uuid)
  {
    return $this->model->where('uuid', $uuid)->first();
  }

  public function findBySlug($slug)
  {
    return $this->model->where('slug', $slug)->first();
  }

  public function getIdByUuid($uuid)
  {
    return $this->model->where('uuid', $uuid)->first()->id ?? null; 
  }

  public function getAll()
  {
    return $this->model->all();
  }

  public function create(array $attributes)
  {
    return $this->model->create($attributes);
  }

  public function update($id, array $attributes)
  {
    $data = $this->model->find($id)->update($attributes);
    return $data ? $this->model->find($id) : false ;
  }

  public function delete($id)
  {
    $data = $this->model->find($id);
    return $data ? $this->model->find($id)->delete(): false;
  }
}
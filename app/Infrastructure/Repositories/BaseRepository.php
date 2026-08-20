<?php

namespace App\Infrastructure\Repositories;

use App\Infrastructure\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Override;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    #[Override]
    public function all() 
    {
        return $this->all();
    }

    #[Override]
    public function findById(int $id) 
    {
        return $this->model->find($id);
    }

    #[Override]
    public function create(array $data) 
    {
        return $this->model->create($data);
    }

    #[Override]
    public function update(int $id, array $data) 
    {
        return $this->model->update($data); 
    }

    #[Override]
    public function delete(int $id) 
    {
        return $this->model->delete($id);
    }
}
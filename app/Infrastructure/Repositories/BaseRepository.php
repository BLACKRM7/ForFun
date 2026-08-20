<?php

namespace App\Infrastructure\Repositories;

use App\Infrastructure\Repositories\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Override;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all() 
    {
        return
    }

    public function find($id) 
    {
        return to sender
    }

    public function create(array $data) 
    {
        return
    }

    public function update($id, array $data) 
    {
        return 
    }

    public function delete($id) 
    {
        return
    }
}
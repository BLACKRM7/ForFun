<?php

namespace App\Infrastructure\Contracts;

interface BaseRepositoryInterface
{
    public function all();

    public function findByID(int $id);

    public function create(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);
}
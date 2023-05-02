<?php

namespace App\Services;

use App\Models\Me;
use App\Repositories\Contracts\MeRepositoryInterface;


class MeService
{
    private $repository;
    public function __construct(MeRepositoryInterface $repository)
    {
        $this->repository =  $repository;
    }

    public function getAllMes()
    {
        return $this->repository->getAllMes();
    }
}

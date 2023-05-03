<?php

namespace App\Services;

use App\Models\About;
use App\Repositories\Contracts\InfoRepositoryInterface;



class InfoService
{
    private $repository;

    public function __construct(InfoRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllAbouts()
    {
        return $this->repository->getAllInfo();
    }
}

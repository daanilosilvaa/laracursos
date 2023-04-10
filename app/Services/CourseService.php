<?php

namespace App\Services;

use App\Models\Course;
use App\Repositories\Contracts\CourseRepositoryInterface;


class CourseService
{
    private $repository;
    public function __construct(CourseRepositoryInterface $repository)
    {
        $this->repository =  $repository;
    }

    public function getAllCourses()
    {
        return $this->repository->getAllCourses();
    }
}

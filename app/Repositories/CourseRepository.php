<?php

namespace App\Repositories;

use App\Models\{
    Course
};
use App\Repositories\Contracts\CourseRepositoryInterface;

class CourseRepository implements CourseRepositoryInterface
{
    protected $entity;

    public function __construct(Course $course)
    {
        $this->entity = $course;
    }
    public function getAllCourses()
    {

        return $this->entity->all();
    }

}

<?php

namespace App\Repositories;

use App\Models\{
    Course,
    Category,
};
use App\Repositories\Contracts\CourseRepositoryInterface;

class CourseRepository implements CourseRepositoryInterface
{
    protected $entity, $category;

    public function __construct(Course $course, Category $category)
    {
        $this->entity = $course;
        $this->category = $category;
    }
    public function getAllCourses()
    {
        $data['course'] = $this->entity->where('active', 'A')->paginate();
        $data['category'] = $this->category->where('active', 'A')->get();

        return $data;
    }

}

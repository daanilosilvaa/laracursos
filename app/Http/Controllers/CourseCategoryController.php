<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Course,
    Category,
};

class CourseCategoryController extends Controller
{

    protected $course, $category;

    public function __construct(Course $course, Category $category)
    {
        $this->course = $course;
        $this->category = $category;
    }


    public function categories($idCourse)
    {
        // $course = $this->course->with('categories')->find($idCourse);
        $course = $this->course->find($idCourse);
        if (!$course) {
           return redirect()->back();
        }

        $categories = $course->categories()->paginate();

       return view('courses.categories.categories', compact(['course', 'categories']));


    }
}

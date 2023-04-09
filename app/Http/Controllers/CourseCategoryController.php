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
       return view('courses.categories.categories', compact(['course']));
    }

    public function categoriesAvailable($idCourse)
    {
        if (!$course = $this->course->find($idCourse)) {
           return redirect()->back();
        }

        $categories = $course->categoriesAvailable();
        return view('courses.categories.available', compact(['course', 'categories']));
    }


    public function attachCourseCategories(Request $request, $idCourse)
    {
        if (!$course = $this->course->find($idCourse)) {
           return redirect()->back();
        }
        $course->categories()->attach($request->categories);

        if(!$request->categories || count($request->categories) == 0)
        {
            return redirect()->back()
            ->with('warning', 'É Necessário Escolher ao Menos uma Categoria!' );
        }
        $categories = $this->category->paginate();
        return view('courses.categories.categories', compact(['course', 'categories']));
    }



    public function detachCourseCategories($idCourse, $idCategory)
    {
        $course = $this->course->find($idCourse);
        $category = $this->category->find($idCategory);
        if (!$course  || !$category) {
            return redirect()->back();
        }

        $course->categories()->detach($category);
        $categories = $this->category->paginate();
        return view('courses.categories.categories', compact(['course','categories']));
    }



}

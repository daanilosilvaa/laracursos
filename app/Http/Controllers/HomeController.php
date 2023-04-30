<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Course,
    Category
};

class HomeController extends Controller
{

    private $course, $category;

    public function __construct(Course $course, Category $category)
    {
        $this->course = $course;
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = $this->course->latest()->paginate();
        return view('welcome', compact('courses'));
    }


}

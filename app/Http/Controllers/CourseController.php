<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Course,
    Category,
};

class CourseController extends Controller
{
    private $course, $category;

    public function __construct( Course $course, Category $category)
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
       return view('courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $this->course->create($request->all());

       return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       if(!$course = $this->course->find($id))
       {
        return redirect()->back();
       }

       return view('courses.show', \compact(['course']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!$course = $this->course->find($id)){
            return redirect()->back();
        }

        return view('courses.edit', \compact(['course']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(!$course = $this->course->find($id)){
            return redirect()->back();
        }
        $course->update($request->all());

        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

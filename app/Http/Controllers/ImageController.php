<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Image,
    Course,
};

class ImageController extends Controller
{
    private $image, $course;

    public function __construct(Image $image, Course $course)
    {
        $this->image = $image;
        $this->course = $course;
    }
    /**
     * Display a listing of the resource.
     */
    public function index($idCourse)
    {
        $course = $this->course->find($idCourse);
        $images = $this->image->where('course_id', $course->id)->paginate();

        return view('courses.images.index',[
            'course'=>$course,
            'images'=>$images,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($idCourse)
    {
        if(!$course = $this->course->find($idCourse))
        {
            return redirect()->back();
        }
       return view('courses.images.create', compact(['course']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $idCourse)
    {
        $data = $request->all();


        if(!$course = $this->course->find($idCourse))
        {
            return redirect()->back();
        }
        if ($request->hasFile('path') && $request->path->isValid()) {
            $data['path'] = $request->path->move("public/courses/photos/$course->name");

         }
         $data['course_id'] = $course->id;

         $this->image->create($data);

         return redirect()->route('course.images.index',$course->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, $idCourse)
    {
        $course = $this->course->find($idCourse);
        $image = $this->image->find($id);
        if(!$image || !$course){
            return redirect()->back();
        }
        $image->delete();
        return redirect()->route('course.images.index',$course->id);
    }
}

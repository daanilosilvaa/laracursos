<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreUpdateCategoryRequest;

class CategoryController extends Controller
{

    private $category;

    public function __construct (Category $category)
    {
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->category->latest()->paginate();

        return view('categories.index', \compact(['categories']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return \view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateCategoryRequest $request)
    {
        $this->category->create($request->all());

        return \redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       if (!$category =$this->category->find($id)) {
        return redirect()->back();
       }

       return view('categories.show',\compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!$category = $this->category->find($id))
        {
            return redirect->back();
        }

        return \view('categories.edit',\compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateCategoryRequest $request, string $id)
    {
        if (!$category = $this->category->find($id)) {
             return redirect()->back();
        }

        $category->update($request->all());

         return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

       if (!$category = $this->category->find($id)) {
        return  redirect()->back();
       }

       $category->delete();

       return redirect()->route('categories.index');
    }
}

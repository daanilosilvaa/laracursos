<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Http\Requests\StoreUpdateAboutRequest;

class AboutController extends Controller
{
   protected $about;

   public function __construct(About $about)
   {
    $this->about = $about;
   }


   public function index()
   {
    $abouts = $this->about->latest()->paginate();
    return view('abouts.index',compact('abouts'));
   }

   public function create()
   {
    return view('abouts.create');
   }

   public function store(StoreUpdateAboutRequest $request)
   {
    $this->about->create($request->all());
    return redirect()->route('abouts.index');
   }

   public function show($id)
   {
    if (!$about = $this->about->find($id)) {
        return redirect()->back();
    }

    return view('abouts.show', compact('about'));
   }

   public function edit($id)
   {
    if (!$about = $this->about->find($id)) {
        return redirect()->back();
    }
    return view('abouts.edit',compact('about'));
   }

   public function update(StoreUpdateAboutRequest $request, $id)
   {
        if (!$about = $this->about->find($id)) {
            return \redirect()->back();
        }
        $about->update($request->all());

        return \redirect()->route('abouts.index');
   }

   public function destroy($id)
   {
        if (!$about = $this->about->find($id)) {
            return redirect()->back();
        }
        $about->delete();

        return redirect()->route('abouts.index');
   }
}

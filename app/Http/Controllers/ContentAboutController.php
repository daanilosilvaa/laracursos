<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentAbout;
use App\Http\Requests\StoreUpdateAboutContentRequest;

class ContentAboutController extends Controller
{
    protected $contentAbout;

    public function __construct(ContentAbout $contentAbout)
    {
      $this->contentAbout = $contentAbout;
    }

    public function index()
    {
        $contentAbouts = $this->contentAbout->latest()->paginate();

        return view('abouts_content.index',compact('contentAbouts'));
    }

    public function create()
    {
            return view('abouts_content.create');
    }

    public function store(StoreUpdateAboutContentRequest $request)
    {

        $this->contentAbout->create($request->all());
        return redirect()->route('content_abouts.index');
    }

    public function show($id)
    {
        if (!$contentAbout = $this->contentAbout->find($id)) {
            return redirect()->back();
        }

        return view('abouts_content.show',compact('contentAbout'));
    }

    public function edit($id)
    {
        if (!$contentAbout = $this->contentAbout->find($id)) {
            return redirect()->back();
        }

        return view('abouts_content.edit',compact('contentAbout'));
    }

    public function update(StoreUpdateAboutContentRequest $request, $id)
    {
        if (!$contentAbout = $this->contentAbout->find($id)) {
            return redirect()->back();
        }

        $contentAbout->update($request->all());

        return redirect()->route('content_abouts.index');
    }

    public function destroy($id)
    {
        if (!$contentAbout = $this->contentAbout->find($id)) {
            return redirect()->back();
        }

        $contentAbout->delete();

        return redirect()->route('content_abouts.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\{StoreUpdateMeRequest};
use Illuminate\Support\Facades\Storage;

use App\Models\{
    Me,
};

class MeController extends Controller
{
    protected $me;

    public function __construct (Me $me)
    {
        $this->me = $me;
    }

    public function index()
    {
        $mes = $this->me->where('active', 'A')->paginate();

        return view('mes.index',compact('mes'));
    }

    public function create()
    {
        return view('mes.create');
    }

    public function store(StoreUpdateMeRequest $request)
    {
        $data = $request->all();


        if ($request->hasFile('image') && $request->image->isValid()) {
            $data['image'] = $request->image->store("public/me/{$request->name}/photos");

         }

         $this->me->create($data);

         return redirect()->route('mes.index');
    }

    public function show($id)
    {
        if (!$me = $this->me->find($id)) {
            return \redirect()->back();
        }

        return view('mes.show',compact('me'));
    }

    public function edit($id)
    {
        if (!$me = $this->me->find($id)) {
            return redirect()->back();
        }

        return view('mes.edit', compact('me'));
    }

    public function update(StoreUpdateMeRequest $request, $id)
    {
        if (!$me = $this->me->find($id)) {
            return redirect->back();
        }
        $data = $request->all();
        if ($request->hasFile('image') && $request->image->isValid()) {
            if(Storage::exists($me->image)){
                Storage::delete($me->image);

            }
            $data['image'] = $request->image->store("public/mes/{$request->name}/photos");
         }
        $me->update($data);

        return redirect()->route('mes.index');


    }

    public function destroy($id)
    {
        if(!$me = $this->me->find($id))
        {
            return redirect()->back();
        }

        $me->delete();

        return redirect()->route('mes.index');
    }
}

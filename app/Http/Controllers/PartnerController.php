<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\{StoreUpdatePartnerRequest};
use Illuminate\Support\Facades\Storage;

use App\Models\{
    Partner,
};

class PartnerController extends Controller
{
    private $partner;

    public function __construct(Partner $partner)
    {
        $this->partner = $partner;
    }

    public function index()
    {
        $partners = $this->partner->latest()->paginate();


        return view('partners.index',compact('partners'));
    }

    public function create()
    {
        return view('partners.create');
    }

    public function store(StoreUpdatePartnerRequest $request)
    {


        $data = $request->all();
        if ($request->hasFile('image') && $request->image->isValid()) {
            $data['image'] = $request->image->store("public/partners/photos");
        }


       $this->partner->create($data);

       return redirect()->route('partners.index');
    }

    public function show($id)
    {
        if (!$partner = $this->partner->find($id)) {
            return \redirect()->back();
        }

        return view('partners.show', compact('partner'));
    }

    public function edit($id)
    {
        if(!$partner = $this->partner->find($id))
        {
            return redirect()->back();
        }

        return view('partners.edit',compact('partner'));
    }

    public function update(StoreUpdatePartnerRequest $request, $id)
    {
        if (!$partner = $this->partner->find($id)) {
            return \redirect()->back();
        }
        $data = $request->all();

        if ($request->hasFile('image') && $request->image->isValid()) {
            if (Storage::exists($partner->image)) {
                Storage::delete($partner->image);
            }
            $data['image'] = $request->image->store("public/partners/photos");
        }


        $partner->update($data);

        return redirect()->route('partners.index');
    }

    public function destroy($id)
    {
        if (!$partner = $this->partner->find($id)) {
            return redirect()->back();
        }

        $partner->delete();

        return redirect()->route('partners.index');
    }


}

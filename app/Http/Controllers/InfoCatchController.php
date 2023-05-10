<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoCatch;
use App\Http\Requests\StoreUpdateInfoCastchRequest;

class InfoCatchController extends Controller
{

    private $infoCatch;

    public function __construct(InfoCatch $infoCatch)
    {
        $this->infoCatch = $infoCatch;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infocatchs = $this->infoCatch->latest()->paginate();


        return view('infocatch.index',compact('infocatchs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('infocatch.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateInfoCastchRequest $request)
    {
        $this->infoCatch->create($request->all());

        return redirect()->route('infocatchs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       if (!$infoCatch = $this->infoCatch->find($id)) {
            return redirect()->back();
       }

       return view('infocatch.show',compact('infoCatch'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!$infocatchs = $this->infoCatch->find($id)) {
            return redirect()->back();
       }

       return view('infocatch.edit',compact('infocatchs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateInfoCastchRequest $request, string $id)
    {
        if (!$infoCatch = $this->infoCatch->find($id)) {
            return redirect()->back();
       }

       $infoCatch->update($request->all());

       return redirect()->route('infocatchs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!$infoCatch = $this->infoCatch->find($id)) {
            return redirect()->back();
       }

       $infoCatch->delete();

       return redirect()->route('infocatchs.index');
    }
}

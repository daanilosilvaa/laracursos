<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{

    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = $this->client->latest()->paginate();
        return view('clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->client->create($request->all());

        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!$client = $this->client->find($id)) {
            return redirect()->back();
        }

        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!$client = $this->client->find($id)) {
            return \redirect()->back();
        }

        return view('clients.edit', \compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!$client = $this->client->find($id)) {
            return \redirect()->back();
        }

        $client->update($request->all());
        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!$client = $this->client->find($id)) {
            return redirect()->back();
        }

        $client->delete();

        return redirect()->route('clients.index');
    }
}

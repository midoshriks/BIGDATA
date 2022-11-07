<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\compane;
use Illuminate\Http\Request;

class DemoClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companes = compane::all();
        return view('dashboard.clients.demo', compact('companes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'phone_one' => 'required|max:11',
            'type_compane' => 'required',
            'type_location' => 'required|string',
        ]);

        $client = client::create([
            'first_name' => $request->full_name,
            'last_name' => $request->full_name,
            'full_name' => $request->full_name,
            'phone_one' => $request->phone_one,
            'type_compane' => $request->type_compane,
            'type_location' => $request->type_location,
            'qr_code' => 1,
        ]);

        // dd($client);

        // return redirect()->route('dashboard.levels.index');
        return redirect()->intended('http://www.egy-bella.com/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}

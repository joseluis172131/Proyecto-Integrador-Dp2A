<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Person::all();
        return view('people.index', compact('data'));
    }

    
    public function create()
    {
        return view('people.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonRequest $request)
    {
        $request->validate([
            'name'          => 'required',
            'lastname'      => 'required',
            'lastname2'     => 'required',
            'curp'          => 'required',
            'email'         => 'required',
            'rfc'           => 'required',
            'birthday'      => 'required',
            'sex'           => 'required'
        ]);

        Person::create([
            'name'      => $request->name,
            'lastname'  => $request->lastname,
            'lastname2' => $request->lastname2,
            'curp'      => $request->curp,
            'email'     => $request->email,
            'rfc'       => $request->rfc,
            'birthday'  => $request->birthday,
            'bloodType' => $request->bloodType,
            'sex'       => $request->sex
        ]);

        return redirect()->route('people.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonRequest  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonRequest $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
    }
}

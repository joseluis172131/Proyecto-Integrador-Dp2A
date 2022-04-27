<?php

namespace App\Http\Controllers;

use App\Models\Smartphone;
use App\Http\Requests\StoreSmartphoneRequest;
use App\Http\Requests\UpdateSmartphoneRequest;

class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSmartphoneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSmartphoneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Smartphone  $smartphone
     * @return \Illuminate\Http\Response
     */
    public function show(Smartphone $smartphone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Smartphone  $smartphone
     * @return \Illuminate\Http\Response
     */
    public function edit(Smartphone $smartphone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSmartphoneRequest  $request
     * @param  \App\Models\Smartphone  $smartphone
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSmartphoneRequest $request, Smartphone $smartphone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Smartphone  $smartphone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Smartphone $smartphone)
    {
        //
    }
}

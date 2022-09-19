<?php

namespace App\Http\Controllers;

use App\Models\Ski;
use App\Http\Requests\StoreSkiRequest;
use App\Http\Requests\UpdateSkiRequest;

class SkiController extends Controller
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
     * @param  \App\Http\Requests\StoreSkiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ski  $ski
     * @return \Illuminate\Http\Response
     */
    public function show(Ski $ski)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ski  $ski
     * @return \Illuminate\Http\Response
     */
    public function edit(Ski $ski)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSkiRequest  $request
     * @param  \App\Models\Ski  $ski
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkiRequest $request, Ski $ski)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ski  $ski
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ski $ski)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\SKI;
use App\Http\Requests\StoreSKIRequest;
use App\Http\Requests\UpdateSKIRequest;

class SKIController extends Controller
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
     * @param  \App\Http\Requests\StoreSKIRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSKIRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SKI  $sKI
     * @return \Illuminate\Http\Response
     */
    public function show(SKI $sKI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SKI  $sKI
     * @return \Illuminate\Http\Response
     */
    public function edit(SKI $sKI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSKIRequest  $request
     * @param  \App\Models\SKI  $sKI
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSKIRequest $request, SKI $sKI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SKI  $sKI
     * @return \Illuminate\Http\Response
     */
    public function destroy(SKI $sKI)
    {
        //
    }
}

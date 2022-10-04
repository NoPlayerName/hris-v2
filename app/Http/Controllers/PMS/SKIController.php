<?php

namespace App\Http\Controllers\PMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkiTemplateRequest;
use App\Http\Requests\UpdateSkiTemplateRequest;
use App\Models\SkiSk;
use App\Models\SkiTemplate;
use App\Models\SkiTugas;
use GuzzleHttp\Psr7\Request;

class SKIController extends Controller
{
    public function index()
    {
        return view('pms.ski.index');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSkiTemplateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkiTemplateRequest $request)
    {
        SkiTemplate::create([
            'category' => $request['category']
        ]);
        return redirect(route('pms.ski.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ski  $ski
     * @return \Illuminate\Http\Response
     */
    public function show(SkiTemplate $ski)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkiTemplate  $ski
     * @return \Illuminate\Http\Response
     */
    public function edit(SkiTemplate $ski)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSkiTemplateRequest  $request
     * @param  \App\Models\SkiTemplate  $ski
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkiTemplateRequest $request, SkiTemplate $ski)
    {
        SkiTemplate::where('id_ref_ski', $ski->id_ref_ski)
         ->update(['category' => $request['category']]);
        return redirect(route('pms.ski.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkiTemplate  $ski
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkiTemplate $ski)
    {
        //
    }

    public function ski_new()
    {
        return view('pms.ski.ski_new', [
            'tugas' => SkiTugas::all(),
            'SasaranKerjaIndividu' => SkiSk::all()
        ]);
    }
}

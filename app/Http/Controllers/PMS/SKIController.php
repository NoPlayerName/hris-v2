<?php

namespace App\Http\Controllers\PMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkiRequest;
use App\Http\Requests\UpdateSkiRequest;
use App\Models\Ski;
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
   * @param  \App\Http\Requests\StoreSkiRequest  $request
   * @return \Illuminate\Http\Response
   */
    public function store(StoreSkiRequest $request)
    {
        Ski::create([
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
        Ski::where('id_ref_ski', $ski->id_ref_ski)
        ->update(['category' => $request['category']]);
        return redirect(route('pms.ski.index'));
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

    public function ski_new()
    {
        return view('pms.ski.ski_new');
    }
}

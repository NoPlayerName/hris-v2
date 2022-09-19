<?php

namespace App\Http\Controllers;

use App\Models\SkiTugas;
use App\Http\Requests\StoreSkiTugasRequest;
use App\Http\Requests\UpdateSkiTugasRequest;

class SKITugasController extends Controller
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
     * @param  \App\Http\Requests\StoreSKITugasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkiTugasRequest $request)
    {
        $tugas = $request['tugas'];
        $id_ref_ski = $request['id_ref_ski'];

        SkiTugas::create([
            'id_ref_ski' => $id_ref_ski,
            'tugas' => $tugas,
            'created_at' => date('Ymd')
        ]);

        return redirect(route('pms.ski.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkiTugas  $sKITugas
     * @return \Illuminate\Http\Response
     */
    public function show(SkiTugas $SkiTugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkiTugas  $sKITugas
     * @return \Illuminate\Http\Response
     */
    public function edit(SkiTugas $SkiTugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSkiTugasRequest  $request
     * @param  \App\Models\SkiTugas  $sKITugas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkiTugasRequest $request, SkiTugas $SKITugas)
    {
        SKITugas::where('id_ref_ski_tugas', $SKITugas->id_ref_ski_tugas)
        ->update(['tugas' => $request->tugas]);
        return redirect(route('pms.ski.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SKITugas  $sKITugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkiTugas $SKITugas)
    {
        SkiTugas::destroy($SKITugas->id_ref_ski_tugas);

        return redirect(route('pms.ski.index'));
    }
}

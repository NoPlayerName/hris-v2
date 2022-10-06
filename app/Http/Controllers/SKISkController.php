<?php

namespace App\Http\Controllers;

use App\Models\SkiSk;
use App\Http\Requests\StoreSkiSkRequest;
use App\Http\Requests\UpdateSkiSkRequest;

class SkiSkController extends Controller
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
     * @param  \App\Http\Requests\StoreSkiSkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkiSkRequest $request)
    {
        // $tugas = $request['tugas'];
        // $id_ref_ski = $request['id_ref_ski'];

        SkiSk::create([

            'id_ref_ski' => 1,
            'id_kelompok_sk' => $request['grup'],
            'sasaran_kerja' => $request['sasaran_kerja'],
            'bobot' => $request['bobot'],
            'kriteria_pengukuran' => $request['kriteria'],
            'target' => $request['target'],
            'batas_waktu' => $request['batas_waktu'],
            'rencana_tindakan' => $request['rencana_tindakan'],
            'sequence' => 1,
        ]);

        return redirect(route('pms.ski.ski_new'))->with('successSki', 'Sasaran Kerja Individu berhasil di tambahkan!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkiSk  $skiSk
     * @return \Illuminate\Http\Response
     */
    public function show(SkiSk $skiSk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkiSk  $skiSk
     * @return \Illuminate\Http\Response
     */
    public function edit(SkiSk $skiSk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSkiSkRequest  $request
     * @param  \App\Models\SkiSk  $skiSk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkiSkRequest $request, SkiSk $skiSk)
    {
        SkiSk::where('id_ref_ski', $skiSk->id_ref_ski)
               ->update([
            'id_ref_ski' => $request['id_ref_ski'],
            'id_kelompok_sk' => $request['id_kelompok_sk'],
            'sasaran_kerja' => $request['sasaran_kerja'],
            'bobot' => $request['bobot'],
            'kriteria_pengukuran' => $request['kriteria_pengukuran'],
            'target' => $request['target'],
            'batas_waktu' => $request['batas_waktu'],
            'rencana_tindakan' => $request['rencana_tindakan'],
            'sequence' => $request['sequence'],]);
        return redirect(route('pms.ski.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkiSk  $skiSk
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkiSk $skiSk, $id_ref_ski_sk)
    {
        SkiSk::destroy($id_ref_ski_sk);

        return redirect(route('pms.ski.ski_new'));
    }
}

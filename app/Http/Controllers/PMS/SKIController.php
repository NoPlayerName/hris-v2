<?php

namespace App\Http\Controllers\PMS;

use App\Models\SkiSk;
use App\Models\SkiTugas;
use App\Models\KelompokSK;
use App\Models\SkiTemplate;
use GuzzleHttp\Psr7\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkiTemplateRequest;
use App\Http\Requests\UpdateSkiTemplateRequest;
use Carbon\Carbon;

class SKIController extends Controller
{
    public function index()
    {
        return view('pms.ski.index', [
            'jabatan' => SkiTemplate::all()
        ]);
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
        if ($request['jabatan'] == 1) {
            $data = [
                'id_ref_ski' => $request['jabatan'],
                'category' => 'Staff',
                'kode_jabatan' => '01',
                'version' =>Carbon::now('Asia/Jakarta'),
                'created_at' => Carbon::now('Asia/Jakarta')

            ];
        }
        if ($request['jabatan'] == 2) {
            $data = [
                'id_ref_ski' => $request['jabatan'],
                'category' => 'Supervisior',
                'kode_jabatan' => '02',
                'version' => Carbon::now('Asia/Jakarta'),
                'created_at' => Carbon::now('Asia/Jakarta')

            ];
        }
        if ($request['jabatan'] == 3) {
            $data = [
                'id_ref_ski' => $request['jabatan'],
                'category' => 'Section Head',
                'kode_jabatan' => '03',
                'version' => Carbon::now('Asia/Jakarta'),
                'created_at' => Carbon::now('Asia/Jakarta')

            ];
        }

        SkiTemplate::create($data);
        // $id =  SkiTemplate::all()->latest();
        // dd($id->id_ref_ski);
        return redirect('pms/ski/ski_new/' . $request['jabatan']);
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
            'SasaranKerjaIndividu' => SkiSk::all(),
            'kelompok' => KelompokSK::all()
        ]);
    }
}

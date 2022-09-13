<?php

namespace App\Http\Controllers\PMS;

use App\Http\Controllers\Controller;
use App\Models\Ski_tugas;
use GuzzleHttp\Psr7\Request;

class SKIController extends Controller
{
    public function index()
    {
        return view('pms.ski.index');
    }

    // public function store(Request $request)
    // {
    //     $tugas = $request['tugas'];
    //     $id_ref_ski = $request['id_ref_ski'];

    //     Ski_tugas::create([
    //         'id_ref_ski' => $id_ref_ski,
    //         'tugas' => $tugas,
    //         'created_at' => date('Ymd')
    //     ]);

    //     return redirect(route('pms.ski.index'));
    // }
}

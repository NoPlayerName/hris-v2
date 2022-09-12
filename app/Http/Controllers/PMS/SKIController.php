<?php

namespace App\Http\Controllers\PMS;

use App\Http\Controllers\Controller;
use App\Models\SKI;
use GuzzleHttp\Psr7\Request;

class SKIController extends Controller
{
    public function index()
    {
        return view('pms.ski.index');
    }

    public function tugas_ski(Request $request)
    {
    }
}

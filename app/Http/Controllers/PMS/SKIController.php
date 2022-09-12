<?php

namespace App\Http\Controllers\PMS;

use App\Http\Controllers\Controller;
use App\Models\SKI;

class SKIController extends Controller
{
    public function index()
    {
        return view('pms.ski.index');
    }
}

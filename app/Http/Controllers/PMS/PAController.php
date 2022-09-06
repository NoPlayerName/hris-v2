<?php

namespace App\Http\Controllers\PMS;

use App\Http\Controllers\Controller;

class PAController extends Controller
{
    public function index()
    {
        return view('pms.ski.index');
    }
}

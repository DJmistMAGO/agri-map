<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoilParamController extends Controller
{
    public function index()
    {
        return view('modules.soil-param.index');
    }

    public function create()
    {
        return view('modules.soil-param.create');
    }
}

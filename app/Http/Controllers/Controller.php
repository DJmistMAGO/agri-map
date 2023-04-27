<?php

namespace App\Http\Controllers;

use App\Models\SoilParam;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $params = SoilParam::all();
        $polygonCoords = $params->pluck('polygon')->toArray();


        return view('landing_page.home', compact('params', 'polygonCoords'));
    }
}

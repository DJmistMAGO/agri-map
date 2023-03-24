<?php

namespace App\Http\Controllers;

use App\Models\SoilParam;
use Illuminate\Http\Request;

class SoilParamController extends Controller
{
    public function index()
    {
        $params = SoilParam::all();
        return view('modules.soil-param.index', compact('params'));
    }

    public function create()
    {
        $landtype = ['Highland', 'Lowland', 'Coastal'];
        $soiltype = ['Sand', 'Silt', 'Clay', 'Loam'];
        $soil_moisture = [
            'Less than 20% of Normal',
            '20% to 50% of Normal',
            '50% to 70% of Normal',
            '70% to 100% of Normal',
        ];
        $soil_ph = [
            '(pH < 5.2) Very Acidic',
            '(pH 5.2 to 6.0) Acidic',
            '(pH 6.0 to 6.5) Sligthly Acidic',
            '(pH 6.5 to 7.0) Nearly Acidic',
            '(pH 7.0 to 7.5) Slightly Alkaline',
            '(pH 7.5 to 14) Alkaline to Very Alkaline',
        ];

        return view('modules.soil-param.create', compact('landtype', 'soiltype', 'soil_moisture', 'soil_ph'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'latitude' => 'required',
            'longitude' => 'required',
            'land_type' => 'required',
            'soil_type' => 'required',
            'soil_moisture' => 'required',
            'soil_temperature' => 'required',
            'soil_ph' => 'required',
        ]);

        // dd($request->all());

        $soilparam = SoilParam::create([
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'land_type' => $request->land_type,
            'soil_type' => $request->soil_type,
            'soil_moisture' => $request->soil_moisture,
            'soil_temperature' => $request->soil_temperature,
            'soil_ph' => $request->soil_ph,
        ]);


        return redirect('/soil-param')->with('success', 'Soil Parameter saved!');
    }
}

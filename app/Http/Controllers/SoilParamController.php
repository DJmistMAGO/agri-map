<?php

namespace App\Http\Controllers;

use App\Models\SoilParam;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

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
        $soiltype = ['Macabare Sandy Loan', 'Beach Sand', 'Bulusan Sandy Loam', 'Bascaran Sandy Loam', 'Ubay Clay Loam', 'Silay Fine Sandy Loam'];
        $soil_moisture = [
            '<15% = Very Dry ',
            '15-20% = Dry',
            '20-25% = Moist',
            '25-30% = Wet',
            '>30% = Very Wet',
        ];
        $soil_ph = [
            '<4.5 = Extremely Acidic',
            '4.6 - 5.0 = Very Strongly Acidic',
            '5.1 - 5.5 = Strongly Acidic',
            '5.6 - 6.0 = Moderately and Slightly Acidic',
            '>6.8 = Nearly Neutral to Extremely Alkaline',
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

    public function show(SoilParam $soilParam)
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

        // dd($soilParam);

        return view('modules.soil-param.edit', compact('landtype', 'soiltype', 'soil_moisture', 'soil_ph', 'soilParam'));
    }

    public function edit(SoilParam $soilParam)
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

        // dd($soilParam);

        return view('modules.soil-param.edit', compact('landtype', 'soiltype', 'soil_moisture', 'soil_ph', 'soilParam'));
    }

    public function update(Request $request, SoilParam $soilParam)
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

        $soilParam->update([
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'land_type' => $request->land_type,
            'soil_type' => $request->soil_type,
            'soil_moisture' => $request->soil_moisture,
            'soil_temperature' => $request->soil_temperature,
            'soil_ph' => $request->soil_ph,
        ]);

        return redirect('/soil-param')->with('success', 'Soil Parameter updated!');
    }
}

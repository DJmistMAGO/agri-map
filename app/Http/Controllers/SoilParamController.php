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
        $landtype = [
            'Highland',
            'Lowland',
            'Coastal'
        ];
        $soiltype = [
            'Macabare Sandy Loam',
            'Beach Sand',
            'Bulusan Sandy Loam',
            'Bascaran Sandy Loam',
            'Ubay Clay Loam',
            'Silay Fine Sandy Loam'
        ];
        $soil_moisture = [
            '<15% = Very Dry',
            '15-20% = Dry',
            '20-25% = Moderate',
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
            'polygon' => ['required', 'unique:soil_params'],
            'location' => 'required',
            'land_type' => 'required',
            'soil_type' => 'required',
            'soil_moisture' => 'required',
            'soil_temperature' => 'required',
            'soil_ph' => 'required',
        ]);

        // dd($request->all());

        $soilparam = SoilParam::create([
            'polygon' => $request->polygon,
            'location' => $request->location,
            'land_type' => $request->land_type,
            'soil_type' => $request->soil_type,
            'soil_moisture' => $request->soil_moisture,
            'soil_temperature' => $request->soil_temperature,
            'soil_ph' => $request->soil_ph,
        ]);


        return redirect('/soil-param')->with('success', 'Soil Parameter saved!');
    }

    // public function show(SoilParam $soilParam)
    // {
    //     $landtype = [
    //         'Highland',
    //         'Lowland',
    //         'Coastal'
    //     ];
    //     $soiltype = [
    //         'Macabare Sandy Loam',
    //         'Beach Sand',
    //         'Bulusan Sandy Loam',
    //         'Bascaran Sandy Loam',
    //         'Ubay Clay Loam',
    //         'Silay Fine Sandy Loam'
    //     ];
    //     $soil_moisture = [
    //         '<15% = Very Dry',
    //         '15-20% = Dry',
    //         '20-25% = Moderate',
    //         '25-30% = Wet',
    //         '>30% = Very Wet',
    //     ];
    //     $soil_ph = [
    //         '<4.5 = Extremely Acidic',
    //         '4.6 - 5.0 = Very Strongly Acidic',
    //         '5.1 - 5.5 = Strongly Acidic',
    //         '5.6 - 6.0 = Moderately and Slightly Acidic',
    //         '>6.8 = Nearly Neutral to Extremely Alkaline',
    //     ];

    //     return view('modules.soil-param.edit', compact('landtype', 'soiltype', 'soil_moisture', 'soil_ph', 'soilParam'));
    // }

    public function edit(SoilParam $soilParam)
    {
        $landtype = [
            'Highland',
            'Lowland',
            'Coastal'
        ];
        $soiltype = [
            'Macabare Sandy Loam',
            'Beach Sand',
            'Bulusan Sandy Loam',
            'Bascaran Sandy Loam',
            'Ubay Clay Loam',
            'Silay Fine Sandy Loam'
        ];
        $soil_moisture = [
            '<15% = Very Dry',
            '15-20% = Dry',
            '20-25% = Moderate',
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

        return view('modules.soil-param.edit', compact('landtype', 'soiltype', 'soil_moisture', 'soil_ph', 'soilParam'));
    }

    public function update(Request $request, SoilParam $soilParam)
    {
        $request->validate([
            'polygon' => ['required', 'unique:soil_params'],
            'location' => 'required',
            'land_type' => 'required',
            'soil_type' => 'required',
            'soil_moisture' => 'required',
            'soil_temperature' => 'required',
            'soil_ph' => 'required',
        ]);

        $soilParam->update([
            'polygon' => $request->polygon,
            'location' => $request->location,
            'land_type' => $request->land_type,
            'soil_type' => $request->soil_type,
            'soil_moisture' => $request->soil_moisture,
            'soil_temperature' => $request->soil_temperature,
            'soil_ph' => $request->soil_ph,
        ]);

        return redirect('/soil-param')->with('success', 'Soil Parameter updated!');
    }
}

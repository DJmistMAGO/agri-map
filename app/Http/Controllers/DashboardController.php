<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoilParam;
use Termwind\Components\Dd;

class DashboardController extends Controller
{
    public function index()
    {
        $very_dry = SoilParam::where('soil_moisture', '<15% = Very Dry')->count();
        $dry = SoilParam::where('soil_moisture', '15-20% = Dry')->count();
        $moist = SoilParam::where('soil_moisture', '20-25% = Moist')->count();
        $wet = SoilParam::where('soil_moisture', '25-30% = Wet')->count();
        $very_wet = SoilParam::where('soil_moisture', '>30% = Very Wet')->count();

        $macabare = SoilParam::where('soil_type', 'Macabare Sandy Loam')->count();
        $beach = SoilParam::where('soil_type', 'Beach Sand')->count();
        $bulusan = SoilParam::where('soil_type', 'Bulusan Sandy Loam')->count();
        $bascaran = SoilParam::where('soil_type', 'Bascaran Sandy Loam')->count();
        $ubay = SoilParam::where('soil_type', 'Ubay Clay Loam')->count();
        $silay = SoilParam::where('soil_type', 'Silay Fine Sandy Loam')->count();

        $phBlue = SoilParam::where('soil_ph', '>=', '6.8')->count();
        $phGreen = SoilParam::where('soil_ph', '>=', '5.6')->count();
        $phYellow = SoilParam::where('soil_ph', '>=', '5.1')->count();
        $phOrange = SoilParam::where('soil_ph', '>=', '4.6')->count();
        $phRed = SoilParam::where('soil_ph', '<=', '4.5')->count();

        return view('modules.dashboard', compact('very_dry', 'dry', 'moist', 'wet', 'very_wet', 'macabare', 'beach', 'bulusan', 'bascaran', 'ubay', 'silay', 'phBlue', 'phGreen', 'phYellow', 'phOrange', 'phRed'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoilParam;
use Termwind\Components\Dd;

class DashboardController extends Controller
{
    public function index()
    {

        $very_acidic = SoilParam::where('soil_ph', '(pH < 5.2) Very Acidic')->count();
        $acidic = SoilParam::where('soil_ph', '(pH 5.2 to 6.0) Acidic')->count();
        $slightly_acidic = SoilParam::where('soil_ph', '(pH 6.0 to 6.5) Sligthly Acidic')->count();
        $neutral = SoilParam::where('soil_ph', '(pH 6.5 to 7.0) Nearly Acidic')->count();
        $slightly_alkaline = SoilParam::where('soil_ph', '(pH 7.0 to 7.5) Slightly Alkaline')->count();
        $alkaline = SoilParam::where('soil_ph', '(pH 7.5 to 14) Alkaline to Very Alkaline')->count();

        $sand = SoilParam::where('soil_type', 'Sand')->count();
        $loam = SoilParam::where('soil_type', 'Loam')->count();
        $clay = SoilParam::where('soil_type', 'Clay')->count();
        $silt = SoilParam::where('soil_type', 'Silt')->count();

        return view('modules.dashboard', compact('very_acidic', 'acidic', 'slightly_acidic', 'neutral', 'slightly_alkaline', 'alkaline' , 'sand', 'loam', 'clay', 'silt'));
    }
}

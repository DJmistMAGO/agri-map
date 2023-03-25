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
        $soil_data = SoilParam::all();

        $features = array();
        foreach ($soil_data as $soil) {
            $feature = array(
                'type' => 'Feature',
                'geometry' => array(
                    'type' => 'Point',
                    'coordinates' => array($soil->longitude, $soil->latitude),
                ),
                'properties' => array(
                    'id' => $soil->id,
                    'land_type' => $soil->land_type,
                    'soil_type' => $soil->soil_type,
                    'soil_moisture' => $soil->soil_moisture,
                    'soil_temperature' => $soil->soil_temperature,
                    'soil_ph' => $soil->soil_ph,
                ),
            );
            array_push($features, $feature);
        }

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features,
        );



        return view('landing_page.home', ['geojson' => $geojson]);
    }

    public function params()
    {
        $soil_data = SoilParam::all();

        $features = array();
        foreach ($soil_data as $soil) {
            $feature = array(
                'type' => 'Feature',
                'geometry' => array(
                    'type' => 'Point',
                    'coordinates' => array($soil->longitude, $soil->latitude),
                ),
                'properties' => array(
                    'id' => $soil->id,
                    'land_type' => $soil->land_type,
                    'soil_type' => $soil->soil_type,
                    'soil_moisture' => $soil->soil_moisture,
                    'soil_temperature' => $soil->soil_temperature,
                    'soil_ph' => $soil->soil_ph,
                ),
            );
            array_push($features, $feature);
        }

        $geojson = array(
            'type' => 'FeatureCollection',
            'features' => $features,
        );

        return response()->json($geojson);
    }
}

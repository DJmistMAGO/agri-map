<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgriGallery;

class GalleryController extends Controller
{
    public function gallery()
    {
        $images = AgriGallery::all();
        return view('landing_page.gallery', compact('images'));
    }
}

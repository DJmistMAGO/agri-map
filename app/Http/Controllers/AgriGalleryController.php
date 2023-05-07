<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgriGallery;

class AgriGalleryController extends Controller
{
    public function index()
    {
        $gals = AgriGallery::all();

        return view('modules.gal.index', compact('gals'));
    }

    public function create()
    {
        return view('modules.gal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:5048'],
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);

        AgriGallery::create([
            'image' => $imageName,
        ]);

        return redirect()->route('agrigal.index')
            ->with('success', 'Imahge saved successfully.');
    }
}

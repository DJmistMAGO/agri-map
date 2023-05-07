<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(1);

        return view('modules.news.index', compact('news'));
    }

    public function create()
    {
        return view('modules.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:5048'],
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);

        News::create([
            'date' => $request->date,
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
            'image' => $imageName,
        ]);

        return redirect()->route('news.index')
            ->with('success', 'News created successfully.');
    }

    public function edit(News $news)
    {
        return view('modules.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'date' => 'required',
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:5048'],
        ]);

        $image = $request->file('image');

        if ($image) {
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
        } else {
            $imageName = $news->image;
        }

        $news->update([
            'date' => $request->date,
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
            'image' => $imageName,
        ]);

        return redirect()->route('news.index')
            ->with('success', 'News updated successfully.');
    }
}

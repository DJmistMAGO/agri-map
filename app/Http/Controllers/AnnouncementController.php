<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::latest()->paginate(5);

        return view('modules.announcement.index', compact('announcements'));
    }

    public function create()
    {
        return view('modules.announcement.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
        ]);

        Announcement::create([
            'date' => $request->date,
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
        ]);

        return redirect()->route('announcement.index')->with('success', 'Announcement created successfully.');
    }

    public function edit(Announcement $announcement)
    {
        return view('modules.announcement.edit', compact('announcement'));
    }

    public function update(Request $request, Announcement $announcement)
    {
        $request->validate([
            'date' => 'required',
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
        ]);

        $announcement->update([
            'date' => $request->date,
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
        ]);

        return redirect()->route('announcement.index')->with('success', 'Announcement updated successfully.');
    }
}

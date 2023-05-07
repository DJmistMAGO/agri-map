<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Announcement;

class PublicationController extends Controller
{
    public function pub()
    {
        $news = News::all();
        $announcements = Announcement::all();

        return view('landing_page.publication', compact('news', 'announcements'));
    }

    public function view(News $news)
    {
        return view('landing_page.pub-view', compact('news'));
    }
}

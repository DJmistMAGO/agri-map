<?php

namespace App\Http\Controllers;

use App\Models\SoilParam;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Announcement;
use App\Models\News;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
{
    $params = SoilParam::all();
    $polygonCoords = $params->pluck('polygon')->toArray();

    $news = new Collection(News::orderBy('date', 'desc')->get());
    $perPage = 3;
    $currentPage = Paginator::resolveCurrentPage('page');
    $currentItems = $news->slice(($currentPage - 1) * $perPage, $perPage);
    $news = new Paginator($currentItems, $perPage, $currentPage);

    $announcements = Announcement::all();

    return view('landing_page.home', compact('params', 'polygonCoords', 'news', 'announcements'));
}

    public function view(News $news)
    {
        return view('landing_page.pub-view', compact('news'));
    }

}

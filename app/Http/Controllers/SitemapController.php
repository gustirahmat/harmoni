<?php

namespace harmoniKarimunJawa\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return response()->view('sitemap.index')->header('Content-Type', 'text/xml');
    }
}

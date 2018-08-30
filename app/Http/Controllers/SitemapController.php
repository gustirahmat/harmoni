<?php

namespace harmoniKarimunJawa\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->view('sitemap.index')->header('Content-Type', 'text/xml');
    }
}

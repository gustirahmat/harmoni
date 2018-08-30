<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sitemap.xml', 'SitemapController@index');

Route::get('/tentang-harmoni-karimunjawa', function () {
    return view('about');
});

Route::get('/paket-wisata-karimunjawa/karimunjawa-2-hari-1-malam-express-bahari-jepara', function () {
    return view('paket-wisata.2h1m-express-jepara');
});

Route::get('/paket-wisata-karimunjawa/karimunjawa-2-hari-1-malam-ferry', function () {
    return view('paket-wisata.2h1m-ferry');
});

Route::get('/paket-wisata-karimunjawa/karimunjawa-2-hari-2-malam-pelni', function () {
    return view('paket-wisata.2h2m-pelni');
});

Route::get('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-express-bahari-jepara', function () {
    return view('paket-wisata.3h2m-express-jepara');
});

Route::get('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-express-bahari-semarang', function () {
    return view('paket-wisata.3h2m-express-semarang');
});

Route::get('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-kmc-kartini-semarang', function () {
    return view('paket-wisata.3h2m-kmc-kartini-semarang');
});

Route::get('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-ferry', function () {
    return view('paket-wisata.3h2m-ferry');
});

Route::get('/paket-wisata-karimunjawa/karimunjawa-4-hari-3-malam-express-bahari-jepara', function () {
    return view('paket-wisata.4h3m-express-jepara');
});

Route::get('/paket-wisata-karimunjawa/karimunjawa-4-hari-3-malam-ferry', function () {
    return view('paket-wisata.4h3m-ferry');
});

Route::get('/paket-wisata-karimunjawa/open-trip-harmoni-karimunjawa', function () {
    return view('paket-wisata.open-trip');
});

Route::get('/galeri-foto-video-harmoni-karimunjawa', function () {
    return view('gallery');
});

Route::get('/jadwal-kapal-karimunjawa', function () {
    return view('boat-schedule');
});

Route::get('/testimoni-harmoni-karimunjawa', function () {
    return view('testimony');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::resource('/admin/table', 'Admin\\TableGeneratorController');
Route::resource('admin/boat-schedules', 'Admin\\BoatScheduleController');
Route::resource('admin/open-trip-schedules', 'Admin\\OpenTripSchedulesController');
Route::resource('admin/testimony', 'Admin\\TestimonyController');
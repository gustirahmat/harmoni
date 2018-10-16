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

Auth::routes();

Route::namespace('Admin')->group(function () {
	// Controllers Within The "App\Http\Controllers\Admin" Namespace
	Route::get('home', 'AdministratorController@index')->name('admin');

	Route::prefix('admin')->group(function () {
		Route::get('/', 'AdministratorController@index')->name('admin');
		Route::resource('table', 'TableGeneratorController');
		Route::resource('boat-schedules', 'BoatScheduleController')->names([
			'create' => 'boat-schedules.create'
		]);;
		Route::resource('open-trip-schedules', 'OpenTripSchedulesController');
		Route::resource('testimony', 'TestimonyController');
		Route::resource('tour-package', 'TourPackageController');
	});
});

Route::namespace('Customer')->group(function () {
	// Controllers Within The "App\Http\Controllers\Customer" Namespace
	Route::get('/', 'CustomerController@CustomerHome')->name('home');
	Route::get('galeri-foto-video-harmoni-karimunjawa', 'CustomerController@CustomerGallery')->name('gallery');
	Route::get('jadwal-kapal-karimunjawa', 'CustomerController@CustomerBoatSchedule')->name('boat-schedule');
	Route::get('syarat-ketentuan-harmoni-karimunjawa', 'CustomerController@CustomerTnC')->name('tnc');
	Route::get('tentang-harmoni-karimunjawa', 'CustomerController@CustomerAbout')->name('about');
	Route::get('testimoni-harmoni-karimunjawa', 'CustomerController@CustomerTestimony')->name('testimony');

	Route::prefix('paket-wisata-karimunjawa')->group(function () {
		Route::get('/', 'TourPackageController@index');
		Route::get('karimunjawa-2-hari-1-malam-express-bahari-jepara', 'TourPackageController@Karjaw2H1MEBJ');
		Route::get('karimunjawa-2-hari-1-malam-ferry', 'TourPackageController@Karjaw2H1MFJ');
		Route::get('karimunjawa-2-hari-2-malam-pelni', 'TourPackageController@Karjaw2H2MPS');
		Route::get('karimunjawa-3-hari-2-malam-express-bahari-jepara', 'TourPackageController@Karjaw3H2MEBJ');
		Route::get('karimunjawa-3-hari-2-malam-express-bahari-semarang', 'TourPackageController@Karjaw3H2MEBS');
		Route::get('karimunjawa-3-hari-2-malam-kmc-kartini-semarang', 'TourPackageController@Karjaw3H2MKS');
		Route::get('karimunjawa-3-hari-2-malam-ferry', 'TourPackageController@Karjaw3H2MFJ');
		Route::get('karimunjawa-4-hari-3-malam-express-bahari-jepara', 'TourPackageController@Karjaw4H3MEBJ');
		Route::get('karimunjawa-4-hari-3-malam-ferry', 'TourPackageController@Karjaw4H3MFJ');
		Route::get('open-trip-harmoni-karimunjawa', 'TourPackageController@KarjawOT')->name('open-trip');
		Route::get('honeymoon-trip-harmoni-karimunjawa', 'TourPackageController@KarjawHoneymoon')->name('honeymoon-trip');
	});
});

Route::get('/sitemap.xml', 'SitemapController@index');
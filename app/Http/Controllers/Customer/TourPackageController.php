<?php

namespace harmoniKarimunJawa\Http\Controllers\Customer;

use harmoniKarimunJawa\Http\Controllers\Controller;
use Illuminate\View\View;

class TourPackageController extends Controller
{
    /**
     * Trip 2h1m-express-jepara
     *
     * @return View
     */
	public function Karjaw2H1MEBJ()
	{
		return view('paket-wisata.2h1m-express-jepara');
	}

    /**
     * Trip 2h1m-ferry
     *
     * @return View
     */
	public function Karjaw2H1MFJ()
	{
		return view('paket-wisata.2h1m-ferry');
	}

    /**
     * Trip 2h2m-pelni
     *
     * @return View
     */
	public function Karjaw2H2MPS()
	{
		return view('paket-wisata.2h2m-pelni');
	}

    /**
     * Trip 3h2m-express-jepara
     *
     * @return View
     */
	public function Karjaw3H2MEBJ()
	{
		return view('paket-wisata.3h2m-express-jepara');
	}

    /**
     * Trip 3h2m-express-semarang
     *
     * @return View
     */
	public function Karjaw3H2MEBS()
	{
		return view('paket-wisata.3h2m-express-semarang');
	}

    /**
     * Trip 3h2m-kmc-kartini-semarang
     *
     * @return View
     */
	public function Karjaw3H2MKS()
	{
		return view('paket-wisata.3h2m-kmc-kartini-semarang');
	}

    /**
     * Trip 3h2m-ferry
     *
     * @return View
     */
	public function Karjaw3H2MFJ()
	{
		return view('paket-wisata.3h2m-ferry');
	}

    /**
     * Trip 4h3m-express-jepara
     *
     * @return View
     */
	public function Karjaw4H3MEBJ()
	{
		return view('paket-wisata.4h3m-express-jepara');
	}

    /**
     * Trip 4h3m-ferry
     *
     * @return View
     */
	public function Karjaw4H3MFJ()
	{
		return view('paket-wisata.4h3m-ferry');
	}

    /**
     * Family Trip
     *
     * @return View
     */
	public function KarjawFT()
	{
		return view('paket-wisata.family-trip');
	}

    /**
     * Open Trip
     *
     * @return View
     */
	public function KarjawOT()
	{
		return view('paket-wisata.open-trip');
	}

    /**
     * Trip Honeymoon
     *
     * @return View
     */
	public function KarjawHoneymoon()
	{
		return view('paket-wisata.honeymoon-trip');
	}

    /**
     * Trip Pesawat
     *
     * @return View
     */
	public function KarjawbyPlane()
	{
		return view('paket-wisata.by-plane');
	}
}

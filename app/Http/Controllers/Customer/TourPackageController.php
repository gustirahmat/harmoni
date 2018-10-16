<?php

namespace harmoniKarimunJawa\Http\Controllers\Customer;

use Illuminate\Http\Request;
use harmoniKarimunJawa\Http\Controllers\Controller;

class TourPackageController extends Controller
{
	public function Karjaw2H1MEBJ()
	{
		return view('paket-wisata.2h1m-express-jepara');
	}

	public function Karjaw2H1MFJ()
	{
		return view('paket-wisata.2h1m-ferry');
	}

	public function Karjaw2H2MPS()
	{
		return view('paket-wisata.2h2m-pelni');
	}

	public function Karjaw3H2MEBJ()
	{
		return view('paket-wisata.3h2m-express-jepara');
	}

	public function Karjaw3H2MEBS()
	{
		return view('paket-wisata.3h2m-express-semarang');
	}

	public function Karjaw3H2MKS()
	{
		return view('paket-wisata.3h2m-kmc-kartini-semarang');
	}

	public function Karjaw3H2MFJ()
	{
		return view('paket-wisata.3h2m-ferry');
	}

	public function Karjaw4H3MEBJ()
	{
		return view('paket-wisata.4h3m-express-jepara');
	}

	public function Karjaw4H3MFJ()
	{
		return view('paket-wisata.4h3m-ferry');
	}

	public function KarjawOT()
	{
		return view('paket-wisata.open-trip');
	}

	public function KarjawHoneymoon()
	{
		return view('paket-wisata.honeymoon-trip');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('paket-wisata.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

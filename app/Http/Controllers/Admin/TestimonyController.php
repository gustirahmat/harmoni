<?php

namespace harmoniKarimunJawa\Http\Controllers\Admin;

use harmoniKarimunJawa\Http\Requests;
use harmoniKarimunJawa\Http\Controllers\Controller;

use harmoniKarimunJawa\Testimony;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $testimony = Testimony::where('nama_tamu', 'LIKE', "%$keyword%")
                ->orWhere('testimoni', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_trip', 'LIKE', "%$keyword%")
                ->orWhere('domisili_tamu', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $testimony = Testimony::latest()->paginate($perPage);
        }

        return view('admin.testimony.index', compact('testimony'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.testimony.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'nama_tamu' => 'required',
			'testimoni' => 'required',
			'tanggal_trip' => 'required',
			'domisili_tamu' => 'required'
		]);
        $requestData = $request->all();
        
        Testimony::create($requestData);

        return redirect('admin/testimony')->with('flash_message', 'Testimony added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $testimony = Testimony::findOrFail($id);

        return view('admin.testimony.show', compact('testimony'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $testimony = Testimony::findOrFail($id);

        return view('admin.testimony.edit', compact('testimony'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'nama_tamu' => 'required',
			'testimoni' => 'required',
			'tanggal_trip' => 'required',
			'domisili_tamu' => 'required'
		]);
        $requestData = $request->all();
        
        $testimony = Testimony::findOrFail($id);
        $testimony->update($requestData);

        return redirect('admin/testimony')->with('flash_message', 'Testimony updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Testimony::destroy($id);

        return redirect('admin/testimony')->with('flash_message', 'Testimony deleted!');
    }
}

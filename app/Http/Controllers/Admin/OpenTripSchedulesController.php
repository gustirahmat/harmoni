<?php

namespace harmoniKarimunJawa\Http\Controllers\Admin;

use harmoniKarimunJawa\Http\Requests;
use harmoniKarimunJawa\Http\Controllers\Controller;

use harmoniKarimunJawa\OpenTripSchedule;
use Illuminate\Http\Request;

class OpenTripSchedulesController extends Controller
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
            $opentripschedules = OpenTripSchedule::where('nama_trip', 'LIKE', "%$keyword%")
                ->orWhere('kuota_trip', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_trip', 'LIKE', "%$keyword%")
                ->orWhere('lama_trip', 'LIKE', "%$keyword%")
                ->orWhere('aktif', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $opentripschedules = OpenTripSchedule::latest()->paginate($perPage);
        }

        return view('admin.open-trip-schedules.index', compact('opentripschedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.open-trip-schedules.create');
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
			'nama_trip' => 'required',
			'kuota_trip' => 'required',
			'tanggal_trip' => 'required',
			'lama_trip' => 'required',
			'aktif' => 'required'
		]);
        $requestData = $request->all();
        
        OpenTripSchedule::create($requestData);

        return redirect('admin/open-trip-schedules')->with('flash_message', 'OpenTripSchedule added!');
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
        $opentripschedule = OpenTripSchedule::findOrFail($id);

        return view('admin.open-trip-schedules.show', compact('opentripschedule'));
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
        $opentripschedule = OpenTripSchedule::findOrFail($id);

        return view('admin.open-trip-schedules.edit', compact('opentripschedule'));
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
			'nama_trip' => 'required',
			'kuota_trip' => 'required',
			'tanggal_trip' => 'required',
			'lama_trip' => 'required',
			'aktif' => 'required'
		]);
        $requestData = $request->all();
        
        $opentripschedule = OpenTripSchedule::findOrFail($id);
        $opentripschedule->update($requestData);

        return redirect('admin/open-trip-schedules')->with('flash_message', 'OpenTripSchedule updated!');
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
        OpenTripSchedule::destroy($id);

        return redirect('admin/open-trip-schedules')->with('flash_message', 'OpenTripSchedule deleted!');
    }
}

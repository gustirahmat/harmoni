<?php

namespace harmoniKarimunJawa\Http\Controllers\Admin;

use harmoniKarimunJawa\Http\Requests;
use harmoniKarimunJawa\Http\Controllers\Controller;

use harmoniKarimunJawa\BoatSchedule;
use Illuminate\Http\Request;

class BoatScheduleController extends Controller
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
            $boatschedule = BoatSchedule::where('hari', 'LIKE', "%$keyword%")
                ->orWhere('nama_kapal', 'LIKE', "%$keyword%")
                ->orWhere('lokasi_pelabuhan', 'LIKE', "%$keyword%")
                ->orWhere('menuju_karimunjawa', 'LIKE', "%$keyword%")
                ->orWhere('dari_karimunjawa', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $boatschedule = BoatSchedule::latest()->paginate($perPage);
        }

        return view('admin.boat-schedule.index', compact('boatschedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.boat-schedule.create');
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
			'hari' => 'required',
			'nama_kapal' => 'required',
			'lokasi_pelabuhan' => 'required',
			'menuju_karimunjawa' => 'required',
			'dari_karimunjawa' => 'required'
		]);
        $requestData = $request->all();
        
        BoatSchedule::create($requestData);

        return redirect('admin/boat-schedule')->with('flash_message', 'Boat Schedule added!');
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
        $boatschedule = BoatSchedule::findOrFail($id);

        return view('admin.boat-schedule.show', compact('boatschedule'));
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
        $boatschedule = BoatSchedule::findOrFail($id);

        return view('admin.boat-schedule.edit', compact('boatschedule'));
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
			'hari' => 'required',
			'nama_kapal' => 'required',
			'lokasi_pelabuhan' => 'required',
			'menuju_karimunjawa' => 'required',
			'dari_karimunjawa' => 'required'
		]);
        $requestData = $request->all();
        
        $boatschedule = BoatSchedule::findOrFail($id);
        $boatschedule->update($requestData);

        return redirect('admin/boat-schedule')->with('flash_message', 'Boat Schedule updated!');
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
        BoatSchedule::destroy($id);

        return redirect('admin/boat-schedule')->with('flash_message', 'Boat Schedule deleted!');
    }
}

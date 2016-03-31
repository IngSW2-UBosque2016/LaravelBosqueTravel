<?php

namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Routes_Schedule;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Routes_ScheduleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $routes_schedule = Routes_Schedule::paginate(15);

        return view('API.routes_schedule.index', compact('routes_schedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('API.routes_schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['id_road' => 'required', 'id_bus' => 'required', 'id_ticket' => 'required', 'destination' => 'required', 'source' => 'required', 'date' => 'required', 'status' => 'required', 'name' => 'required', 'starting_date' => 'required', 'ending_date' => 'required', ]);

        Routes_Schedule::create($request->all());

        Session::flash('flash_message', 'Routes_Schedule added!');

        return redirect('API/routes_schedule');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $routes_schedule = Routes_Schedule::findOrFail($id);

        return view('API.routes_schedule.show', compact('routes_schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $routes_schedule = Routes_Schedule::findOrFail($id);

        return view('API.routes_schedule.edit', compact('routes_schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['id_road' => 'required', 'id_bus' => 'required', 'id_ticket' => 'required', 'destination' => 'required', 'source' => 'required', 'date' => 'required', 'status' => 'required', 'name' => 'required', 'starting_date' => 'required', 'ending_date' => 'required', ]);

        $routes_schedule = Routes_Schedule::findOrFail($id);
        $routes_schedule->update($request->all());

        Session::flash('flash_message', 'Routes_Schedule updated!');

        return redirect('API/routes_schedule');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Routes_Schedule::destroy($id);

        Session::flash('flash_message', 'Routes_Schedule deleted!');

        return redirect('API/routes_schedule');
    }

	
	

}

<?php

namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Stop;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class StopsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
          /**$stops = Stop::paginate(15);

        return view('API.stops.index', compact('stops'));
		  */
		
				return response()->json(Stop::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('API.stops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name_stop' => 'required', 'location' => 'required', ]);

        Stop::create($request->all());

        Session::flash('flash_message', 'Stop added!');

        return redirect('API/stops');
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
        $stop = Stop::findOrFail($id);

        return view('API.stops.show', compact('stop'));
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
        $stop = Stop::findOrFail($id);

        return view('API.stops.edit', compact('stop'));
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
        $this->validate($request, ['name_stop' => 'required', 'location' => 'required', ]);

        $stop = Stop::findOrFail($id);
        $stop->update($request->all());

        Session::flash('flash_message', 'Stop updated!');

        return redirect('API/stops');
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
        Stop::destroy($id);

        Session::flash('flash_message', 'Stop deleted!');

        return redirect('API/stops');
    }

}

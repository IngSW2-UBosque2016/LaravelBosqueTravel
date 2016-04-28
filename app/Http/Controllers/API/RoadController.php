<?php

namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Road;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class RoadController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       	return response()->json(Road::with('routesSchedules')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('API.road.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'route' => 'required', ]);

        Road::create($request->all());

        Session::flash('flash_message', 'Road added!');

        return redirect('API/road');
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
        $road = Road::findOrFail($id);

        return view('API.road.show', compact('road'));
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
        $road = Road::findOrFail($id);

        return view('API.road.edit', compact('road'));
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
        $this->validate($request, ['name' => 'required', 'route' => 'required', ]);

        $road = Road::findOrFail($id);
        $road->update($request->all());

        Session::flash('flash_message', 'Road updated!');

        return redirect('API/road');
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
        Road::destroy($id);

        Session::flash('flash_message', 'Road deleted!');

        return redirect('API/road');
    }

}

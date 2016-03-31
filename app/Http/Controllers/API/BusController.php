<?php

namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bus;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class BusController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
	
	 /**
  
   
        $bus = Bus::paginate(15);

        return view('API.bus.index', compact('bus'));
		
		  */
		
				return response()->json(Bus::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('API.bus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['id_drivers' => 'required', 'capacity' => 'required', 'actual_latitude' => 'required', 'actual longitude' => 'required', ]);

        Bus::create($request->all());

        Session::flash('flash_message', 'Bus added!');

        return redirect('API/bus');
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
        $bus = Bus::findOrFail($id);

        return view('API.bus.show', compact('bus'));
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
        $bus = Bus::findOrFail($id);

        return view('API.bus.edit', compact('bus'));
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
        $this->validate($request, ['id_drivers' => 'required', 'capacity' => 'required', 'actual_latitude' => 'required', 'actual longitude' => 'required', ]);

        $bus = Bus::findOrFail($id);
        $bus->update($request->all());

        Session::flash('flash_message', 'Bus updated!');

        return redirect('API/bus');
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
        Bus::destroy($id);

        Session::flash('flash_message', 'Bus deleted!');

        return redirect('API/bus');
    }

}

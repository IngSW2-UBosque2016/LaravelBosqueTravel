<?php

namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Reservation;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ReservationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $reservation = Reservation::paginate(15);

        return view('API.reservation.index', compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('API.reservation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['date' => 'required', ]);

        Reservation::create($request->all());

        Session::flash('flash_message', 'Reservation added!');

        return redirect('API/reservation');
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
        $reservation = Reservation::findOrFail($id);

        return view('API.reservation.show', compact('reservation'));
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
        $reservation = Reservation::findOrFail($id);

        return view('API.reservation.edit', compact('reservation'));
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
        $this->validate($request, ['date' => 'required', ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->update($request->all());

        Session::flash('flash_message', 'Reservation updated!');

        return redirect('API/reservation');
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
        Reservation::destroy($id);

        Session::flash('flash_message', 'Reservation deleted!');

        return redirect('API/reservation');
    }

}

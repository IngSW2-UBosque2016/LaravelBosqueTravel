<?php

namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ticket;
use App\Seller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class SellersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sellers = Seller::paginate(15);

        return view('API.sellers.index', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('API.sellers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
	 
	 
	  public function sellTicket(Request $request)
    {
       	$d = new Ticket;
		$d->fill($request->all());
		
		$d->save();
        Session::flash('flash_message', 'Ticket añadido!');

        return redirect('API/tickets');
    }
	
	
	
    public function store(Request $request)
    {
        $this->validate($request, ['name_seller' => 'required', 'last_name_seller' => 'required', 'password' => 'required', ]);

        Seller::create($request->all());

        Session::flash('flash_message', 'Seller added!');

        return redirect('API/sellers');
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
        $seller = Seller::findOrFail($id);

        return view('API.sellers.show', compact('seller'));
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
        $seller = Seller::findOrFail($id);

        return view('API.sellers.edit', compact('seller'));
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
        $this->validate($request, ['name_seller' => 'required', 'last_name_seller' => 'required', 'password' => 'required', ]);

        $seller = Seller::findOrFail($id);
        $seller->update($request->all());

        Session::flash('flash_message', 'Seller updated!');

        return redirect('API/sellers');
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
        Seller::destroy($id);

        Session::flash('flash_message', 'Seller deleted!');

        return redirect('API/sellers');
    }

}

<?php
namespace App\Http\Controllers\API;
use Response;
use Crypt;
use Illuminate\Contracts\Routing\ResponseFactory;
//use Illuminate\Http\Response;

use Endroid\QrCode\QrCode;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Ticket;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class TicketsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tickets = Ticket::paginate(15);

        return view('API.tickets.index', compact('tickets'));
    }



 public function ticketGeneration($id)
    {

   // $tickets = User::with('ticket')->find($id);
   // $tickets = Ticket::with('user')->get();
    $tickets = Ticket::with('user')->get();
        foreach ($tickets as $r) {
       $id_user = $r['id_user']; 
             if($id_user ==$id){ 
         $use_date = $r['updated_at'];
         if($use_date ==false){ 
            $id_ticket = $r['id_ticket']; 
            $id_user = $r['id_user'];
            $date = $r['created_at'].'';
            $format =array(":","/"," ","-");
            $dateWithFormat = str_replace($format, "_", $date);
			$total_code=$id_ticket.$id_user.$dateWithFormat;
			//return response()->json($total_code);

           //return $total_code;}
		
		   
//$code =$total_code;
$code = Crypt::encrypt($total_code);
$qrCode = new QrCode();
$qrCode->setText($code);
$image = $qrCode->get();
  $response = Response::make(
    $image,
    200
  );
 
  $response->header(
    'content-type',
    'image/jpeg'
  );
 
  return $response;
		   
		   
		}	  
    }

 }

  /**
$code = encrypt($total_code);
  
$qrCode = new QrCode();
$qrCode->setText($code);
$image = $qrCode->get();
  $response = Response::make(
    $image,
    200
  );
 
  $response->header(
    'content-type',
    'image/jpeg'
  );

return Redirect::route('/qrcode', $code);
        //&$ticket = Ticket::findOrFail($id);

  */
       		
			  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('API.tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['id_user' => 'required', 'id_seller' => 'required', 'id_reservation' => 'required', 'create_date' => 'required', 'expiration_date' => 'required', 'use_date' => 'required', ]);

        Ticket::create($request->all());

        Session::flash('flash_message', 'Ticket added!');

        return redirect('API/tickets');
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
        $ticket = Ticket::findOrFail($id);

        return view('API.tickets.show', compact('ticket'));
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
        $ticket = Ticket::findOrFail($id);

        return view('API.tickets.edit', compact('ticket'));
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
        $this->validate($request, ['id_user' => 'required', 'id_seller' => 'required', 'id_reservation' => 'required', 'create_date' => 'required', 'expiration_date' => 'required', 'use_date' => 'required', ]);

        $ticket = Ticket::findOrFail($id);
        $ticket->update($request->all());

        Session::flash('flash_message', 'Ticket updated!');

        return redirect('API/tickets');
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
        Ticket::destroy($id);

        Session::flash('flash_message', 'Ticket deleted!');

        return redirect('API/tickets');
    }

}

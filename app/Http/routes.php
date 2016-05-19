<?php
use Endroid\QrCode\QrCode;
use API\TicketsController;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/qr', function()
{
  return View::make('QR');
});


Route::get('/qrcode', function()
{


$code =1;
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
 
});



Route::get('/', function () {
    return view('welcome');
});
Route::get('/c/{q}', function ($p) {
    return Crypt::encrypt($p);
});
Route::get('/d/{q}', function ($p) {
    return Crypt::decrypt($p);
});


Route::resource('API/drivers', 'DriverController');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

 Route::get('/GenerarQR/{p}', 'API\\TicketsController@ticketGeneration');

 Route::get('/passanger/{p}/book/{b}', 'API\\ReservationController@Reservar');

Route::group(['middleware' => ['web']], function () {
    //
	
	Route::auth();

    Route::get('/home', 'HomeController@index');
	
	    Route::post('/sellTicket', 'API\\SellersController@sellTicket');
		
			    Route::resource('availability', 'API\\Routes_ScheduleController@availability');
	Route::resource('adminUsers/users', 'adminUsers\\UsersController');
	
	
		Route::resource('API/bus', 'API\\BusController');
		Route::resource('API/stops', 'API\\StopsController');
		Route::resource('API/reservation', 'API\\ReservationController');
		Route::resource('API/sellers', 'API\\SellersController');
		Route::resource('API/tickets', 'API\\TicketsController');
		Route::resource('API/sellers', 'API\\SellersController');
		
	   
		Route::resource('API/route_schedule', 'API\\Routes_ScheduleController');
		Route::resource('API/road', 'API\\RoadController');
});


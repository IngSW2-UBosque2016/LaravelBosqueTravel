<?php
use Endroid\QrCode\QrCode;
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
$name = Input::get('name');
$number = Input::get('phone_num');
//$code = base64_encode($name . $number);
//$code = "$name" . "$number";
$code = bcrypt('hola');
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

Route::group(['middleware' => ['web']], function () {
    //
	Route::auth();

    Route::get('/home', 'HomeController@index');
	Route::resource('adminUsers/users', 'adminUsers\\UsersController');
	
	
		Route::resource('API/bus', 'API\\BusController');
		Route::resource('API/stops', 'API\\StopsController');
		Route::resource('API/reservation', 'API\\ReservationController');
		Route::resource('API/sellers', 'API\\SellersController');
		Route::resource('API/tickets', 'API\\TicketsController');
		Route::resource('API/sellers', 'API\\SellersController');
		Route::resource('API/sellers', 'API\\SellersController');
	    Route::resource('API/route_schedule', 'API\\Route_ScheduleController');
		Route::resource('API/route_schedule', 'API\\Route_ScheduleController');
		Route::resource('API/route_schedule', 'API\\Route_ScheduleController');
		Route::resource('API/road', 'API\\RoadController');
});


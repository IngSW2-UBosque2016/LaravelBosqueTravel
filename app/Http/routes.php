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
/*$code = base64_encode($name . $number);*/
$code = "$name" . "$number";
$qrCode = new QrCode();
$qrCode->setText($code);
$image = $qrCode->get();
  $response = Response::make(
    $image,
    200
  );
 
  $response->header(
    'content-type',
    'image/png'
  );
 
  return $response;
 
});


Route::get('/', function () {
    return view('welcome');
});

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
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => ['web']], function () {
	Route::resource('adminUsers/users', 'adminUsers\\UsersController');
});
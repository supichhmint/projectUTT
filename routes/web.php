<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function()
{
	return View::make('index');
});
Route::get('/', function()
{
	return redirect('home');
});


Route::get('/login', function()
{
	return View::make('login');
});


Route::get('/addTrip', function()
{
	return View::make('/addtrip');
});
Route::get('/headlogo', function()
{
	return View::make('/headlogo');
});


Auth::routes();



Route::resource('/agency', 'showtripController');


Route::resource('/addtrip','addtripController');
Route::resource('/show','showtripController');
Route::resource('/showtrip','tripAgencyController'); 
Route::resource('/trip','tripController');
Route::post('/addtripround','addtriproundController@store');
Route::resource('/completetrip','comptelttripController');
Route::resource('/edittrip','addtripController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'UserController@register');

Route::get('/search/schedule', 'UserController@schedule');

Route::get('/search/index', 'UserController@index');

Route::get('/schedule/{id}','UserController@schedule');
Route::get('/search', 'UserController@search');
Route::get('/searchtrip', 'UserController@searchtrip');
Route::get('/agreement',function(){
	return view ('agreement');
});
Route::get('/loginagency',function(){
	return view ('loginagency');
});

Route::get('/loginas',function(){
	return view ('loginas');
});
Route::get('/logintourist',function(){
	return view ('logintourist');
});
Route::get('/profileuser',function(){
	return view ('profile_user');
});
Route::get('/profilesetting',function(){
	return view ('profile_setting');
});
Route::get('/regisag',function(){
	return view ('regis_agency');
});

Route::get('/regisuser',function(){
	return view ('regis_user');
});

Route::get('/booking',function(){
	return view ('booking');
});

Route::get('/profilebooking',function(){
	return view ('profile_booking');
});

Route::post ( '/searcht', function () {
	$q = Input::get ( 'q' );
	$user = DB::table('trips')
	->where ( 'trips_name', 'LIKE', '%' . $q . '%' )->paginate(10);;
	if (count ( $user ) > 0)
		return view ( 'tripuser_resultsearch' )->withDetails ( $user )->withQuery ( $q );
	else
		return view ( 'tripuser_resultsearch' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::get('/booking/{id}','UserController@booking');
Route::get('/charge', function () {
	return view ('omisecard');
});
Route::post('/charge','OmiseController@checkout');
Route::get('/card', function () {
	return view ('card');
});
Route::post('/card', 'OmiseController@checkout');
Route::get('/test', function () {
	return view ('1test');
});
Route::post('/test','OmiseController@checkout');
Route::get('/bookingsum', function () {
	return view ('bookingsum');
});
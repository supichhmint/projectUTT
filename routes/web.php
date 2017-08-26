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

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
});

Route::get('/app', function()
{
	return View::make('app');
});

Route::get('/addTrip', function()
{
	return View::make('/addtrip');
});
Route::get('/headlogo', function()
{
	return View::make('/headlogo');
});
Route::get('/dashboard', function()
{
	return view('/dashboard');
});

Auth::routes();
Route::get('/', function() {
	return redirect('home');
});

Route::get('/home', 'HomeController@index');
Route::resource('/agency', 'showtripController');

//Route::get('/addtripround', 'tripController@add_tripRound');

Route::resource('/addtrip','addtripController');
Route::resource('/show','showtripController');
Route::resource('/showtrip','tripAgencyController'); 
Route::resource('/trip','tripController');
Route::post('/addtripround','addtriproundController@store');
Route::resource('/completetrip','comptelttripController');
Route::resource('/edittrip','addtripController');

Route::get('/register', 'UserController@register');

Route::get('/search/schedule', 'UserController@schedule');

Route::get('/search/index', 'UserController@index');

Route::get('/schedule/{id}','UserController@schedule');
Route::get('/search', 'UserController@search');
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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

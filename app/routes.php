<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Homepage Routes

Route::get('/', array('as'=> 'home','uses' => 'HomeController@index'));
Route::get('home', array('uses' => 'HomeController@index'));
Route::get('edit_about', array('uses' => 'HomeController@editAbout'));
Route::get('edit_contact', array('uses' => 'HomeController@editContact'));

Route::get('etherpad', function()
{
   return View::make('Pad.etherpad');
});

Route::get('list_objects', function()
{
    return View::make('objects.index');
});

Route::get('/types', function()
{
	return View::make('home');
});



/**
 * Object Routes starts here
 */

Route::get('rental', array('uses' => 'ObjectController@rentalObject'));
Route::get('sale', array('uses' => 'ObjectController@sale'));
Route::get('list_objects', array('uses' => 'ObjectController@listObjects'));
Route::get('addnew', array('uses' => 'ObjectController@create'));
Route::post('addnew', array('uses' => 'ObjectController@store'));
Route::get('object/viewdetails/{id}', array('uses' => 'ObjectController@show'));
Route::get('forent', array('uses' => 'ObjectController@forent'));
Route::get('forsale', array('uses' => 'ObjectController@forsale'));

/**
 * login Routes Starts here
 */
Route::post('login', array('uses' => 'UserController@login'));
Route::get('logout', array('uses' => 'UserController@logout'));
Route::post('register', array('uses' => 'UserController@create'));


/**
 * Contact routes
 */

Route::get('/contact', 'ContactsController@index');
Route::post('/contact', 'ContactsController@handleFormPost');


Route::get('/single-family', function()
{
	return View::make('singlefam');
});

Route::get('/apartment-building', function()
{
	return View::make('apabuilding');
});

Route::get('/apartment', function()
{
	return View::make('apartment');
});

Route::get('/shop', function()
{
	return View::make('shop');
});

Route::get('/villa', function()
{
	return View::make('villa');
});

Route::get('/office', function()
{
	return View::make('office');
});


Route::get('/contactus', function()
{
	return View::make('contact');
});



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

Route::get('/', function()
{
	return View::make('home');
});

Route::get('etherpad', function()
{
   return View::make('Pad.etherpad');
});

Route::get('home/', function()
{
    return View::make('home');
});

Route::get('/types', function()
{
	return View::make('home');
});
Route::get('/forent', function()
{
	return View::make('rent');
});
Route::get('/forsale', function()
{
	return View::make('sale');
});
Route::get('/login', function()
{
	return View::make('login');
});
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

Route::get('/rent_prop_detail1', function()
{
	return View::make('rent_prop_detail1');
});
Route::get('rental', function()
{
	return View::make('Rent.home');
});
Route::get('/rent_prop_detail3', function()
{
	return View::make('rent_prop_detail3');
});
Route::get('/rent_prop_detail4', function()
{
	return View::make('rent_prop_detail4');
});
Route::get('/rent_prop_detail5', function()
{
	return View::make('rent_prop_detail5');
});
Route::get('/rent_prop_detail6', function()
{
	return View::make('rent_prop_detail6');
});
Route::get('/sale_prop_detail1', function()
{
	return View::make('sale_prop_detail1');
});
Route::get('/sale_prop_detail2', function()
{
	return View::make('sale_prop_detail2');
});
Route::get('/sale_prop_detail3', function()
{
	return View::make('sale_prop_detail3');
});
Route::get('/sale_prop_detail4', function()
{
	return View::make('sale_prop_detail4');
});
Route::get('/sale_prop_detail5', function()
{
	return View::make('sale_prop_detail5');
});
Route::get('/sale_prop_detail6', function()
{
	return View::make('sale_prop_detail6');
});

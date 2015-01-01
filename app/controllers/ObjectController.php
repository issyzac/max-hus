<?php

class ObjectController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $objects = Object::all();
        $objects->toarray();

        return View::make('objects.index', compact('objects'));

    }

    /**
     * Rental object homepage will be returned by
     * this function
     */
    public function rentalObject(){

        return View::make('Rent.home');

    }

    /**
     * Sold object homepage will be returned by
     * this function
     */
    public function sale(){

        return View::make('Rent.home');

    }


	/**
	 * Show the form for creating a new Object.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return View::make('objects.addnew');
	}


    /**
     * Function that is going to return a table of all
     * the objects in the database,
     * mostly will be used by the administrator
     *
     */
    public function listObjects(){

        $objects = Object::all();
        $objects->toarray();

        return View::make('objects.index', compact('objects'));

    }



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        $newObject = Object::create(array(
            'type' => Input::get('type'),
            'description' => Input::get('description'),
            'ImagesUrl' => 'noUrl',
            'Ac' => Input::get('Ac'),
            'acres_source' => Input::get('acres_source'),
            'appliances' => Input::get('appliances'),
            'disability_access' => Input::get('disability_access'),
            'floors' => Input::get('floors'),
            'lot_description' => Input::get('lot_description'),
            'lot_size_source' => Input::get('lot_size_source'),
            'misc_interior' => Input::get('misc_interior'),
            'acres' => Input::get('acres'),
            'ap_number' => Input::get('ap_number'),
            'bathroom_desc' => Input::get('bathroom_desc'),
            'bedroom_features' => Input::get('bedroom_features'),
            'dining_area' => Input::get('dining_area'),
            'enclosed_yard' => Input::get('enclosed_yard'),
            'entry_location' => Input::get('entry_location'),
            'exterior_construction' => Input::get('exterior_construction'),
            'heat' => Input::get('heat'),
            'lot_dimentions' => Input::get('lot_dimentions'),
            'mello_rooms' => Input::get('mello_rooms'),
            'parking_types' => Input::get('parking_types'),
        ));

        $objects = Object::all();
        $objects->toarray();

        return View::make('objects.index', compact('objects'));
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
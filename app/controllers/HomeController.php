<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $object = Object::all();
        $object->toarray();

        $idadi = sizeof($object);

        //var_dump($idadi);



        return View::make('home' , compact('object') );

    }

    public function editAbout(){

        echo "I will edit your about";
        exit;

    }

    public function editContact(){

        echo "I will edit your contacts";
        exit;

    }


}

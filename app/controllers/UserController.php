<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

    public function login()
    {
        // validate the info, create rules for the inputs
        $rules = array(
            'username' => 'required', // make sure the username is an actual username
            'password' => 'required|alphaNum|min:3'  // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->errors()->toArray()));
        }

        else{
            $userdata = array(
                'username'     => Input::get('username'),
                'password'  => Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                return Response::json(array('success' => true));
            }
            else{
                return Response::json(array('errors'=> true));
            }

        }
    }

    public function logout(){
        Auth::logout(); // log the user out of our application
        return Redirect::to('home'); // redirect the user to the login screen
    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

        //The role of the user by default is 0
        $role = 0;

        $rules = array(
            'fname'        => 'required', 						   // just a normal required validation
            'mname'        => 'required', 						   // just a normal required validation
            'lname'        => 'required', 						   // just a normal required validation
            'uname'        => 'required', 						   // just a normal required validation
            'email'            => 'required|email', 	                   // required and must be unique
            'pnumber'          => 'required',
            'password'         => 'required'
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return Response::json(array('success' => true));
            return Response::json(array('errors' => $validator->errors()->toArray()));
        }
        else{
            $newUsuer = User::create(array(
                'password' => Hash::make(Input::get('password')),
                'firstName' => Input::get('fname'),
                'middleName' => Input::get('mname'),
                'lastName' => Input::get('lname'),
                'username' => Input::get('uname'),
                'email' => Input::get('email'),
                'phoneNumber' => Input::get('pnumber'),
                'role' => $role
            ));

            return Response::json(array('good' => "Successfully Registered"));
        }

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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

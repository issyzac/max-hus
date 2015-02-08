<?php

class ContactsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
//        echo "indexer";
//        exit;
        return View::make('contact');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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

    public function handleFormPost(){



        $input=Input::only('fullname','email','phone','subject','msg');
        $validator= Validator::make($input, array ('fullname'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'subject'=>'required',
            'msg'=>'required'
        ));
        if ($validator-> fails())
        {
            return Redirect::to ('/contactus')->with('errors',$validator->messages());
        } else {
            Mail::send('feedback',$input,function($message){
                $message->from('sofia@piccolohus.com','sofia');
                $message->to('tord.magnussen@gmail.com');

            });
            return Redirect::to('/contactus')->with('success','Message was sent successfully');
        }
    }


}

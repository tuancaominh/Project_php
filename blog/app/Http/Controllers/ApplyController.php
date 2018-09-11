<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Apply;

class ApplyController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    
 //    function __construct()
	// {

			
	// 	if(Auth::check())
	// 		{ 		
	// 			view()->share('user_login',Auth::user());
	// 		}
	// }

	public function index()
	{
		
		return view('front.apply.apply');
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
	public function store(request $request)
	{
$filename=$request->file('hinh')->getClientOriginalName();



				  $this->validate($request, [
      // check validtion for image or file
            'hinh' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10000',
        ]);

				$new=new Apply();
				$new->name=$request->name;
				$new->email=$request->email;
				$new->logomark=$filename;
				$new->proof="1";
				$new->algorithm="1";
				//Move Uploaded File
			      $destinationPath = 'resources/upload';
			      $request->file('hinh')->move($destinationPath,time().'.'.$filename);
			      $new->save();
					

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

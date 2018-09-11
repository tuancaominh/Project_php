<?php namespace App\Http\Controllers\front;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactController extends FrontBaseController {

	/**
	 * get contact
	 *
	 * @return Response
	 */
	public function getContact()
	{
		return \View::make('front/contact/index');
	}

	/**
	 * post contact
	 *
	 * @return Response
	 */
	public function postContact()
	{
		//
	}
}

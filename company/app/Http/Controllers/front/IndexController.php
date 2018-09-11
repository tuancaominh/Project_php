<?php namespace App\Http\Controllers\front;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends FrontBaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return \View::make('front/index');
	}
	/**
	 * About page 
	 */
	public function getAbout()
	{
		return \View::make('front/about/index');
	}
	/**
	 * Service page 
	 */
	public function getService()
	{
		return \View::make('front/service/index');
	}
}

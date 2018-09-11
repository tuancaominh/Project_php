<?php namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\LoginRequest;

class IndexController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return \View::make('admin/home');
	}
	/**
	 * Display login page
	 *
	 * @return Response
	 */
	public function getLogin()
	{	
		\Auth::logout();
		return \View::make('admin/login');
	}

	/**
	 * login
	 *
	 * @return Response
	 */
	public function postLogin(LoginRequest $request)
	{
		$email = \Request::input('email');
		$password = \Request::input('password');
		if (\Auth::attempt(['email' => $email, 'password' => $password]))
        {
        	//login successfully
            return redirect()->route('admin-top');
        } else {
        	\Session::flash('login_failed', "Special message goes here");
        	return redirect()->back();
        }
	}
}

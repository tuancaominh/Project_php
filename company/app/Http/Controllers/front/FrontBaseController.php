<?php namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;


class FrontBaseController extends Controller {
	
	public function __construct() {
		session('language') === 'en' ? \App::setLocale('en') : \App::setLocale('vi');
	}
}

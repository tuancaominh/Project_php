<?php namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return \View::make('admin/product/index');
	}
	public function getEdit($id)
	{
		return \View::make('admin/product/product_edit');
	}
	public function getCreate()
	{
		return \View::make('admin/product/product_edit');
	}
}

<?php namespace App\Http\Controllers\front;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NewsController extends FrontBaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getList()
    {
        return \View::make('front/news/list');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getDetail($id)
    {
        return \View::make('front/news/detail');
    }
}

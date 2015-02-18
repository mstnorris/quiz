<?php namespace Quiz\Http\Controllers;

use Quiz\Http\Requests;
use Quiz\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function index()
    {
        return view('pages.index');
	}

}

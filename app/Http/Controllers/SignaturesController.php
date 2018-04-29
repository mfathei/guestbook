<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignaturesController extends Controller
{
	/**
	* Display the guestbook homepage
	*
	* @return \Illuminate\Http\Response
	*/
    public function index(){
    	return view('signatures.index');
    }

    /**
	* Display the guestbook form page
	*
	* @return \Illuminate\Http\Response
	*/
	public function create(){
		reurn view('signatures.sign');
	}
}

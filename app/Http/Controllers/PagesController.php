<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about() {

    	$name = 'Peter Mikulasko';


    	return view('pages.about')->with('name',$name);
    }

    public function contact() {

    	$name = 'Petder';


    	return view('pages.contact')->with('name',$name);
    }    
}

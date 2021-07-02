<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class TemplateController extends Controller
{
    //
    public function index(){

    	return view('FrontEnd.home');
    }

    public function indexLocation ($locale) {

    App::setLocale($locale);
   	return view('FrontEnd.home');

    //
}


}

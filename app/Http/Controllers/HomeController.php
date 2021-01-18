<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
   public function home(){
   	return view('home');
   }
  	
  	public function displayData(Request $request){
  		$name = $request->input('name');
 
		return $name;
  	}

  	public function index(){
  		return view('app');
  	}
}

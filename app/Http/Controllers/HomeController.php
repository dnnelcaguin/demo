<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
   
   public function home(){
    $user = DB::select("SELECT * FROM tbuser");
   	
    return view('home',['user' => $user]);
   }
  	
  	public function insertData(Request $request){
  		$name = $request->input('name');
      $address = $request->input('address');
      $contact  = $request->input('contact');
      DB::insert("INSERT INTO tbuser(name,address,contact) VALUES(?,?,?)",[$name,$address,$contact]);
       $user = DB::select("SELECT * FROM tbuser");
	   	return view('home',['user'=> $user]);
  	}

  	public function index(){
  		return view('app');
  	}

    public function deleteData($id){

      DB::delete("DELETE FROM tbuser where id = ?",[$id]);
      $user = DB::select("SELECT * FROM tbuser");
      return view('home',['user' => $user]);

    }
}

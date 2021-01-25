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
    public function editData($id){
      $user = DB::select("SELECT * FROM tbuser WHERE id = ?",[$id]);
      return view('app',['user'=>$user]);
    }

    public function updateData($id,Request $request){
      $name = $request->input('name');
      $address = $request->input('address');
      $contact  = $request->input('contact');
      DB::update("UPDATE tbuser set name = ?, address=?,contact = ? WHERE id = ?",[$name,$address,$contact,$id]);
     $user = DB::select("SELECT * FROM tbuser WHERE id = ?",[$id]);
      return view('app',['user'=> $user]);
    }
}

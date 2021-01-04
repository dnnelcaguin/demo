<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//localhost:8000/
//Required Parameter

//passing of data to views
Route::get('/home/{id}', function ($id) {
   	return view('home',['studentid' => $id , 'studentname' => "Lily Potter" ]);
});

//localhost:8000/about
//optional parameter
Route::get('/about/{id?}', function ($id = "201512345") {
   	return view('about',['studentid' => $id , 'studentname' => 'Tom Riddle' ]);
});

//localhost:8000/contact
Route::get('/contact', function () {
   return view('contact');
});

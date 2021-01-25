<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//home
Route::get('/home',[HomeController::class,'home']);

Route::post('/home',[HomeController::class,'insertData']);

//index
Route::get('/index',[HomeController::class,'index']);


Route::get('/delete/{id}',[HomeController::class,'deleteData']);









//passing of data to views
/*Route::get('/home', function () {
   	return view('home');

});*/

/*Route::get('/index', function () {
   return view('app');
});*/

//localhost:8000/about
//optional parameter
Route::get('/about/{id?}', function ($id = "201512345") {
   	return view('about',['studentid' => $id , 'studentname' => 'Tom Riddle' ]);
});

//localhost:8000/contact
Route::get('/contact', function () {
   return view('contact');
});





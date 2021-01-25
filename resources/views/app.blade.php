@extends('layouts.master')
@section('title','INDEX')
@section('content')
	<h1>Edit Record</h1>

	<form method="POST" action="/home/{{$user[0]->id}}">
     @csrf {{-- cross site request forgeries --}}
   
     <br>
    {{--  cross site request forgery --}}
       Name: <input type="text" name="name" placeholder="Enter Name" required value="{{$user[0]->name}}">
       <br>
       Address <input type="text" name="address" placeholder="Enter Address" required value="{{$user[0]->address}}">
       <br>
       Contact 
       <input type="number" name="contact" placeholder="Enter Contact" required value="{{$user[0]->contact}}">
       <br>
       <input type="submit" name="btnUpdate" value="Update Data">
    </form>

@endsection
@section('footer')
	
@endsection


	




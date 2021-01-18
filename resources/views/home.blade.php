@extends('layouts.master')
@section('title','HOME')
@section('content')
    <h1>Welcome to Home Page</h1>
    <form method="POST" action="/home">
     @csrf
    {{--  cross site request forgery --}}
       Name: <input type="text" name="name" placeholder="Enter Name" required>
       <br>
       <input type="submit" name="btnSubmit" value="Display Data">
    </form>





@endsection

@section('footer')
  <footer class="fixed-bottom container bg-success">  <span class="footer ">home footer</span></footer>
@endsection

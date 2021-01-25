@extends('layouts.master')
@section('title','HOME')
@section('content')

    <h1>Welcome to Home Page</h1>
    <form method="POST" action="/home">
     @csrf {{-- cross site request forgeries --}}
     <img src="/img/1.png" width="100" height="100" align="center">
     <br>
    {{--  cross site request forgery --}}
       Name: <input type="text" name="name" placeholder="Enter Name" required>
       <br>
       Address <input type="text" name="address" placeholder="Enter Address" required>
       <br>
       Contact 
       <input type="number" name="contact" placeholder="Enter Contact" required>
       <br>
       <input type="submit" name="btnInsert" value="Insert Data">
    </form>

    <table border="1">
    		<th>
    			Name
    		</th>
    		<th>
    			Address
    		</th>
    		<th>
    			Contact number
    		</th>
    		<th>
    			Action
    		</th>

    		@foreach($user as $users)
    		<tr>
    			<td>{{ $users->name }}</td>
    			<td>{{ $users->address }}</td>
    			<td>{{ $users->contact }}</td>
    			<td><a href="/delete/{{$users->id}}">DELETE</a></td>
    			<td><a href="/edit/{{$users->id}}">EDIT</a></td>
    		</tr>
    		@endforeach

    </table>




@endsection

@section('footer')
 {{--  <footer class="fixed-bottom container bg-success">  <span class="footer ">home footer</span></footer> --}}
@endsection

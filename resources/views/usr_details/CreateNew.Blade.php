@extends('layouts.app')
@section('content')

<div class="container">

<div>
    @if(session()->has('errors'))
        @foreach($errors->all() as $error)
          <p>{{$error}}</p>
        @endforeach
    @endif
 <form action = "/user-detail" method = 'POST'>
     @csrf
       <input type = "text" name = "fullname" placeholder = "fullname">
       <input type = "text" name = "email" placeholder = "email">
       <input type = "text" name = "phone" placeholder = "mobile number">
       <input type = "text" name = "address" placeholder = "address">
       <textarea name = "summary" id ="" cols= "30" rows = "4" ></textarea>
       <input type = "submit" value = "Submit">
 </form>
</div>
@endsection
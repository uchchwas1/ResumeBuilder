@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Skill Details</h2>
<div>
    @if(session()->has('errors'))
        @foreach($errors->all() as $error)
          <p>{{$error}}</p>
        @endforeach
    @endif
   
 <form action = "/skill" method = 'POST'>
     @csrf
       <input type = "text" name = "name" placeholder = "Skill Name">
       <input type = "text" name = "rating" placeholder = "Rating 1 to 10">
       <input type = "submit" value = "Submit">
 </form>
</div>
@endsection
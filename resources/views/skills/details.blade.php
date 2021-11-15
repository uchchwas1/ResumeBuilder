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
     <div class="form-group">
                    <label for="exampleFormControlInput1">Skill Name</label>
                    <input type="text" class="form-control" name = "name" >
      </div>
        <div class="form-group">
                    <label for="exampleFormControlInput1">Rating Range (1 to 10)</label>
                    <input type="range" class="form-range" min="1" max="10" id="customRange2" name = "rating">
       </div>
       <button type="submit" class="btn btn-success">Save</button>
       <!-- <input type = "text" name = "name" placeholder = "Skill Name">
       <input type = "text" name = "rating" placeholder = "Rating 1 to 5">
       <input type = "submit" value = "Submit"> -->
 </form>
</div>
@endsection
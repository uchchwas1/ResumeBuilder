@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Education Details Edit</h2>
<div>
    @if(session()->has('errors'))
        @foreach($errors->all() as $error)
          <p>{{$error}}</p>
        @endforeach
    @endif
 <form action = "{{route('education.update')}}" method = 'POST'>
     @csrf
     @method('PUT')
       <input type = "text" name = "school_name" placeholder = "School Name">
       <input type = "text" name = "school_location" placeholder = "E-mail">
       <input type = "text" name = "degree" placeholder = "Degree">
       <input type = "text" name = "field_of_study" placeholder = "Field Of Study">
       <input type = "date" name = "graduation_start_date">
       <input type = "date" name = "graduation_end_date">
       <input type = "submit" value = "Submit">
 </form>
</div>
@endsection
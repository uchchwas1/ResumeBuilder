@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Education Details</h2>
<div>
    @if(session()->has('errors'))
        @foreach($errors->all() as $error)
          <p>{{$error}}</p>
        @endforeach
    @endif
   
 <form action = "/education/details" method = 'POST'>
     @csrf
     <div class="form-group">
        <label for="exampleFormControlInput1">Institute Name</label>
        <input type="text" class="form-control" name = "school_name" placeholder="School/High-School/University Name">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">School Location</label>
        <input type="text" class="form-control" name = "school_location" placeholder="Bashundhara R/a, Dhaka">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Exam/Degree Title</label>
        <input type="text" class="form-control" name = "degree" placeholder="S.S.C/H.S.C/B.sc/M.sc">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Concentration/ Major/Group</label>
        <input type="text" class="form-control" name = "field_of_study" placeholder="Computer Science & Engineering">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Joining Date</label>
           <input type = "date" class="form-control" name = "graduation_start_date">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Graduation Date</label>
           <input type = "date" class="form-control" name = "graduation_end_date">
      </div>

      
      <button type="submit" class="btn btn-success">Submit</button>
       <!-- <input type = "text" name = "school_name" placeholder = "School Name">
       <input type = "text" name = "school_location" placeholder = "E-mail">
       <input type = "text" name = "degree" placeholder = "Degree">
       <input type = "text" name = "field_of_study" placeholder = "Field Of Study">
       <input type = "date" name = "graduation_start_date">
       <input type = "date" name = "graduation_end_date">
       <input type = "submit" value = "Submit"> -->
 </form>
</div>
@endsection
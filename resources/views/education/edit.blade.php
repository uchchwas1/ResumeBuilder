@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Education</h2>


    <form action="{{route('education.update', $education)}}" method='POST'>
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="exampleFormControlInput1">Institute Name</label>
        <input type="text" class="form-control" name = "school_name" value="{{$education->school_name}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">School Location</label>
        <input type="text" class="form-control" name = "school_location" value="{{$education->school_location}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Exam/Degree Title</label>
        <input type="text" class="form-control" name = "degree" value="{{$education->degree}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Concentration/ Major/Group</label>
        <input type="text" class="form-control" name = "field_of_study" value="{{$education->field_of_study}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Joining Date</label>
           <input type = "date" class="form-control" name = "graduation_start_date" value="{{$education->graduation_start_date}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Graduation Date</label>
           <input type = "date" class="form-control" name = "graduation_end_date" value="{{$education->graduation_end_date}}">
      </div>

      
      <button type="submit" class="btn btn-success">Submit</button>
 
        <!-- <input type="text" name='school_name' placeholder='school name' value="{{$education->school_name}}">

        <input type="text" name='school_location' placeholder='location' value="{{$education->school_location}}">

        <input type="text" name='degree' placeholder='degree' value="{{$education->degree}}">

        <input type="text" name='field_of_study' placeholder='faculty' value="{{$education->field_of_study}}">

        <input type="date" name='graduation_start_date' value="{{$education->graduation_start_date}}">
        <input type="date" name='graduation_end_date' value="{{$education->graduation_end_date}}">

        <input type="submit" value="Save Education"> -->

    </form>

</div>


@endsection
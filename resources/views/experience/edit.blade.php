@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Education</h2>


    <form action="{{route('experience.update', $experience)}}" method='POST'>
        @csrf
        @method('PUT')
 
                <div class="form-group">
                    <label for="exampleFormControlInput1">Company Name</label>
                    <input type="text" class="form-control" name = "employer" value="{{$experience->employer}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Designation</label>
                    <input type="text" class="form-control" name = "job_title" value="{{$experience->job_title}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Company Location</label>
                    <input type="text" class="form-control" name = "city" value="{{$experience->city}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Area of Experiences</label>
                    <input type="text" class="form-control" name = "state" value="{{$experience->state}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Employment Period: Joining Date</label>
                    <input type = "date" class="form-control" name = "start_date" value="{{$experience->start_date}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Employment Period: Exit Date</label>
                    <input type = "date" class="form-control" name = "end_date" value="{{$experience->end_date}}">
                </div>

                
                <button type="submit" class="btn btn-success">Save</button>

 
        <!-- <input type="text" name='job_title' placeholder='job name' value="{{$experience->job_title}}">

        <input type="text" name='employer' placeholder='employer' value="{{$experience->employer}}">

        <input type="text" name='city' placeholder='city' value="{{$experience->city}}">

        <input type="text" name='state' placeholder='state' value="{{$experience->state}}">

        <input type="date" name='start_date' value="{{$experience->start_date}}">
        <input type="date" name='end_date' value="{{$experience->end_date}}">

        <input type="submit" value="Save Modifications"> -->

    </form>

</div>


@endsection
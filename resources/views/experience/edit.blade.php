@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Education</h2>


    <form action="{{route('experience.update', $experience)}}" method='POST'>
        @csrf
        @method('PUT')
 
        <input type="text" name='job_title' placeholder='job name' value="{{$experience->job_title}}">

        <input type="text" name='employer' placeholder='employer' value="{{$experience->employer}}">

        <input type="text" name='city' placeholder='city' value="{{$experience->city}}">

        <input type="text" name='state' placeholder='state' value="{{$experience->state}}">

        <input type="date" name='start_date' value="{{$experience->start_date}}">
        <input type="date" name='end_date' value="{{$experience->end_date}}">

        <input type="submit" value="Save Modifications">

    </form>

</div>


@endsection
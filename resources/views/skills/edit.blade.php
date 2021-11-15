@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Skill Detail</h2>

    <form action="{{route('skill.update', $skill)}}" method='POST'>
        @csrf
        @method('PUT')

            <div class="form-group">
                        <label for="exampleFormControlInput1">Skill Name</label>
                        <input type="text" class="form-control" name = "name" value="{{$skill->name}}">
            </div>
            <div class="form-group">
                        <label for="exampleFormControlInput1">Rating Range (1 to 10)</label>
                        <input type="range" class="form-range" min="1" max="10" id="customRange2" name = "rating" value="{{$skill->rating}}">
            </div>
            <button type="submit" class="btn btn-success">Save</button>

        <!-- <input type="text" name='name' placeholder='Skill Name' value="{{$skill->name}}">


        <input type="text" name='rating' placeholder='Rating' value="{{$skill->rating}}">

        <input type="submit" value="Save"> -->

    </form>

</div>


@endsection
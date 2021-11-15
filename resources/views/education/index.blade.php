@extends('layouts.app')
@section('content')

<div class="mb-2">
<h2>Education Summary</h2>
   
    @foreach($education as $e)
     <div class = "card">
         <div class = "card-body">
             <h4 class = "card-title">{{$e->degree}} in {{$e->school_name}} {{$e->graduation_start_date}} - {{$e->graduation_end_date}}</h4>
             <a class = "btn btn-sm btn-primary" href = " {{route('education.edit', $e)}} " role = "button">Edit</a>
            
             <form action="{{route('education.destroy', $e)}}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
            </form>
        </div>
    </div>

    @endforeach
    </div>   
    <div class="col text-center">
        <a  class="btn btn-info mt-3" href="{{route('education.details')}}" role="button">Add Education</a>
        <a  class="btn btn-success mt-3" href="{{route('experience.index')}}" role="button">Experience Section</a>
    </div>   
        @endsection
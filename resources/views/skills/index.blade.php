@extends('layouts.app')
@section('content')

<div class="mb-2">
<h2>Skills Summary</h2>
   
    @foreach($skills as $e)
     <div class = "card">
         <div class = "card-body">
             <h4 class = "card-title">{{$e->name}} in {{$e->rating}} </h4>
             <a class = "btn btn-sm btn-primary" href = " {{route('skill.edit', $e)}} " role = "button">Edit</a>
            
             <form action="{{route('skill.destroy', $e)}}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
            </form>
        </div>
    </div>

    @endforeach
    </div>   
    <a  class="btn btn-primary" href="{{route('skill.create')}}" role="button">Add Skills</a>
    
    @endsection
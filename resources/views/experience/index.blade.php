@extends('layouts.app')
@section('content')

<h1>Experience Summary</h2>  
    @foreach($experiences as $e)
     <div class = "card">
         <div class = "card-body">
             <h4 class="card-title"> {{$e->job_title}}  ({{$e->start_date}} to {{$e->end_date}}) </h4>
                    <ul>
                        <li>{{ $e->employer}}</li>
                        <li>{{ $e->city}}</li>
                        <li>{{ $e->state}}</li>
                    </ul>
        
            <a  class="btn btn-sm btn-primary" href=" {{route('experience.edit', $e)}} " role="button">Edit</a>

                <form action="{{route('experience.destroy', $e)}}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')

                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                </form>

            </div>
        </div>
@endforeach
<div class="col text-center">   
    <a  class="btn btn-info mt-3" href="{{route('experience.create')}}" role="button">Add Experiences</a>
    <a  class="btn btn-success mt-3" href="{{route('skill.index')}}" role="button">Add Skills</a>
</div>
@endsection



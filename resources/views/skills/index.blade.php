@extends('layouts.app')
@section('content')

<div class="mb-2">
<h2>Skills Summary</h2>
   
    @foreach($skills as $e)
     <div class = "card">
         <div class = "card-body">
             <h4 class = "card-title">{{$e->name}} Proficiency Score: {{$e->rating}} </h4>
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
    <div class="col text-center"> 
        <a  class="btn btn-primary" href="{{route('skill.create')}}" role="button">Add Skills</a>
        
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success " data-toggle="modal" data-target="#modelId">Resume Preview</button>
            <!--Model start-->  
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Preview Resume</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <iframe src = "{{route('resume.index')}}" width = "100%" height = "900"></iframe>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <a name="" id="" class="btn btn-primary" href="{{route('resume.download')}}" role="button">Download</a>
                    </div>
                </div>
                </div>
            </div>
            
            <!--Model end--> 
        <a  class="btn btn-info" href="{{route('resume.download')}}" role="button">Resume Download</a>
    </div> 
    
@endsection
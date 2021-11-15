@extends('layouts.app')
@section('content')


<h2>User Profile</h2>

    
     <div class = "card">
         <div class = "card-body">
             <h4 class = "card-title">
                 <b>User Name:</b> {{$details->fullname}} <br>
                 <b>User E-mail:</b> {{$details->email}} <br>
                 <b>User Phone:</b> {{$details->phone}} <br>
                 <b>User Summary:</b><p>"{{$details->summary}}"</P><br>
             </h4>
             <a class = "btn btn-sm btn-primary" href = " {{route('user-detail.edit', $details)}} " role = "button">Edit User Data and Summary</a>
            
             <!-- <form action="{{route('user-detail.destroy', $details)}}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
            </form> -->
        </div>
    </div>

 
 
   
    @endsection
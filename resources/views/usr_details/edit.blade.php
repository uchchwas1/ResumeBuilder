@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Education</h2>


    <form action=" {{route('user-detail.update', $userDetail)}} " method='POST'>
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="exampleFormControlInput1">Your Full Name</label>
            <input type="text" class="form-control" name = "fullname" value="{{$userDetail->fullname}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Enter Your Email</label>
            <input type="text" class="form-control" name = "email" value="{{$userDetail->email}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Enter Your Phone Number</label>
            <input type="text" class="form-control" name = "phone" value="{{$userDetail->phone}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Enter Your Full Address</label>
            <input type="text" class="form-control" name = "address" value="{{$userDetail->address}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Summary About You</label>
            <textarea class="form-control" name = "summary" rows="4"> {{$userDetail->summary}} </textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
 
        <!-- <input type="text" name='fullname' placeholder='Full Name' value="{{$userDetail->fullname}}">       
       <input type = "text" name = "email" placeholder = "email" value="{{$userDetail->email}}">
       <input type = "text" name = "phone" placeholder = "mobile number" value="{{$userDetail->phone}}">
       <input type = "text" name = "address" placeholder = "address" value="{{$userDetail->address}}">
       <textarea name = "summary" id ="" cols= "30" rows = "4" >
              {{$userDetail->summary}}
       </textarea> -->
       


    </form>

</div>


@endsection
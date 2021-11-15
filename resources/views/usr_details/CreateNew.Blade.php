@extends('layouts.app')
@section('content')

<div class="container">

<div>
    @if(session()->has('errors'))
        @foreach($errors->all() as $error)
           <div class="alert alert-danger" role="alert"><p>{{$error}}</p></div>
        @endforeach
    @endif
 <form action = "/user-detail" method = 'POST'>
     @csrf
       <!-- <input type = "text" name = "fullname" placeholder = "fullname">
       <input type = "text" name = "email" placeholder = "email">
       <input type = "text" name = "phone" placeholder = "mobile number">
       <input type = "text" name = "address" placeholder = "address">
       <textarea name = "summary" id ="" cols= "30" rows = "4" ></textarea>
        -->
       
      <div class="form-group">
        <label for="exampleFormControlInput1">Your Full Name</label>
        <input type="text" class="form-control" name = "fullname" placeholder="Your Name">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Enter Your Email</label>
        <input type="text" class="form-control" name = "email" placeholder="name@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Enter Your Phone Number</label>
        <input type="text" class="form-control" name = "phone" placeholder="0178590XXXX">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Enter Your Full Address</label>
        <input type="text" class="form-control" name = "address" placeholder="House No, Road No, Area, City, Country">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Summary About You</label>
        <textarea class="form-control" name = "summary" rows="4"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
   </div>
</div>
@endsection

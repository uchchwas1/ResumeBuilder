@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Work details</h2>
</div>
@if(session()->has('errors'))
        @foreach($errors->all() as $error)
          <p>{{$error}}</p>
        @endforeach
    @endif
<div>
    <form action="/experience" method='POST'>
        @csrf

            <div class="form-group">
                <label for="exampleFormControlInput1">Company Name</label>
                <input type="text" class="form-control" name = "employer" placeholder="Company Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Designation</label>
                <input type="text" class="form-control" name = "job_title" placeholder="Designation">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Company Location</label>
                <input type="text" class="form-control" name = "city" placeholder="Mirpur, Dhaka">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Area of Experiences</label>
                <input type="text" class="form-control" name = "state" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Employment Period: Joining Date</label>
                <input type = "date" class="form-control" name = "start_date" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Employment Period: Exit Date</label>
                <input type = "date" class="form-control" name = "end_date" >
            </div>

            
            <button type="submit" class="btn btn-success">Save</button>

        <!-- <input type="text" name='job_title' placeholder='Job Title'>

        <input type="text" name='employer' placeholder='Employer'>

        <input type="text" name='city' placeholder='city'>

        <input type="text" name='state' placeholder='state'>

        <input type="date" name='start_date'>
        <input type="date" name='end_date'>

        <input type="submit" value="Save"> -->

    </form>

</div>


@endsection
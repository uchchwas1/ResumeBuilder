<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- CSS 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  > -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
  .navbar .login-btn {
  position: absolute;
  top: 4px;
  right: 15px;
}
@media (max-width: 767px) {
  .navbar .login-btn {
    right: 75px;
  }
}

  .navbar .signup-btn {
  position: absolute;
  top: 4px;
  right:85px;
}
@media (max-width: 767px) {
  .navbar .signup-btn {
    right: 75px;
  }
}


</style>
</head>
<body id="app-layout">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">Resume Builder</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href={{route('home')}}>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=" {{route('user-detail.index')}} ">User Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link login-btn" href="{{route('login')}}">Sign-in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link signup-btn active" href="{{route('register-user')}}">Sign-up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('education.index')}}">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('experience.index')}}">Work History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('skill.index')}}">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger"  href= "{{ route('signout') }}">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <main class = "py-4 container">
    @yield('content')
     <!-- <a class="btn btn-primary" href="{{route('resume.download')}}" role="button">Download</a> -->
  </main>  
 
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
</body>
</html>
@extends('layouts.app')

@section('content')
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    <div class = 'container'>
                        <h2>Welcome to Resume Builder</h2>
                        <a name = "" id = "" class = "btn btn-primary" href = "{{route('user-detail.create')}}" role = "button">Build Now</a>
                    </div>
                        @endguest
                </ul>

@endsection


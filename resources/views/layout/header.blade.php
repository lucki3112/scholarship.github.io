<!doctype html>
<html lang="en">

<head>
    <title>Scholarship</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('all.css')}}">
    <link rel="stylesheet" href="{{asset('extra_css/extra.css')}}">

</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    @if (!Session::has('admin') && !Session::has('ins')&& !Session::has('state'))
                    <div class="navbar-nav">
                        <a href="{{route('home')}}" class="nav-item nav-link">Home</a>
                    </div> 
                    @endif
                    <div class="navbar-nav">
                        <a href="#" class="nav-item nav-link">Scholarship List</a>
                    </div>
                    @if (!Session::has('admin') && !Session::has('id') && !Session::has('ins') && !Session::has('state'))
                    <div class="navbar-nav ms-auto">
                        <a href="{{route('admin_login')}}" class="nav-item nav-link">Admin</a>
                    </div>
                    @else
                    @if (Session::has('admin'))
                    <div class="navbar-nav ms-auto">
                        <a href="{{route('admin_profile')}}" class="nav-item nav-link">Profile</a>
                    </div> 
                    @elseif (Session::has('id'))
                    <div class="navbar-nav ms-auto">
                        <a href="{{route('profile')}}" class="nav-item nav-link">Profile</a>
                    </div> 
                    @elseif (Session::has('ins'))
                    <div class="navbar-nav ms-auto">
                        <a href="{{route('institute_profile')}}" class="nav-item nav-link">Profile</a>
                    </div> 
                    @elseif (Session::has('state'))
                    <div class="navbar-nav ms-auto">
                        <a href="{{route('state_profile')}}" class="nav-item nav-link">Profile</a>
                    </div> 
                    @endif
                    @endif
                </div>
            </div>
        </nav>
        @if (Session::has('loginfirst'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('loginfirst')}}
        </div>
        @endif
        <marquee behavior="" direction="left">
            *** This scholarship page have many scholarship, you can apply any scholarship by using your qualification
        </marquee>
    </header>
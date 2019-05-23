<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield( 'title' )</title>
    <link rel="stylesheet" href="{{url( '/css/app.css' )}}">
    <link rel="stylesheet" href="{{url( '/css/blog.css' )}}">
    @yield( 'style' )
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">My Blogs</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url( '/' )}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/posts/create')}}">Create Blogs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Update Blogs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url( '/posts' ) }}">View Blogs</a>
            </li>
        </ul>
    </div>
</nav>
@yield( 'content' )

@yield( 'scripts' )
<script src="{{ url( '/js/app.js' ) }}"></script>
</body>
</html>

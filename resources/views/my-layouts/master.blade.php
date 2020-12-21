<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <title>@yield("title")</title>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-sm bg-white shadow-sm m-0 py-0 px-5">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('images/Just Du It ! Logo.jpg')}}" alt="Just Du It Logo" width="140px">
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{Route('login')}}">
                    Login
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{Route('register')}}">
                    Register
                </a>
            </li>
        </ul>
    </nav>
    <div class="content">
        @yield("content")
    </div>
    
</body>
</html>
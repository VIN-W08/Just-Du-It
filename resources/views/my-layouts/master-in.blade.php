<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/home.css"/>
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>   
    <title>@yield("title")</title>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-sm m-0 py-0 px-5 bg-white shadow-sm"> 
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('images/Just Du It ! Logo.jpg')}}" alt="Just Du It Logo" width="140px">
        </a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" name="search" value="{{Request::input('search')}}"> 
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <ul class="navbar-nav ml-auto">
            @auth
                <li class="nav-item">
                    <a href="" class="nav-link">{{auth()->user()->username}}</a>
                </li>
                <li class="nav-item">
                    <a href="{{Route('logout')}}" class="nav-link">logout</a>
                </li>    
            @else
                <li class="nav-item">
                    <a href="{{Route('login')}}" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{Route('register')}}" class="nav-link">Register</a>
                </li>
            @endauth
        </ul>
    </nav>
    <div class="container-fluid row">
        <div class="col-3 text-white" id="left-navbar">
            <ul class="navbar-nav sticky-top p-2">
                @auth
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{Route('home')}}">View All Shoe</a>
                    </li>
                    @if(auth()->user()->role == "member")
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{Route('viewCart')}}">View Cart</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{Route('addShoe')}}">Add Shoe</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{Route('viewTransaction')}}">View All Transaction</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{Route('home')}}">View All Shoe</a>
                    </li>
                @endauth
                
            </ul>
        </div>
        <div class="col-9">
        @yield("page")
        </div>
    </div>
</body>
</html>
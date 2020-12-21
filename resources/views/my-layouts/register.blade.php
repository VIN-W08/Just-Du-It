@extends("my-layouts.master")

@section("title","register")

@section("content")
    <div class="register-container container mt-5 my-3 p-0 bg-white w-50">
        <div class="container bg-primary text-white text-center p-2">Register</div>
        <form action="{{Route('register')}}" method="post" class="form-inline">
            @csrf    
            <div class="form-group container-fluid p-2">
                <label class="control-label col-sm-4 d-block text-right" for="username">Username</label>
                <div class="col-sm-8">
                    <input class="form-control w-75" type="text" name="username" id="username">
                </div>
                @if(!empty($errors->get("username")))
                <div class="col-4"></div>
                <div class="col-8 text-danger">
                    @foreach($errors->get("username") as $error)
                        {{$error}}
                    @endforeach
                </div>
                @endif
            </div>

            <div class="form-group container-fluid p-2">
                <label class="control-label col-sm-4 d-block text-right" for="email">E-Mail Address</label>
                <div class="col-sm-8">
                    <input class="form-control w-75" type="text" name="email" id="email"/>
                </div>
                @if(!empty($errors->get("email")))
                <div class="col-4"></div>
                <div class="col-8 text-danger">
                    @foreach($errors->get("email") as $error)
                        {{$error}}
                    @endforeach
                </div>
                @endif
    
            </div>
        
            <div class="form-group container-fluid p-2">
                <label class="control-label col-sm-4 d-block text-right" for="password">Password</label>
                <div class="col-sm-8">
                    <input class="form-control w-75" type="password" name="password" id="password">
                </div>
                @if(!empty($errors->get("password")))
                <div class="col-4"></div>
                <div class="col-8 text-danger">
                @foreach($errors->get("password") as $error)
                    {{$error}}
                @endforeach
                </div>
            @endif
            </div>

            <div class="form-group container-fluid p-2">
                <label class="control-label col-sm-4 d-block text-right" for="conform-password">Confirm Password</label>
                <div class="col-sm-8">
                    <input class="form-control w-75" type="password" name="confirm-password" id="confirm-password">
                </div>
            </div>

            <div class="form-group container-fluid px-0 py-1 mb-2">
                <div class="col-sm-4"></div>        
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                </div>
            </div>
        </form>
    </div>
@endsection

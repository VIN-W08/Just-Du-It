@extends("my-layouts.master-in")

@section("title","home")

@section("page")
    <div class="container-fluid p-4 row">
        <div class="col-4">
            <img src="{{asset('images/'.$shoe->image)}}" alt="{{$shoe->name}}" height="300px">
        </div>
        <div class="col-8">
            <h3>{{$shoe->name}}</h3>
            <p>Price : Rp {{$shoe->price}}</p>
            <p>Description :</p>
            <p>{{$shoe->description}}</p>
            @auth 
                @if(auth()->user()->role == "member")
                    <form action="{{Route('addToCart')}}">
                        <input type="hidden" name="shoeId" value="{{$shoe->id}}">
                        <button type="submit" class="btn btn-link">Add To Cart</button>
                    </form>
                @else
                    <form action="{{Route('updateShoe')}}">
                        <input type="hidden" name="shoeId" value="{{$shoe->id}}">
                        <button type="submit" class="btn btn-link">Update Shoe!</button>
                    </form>
                @endif
            @endauth
        </div>
    </div>
@endsection
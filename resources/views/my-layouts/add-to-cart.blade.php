@extends("my-layouts.master-in")

@section("title","Add to Cart")

@section("page")
    <div class="container bg-white mt-5 w-75 p-0">
        <div class="container-fluid bg-primary text-white text-center p-2">Add To Cart</div>
        <div class="row">
            <div class="col-4">
                <img src="{{asset('images/'.$shoe->image)}}" alt="{{$shoe->name}}" width="200px">
            </div>
            <div class="col-8">
                <h3>{{$shoe->name}}</h3>
                <p>Price : Rp {{$shoe->price}}</p>
                <p>Description :</p>
                <p>{{$shoe->description}}</p>
            </div>
        </div>
    
        <form action="{{Route('createCartAndItem')}}" method="post" class="p-3 input-group">
            @csrf
            <input type="hidden" name="shoeId" value="{{$shoe->id}}">
            <label for="quantity" class="label-control">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="ml-2 mr-2">
            <button type="submit" class="btn btn-primary">Add To Cart</button>
        </form>
    </div>
@endsection
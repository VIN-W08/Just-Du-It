@extends("my-layouts.master-in")

@section("title","Cart")

@section("page")
    <div class="container mt-5">
        <div class="row w-75">
            <div class="col-5">
                <img src="{{asset('images/'.$item->Shoe->image)}}" alt="{{$item->Shoe->name}}" width="220px">
            </div>
            <div class="col-7">
                <h3>{{$item->Shoe->name}}</h3>
                <p>Price : Rp. {{$item->Shoe->price}}</p>
                <p>Description :</p>
                <p>{{$item->Shoe->description}}</p>
                <form action="{{Route('updateCart')}}" class="form-inline mt-3">
                    <label for="quantity" class="label-control mr-2">Quantity</label>
                    <input type="hidden" name="itemId" value="{{$item->id}}">
                    <input type="number" name="quantity" id="quantity" value="{{$item->quantity}}">
                    <button class="btn btn-primary mt-4 mx-2">Update Cart</button>
                </form>
                <form action="{{Route('deleteItem')}}" class="form-inline">
                    <input type="hidden" name="itemId" value="{{$item->id}}">
                    <button class="btn btn-link mx-2">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
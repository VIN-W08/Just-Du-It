@extends("my-layouts.master-in")

@section("title","Cart")

@section("page")
    <div class="container bg-white mt-5 w-75 p-0">
        <div class="container-fluid bg-primary text-white text-center p-2">View Cart</div>
        @isset($items)
            @foreach($items as $item)
                <div class="row p-2">
                    <div class="col-2">
                        <img src="{{asset('images/'.$item->Shoe->image)}}" alt="{{$item->Shoe->name}}"  height="100px">
                    </div>
                    <div class="col-8">
                        <span class="mr-5 text-primary">{{$item->Shoe->name}}</span>
                        <span class="mr-5">{{$item->quantity}}</span>
                        <span class="mr-5">Rp. {{$item->Shoe->price * $item->quantity}}</span>
                    </div>
                    <div class="col-2">
                        <form action="{{Route('editCart')}}" class="d-inline">
                            <input type="hidden" name="itemId" value="{{$item->id}}"/>
                            <button type="submit" class="btn btn-primary ml-auto">Edit</button>
                        </form>
                    </div>
                </div>
            @endforeach
            <div class="container-fluid py-3">
                <form action="{{Route('checkOut')}}" method="post" class="ml-auto w-25">
                    @csrf
                    <input type="hidden" name="cartId" value="{{$cartId}}"/>
                    <button type="submit" class="btn btn-primary px-3">Check Out</button>
                </form>
            </div>
        @endisset
    </div>
@endsection
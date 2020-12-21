@extends("my-layouts.master-in")

@section("title","home")

@section("page")
    <div class="container w-75 m-auto bg-white">
    <div class="container bg-primary text-white text-center p-2 my-4">View Shoe</div>
    <div class="card-columns container-fluid">
    @foreach($shoes as $shoe)
        <div class="card mt-3 border-0 h-100">
        <image src="{{asset('images/'.$shoe->image)}}" alt="{{$shoe->name}}" class="card-img-top bg-none" height="200px">
            <div class="card-body">
                <div class="card-text">
                <form action="{{Route('detail')}}">
                    <input type="hidden" name="shoeId" value="{{$shoe->id}}">
                    <button type="submit" class="text-sm-left btn btn-link">{{$shoe->name}}</button>
                </form>
                <span>Rp. {{$shoe->price}}</span>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    {{$shoes->withQueryString()->links()}}
@endsection

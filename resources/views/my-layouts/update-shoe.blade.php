@extends("my-layouts.master-in")

@section("title","Cart")

@section("page")
    <div class="container mt-5 w-75 bg-white p-0">
        <div class="col-12 bg-primary text-white p-2 text-center">Update Shoe</div>
        <div class="row p-0">
            <div class="col-3">
                <img src="{{asset('images/'.$shoe->image)}}" alt="{{$shoe->name}}" width="150px">
            </div>
            <div class="col-9">
                <h4>{{$shoe->name}}</h4>
                <p>Rp. {{$shoe->price}}</p>
                <p>{{$shoe->description}}</p>
            </div>
        </div>
        <div class=="row">
            <div class="col-12">
            <form action="{{Route('makeUpdateShoe')}}" method="post" enctype="multipart/form-data" class="form-inline">
                @csrf
                <input type="hidden" name="shoeId" value="{{$shoe->id}}">
                <div class="form-group container-fluid p-2">
                    <label class="control-label col-sm-3 d-block text-right" for="name">Shoe name</label>
                    <div class="col-sm-9">
                        <input class="form-control w-75 text-secondary" type="text" name="name" id="name" value="{{$shoe->name}}">
                    </div>
                </div>

                <div class="form-group container-fluid p-2">
                    <label class="control-label col-sm-3 d-block text-right" for="price">Price</label>
                    <div class="col-sm-9">
                        <input class="form-control w-75 text-secondary" type="number" name="price" id="price" value="{{$shoe->price}}">
                    </div>
                </div>
                <div class="form-group container-fluid p-2">
                    <label class="control-label col-sm-3 d-block text-right" for="description">Description</label>
                    <div class="col-sm-9">
                        <input class="form-control w-75 text-secondary" type="text" name="description" id="description" value="{{$shoe->description}}">
                    </div>
                </div>

                <div class="form-group container-fluid p-2">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-11">
                    <input class="w-75" type="file" name="image" id="image">
                </div>
                <div class="form-group container-fluid px-0 py-1 my-2">
                    <div class="col-sm-3"></div>        
                    <div class="col-sm-offset-4 col-sm-9">
                        <button type="submit" class="btn btn-primary" name="updateShoe">Update Shoe!</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
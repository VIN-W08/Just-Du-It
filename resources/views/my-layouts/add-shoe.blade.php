@extends("my-layouts.master-in")

@section("title","Add Shoe")

@section("page")
    <div class="register-container container mt-5 my-3 p-0 bg-white w-75">
        <div class="container bg-primary text-white text-center p-2">Add Shoe</div>

        <form action="{{Route('uploadShoe')}}" method="post" enctype="multipart/form-data" class="form-inline">
            @csrf
            <div class="form-group container-fluid p-2">
                <label class="control-label col-sm-3 d-block text-right" for="name">Shoe Name</label>
                <div class="col-sm-9">
                    <input class="form-control w-75" type="text" name="name" id="name">
                </div>
                @if(!empty($errors->get("name")))
                <div class="col-3"></div>
                <div class="col-9 text-danger">
                    @foreach($errors->get("name") as $error)
                        {{$error}}
                    @endforeach
                </div>
                @endif
            </div>

            <div class="form-group container-fluid p-2">
                <label class="control-label col-sm-3 d-block text-right" for="price">Price</label>
                <div class="col-sm-9">
                    <input class="form-control w-75" type="number" name="price" id="price">
                </div>
                @if(!empty($errors->get("price")))
                <div class="col-3"></div>
                <div class="col-9 text-danger">
                @foreach($errors->get("price") as $error)
                    {{$error}}
                @endforeach
                </div>
                @endif
            </div>

            <div class="form-group container-fluid p-2">
                <label class="control-label col-sm-3 d-block text-right" for="description">Description</label>
                <div class="col-sm-9">
                    <input class="form-control w-75" type="text" name="description" id="description">
                </div>
                @if(!empty($errors->get("description")))
                <div class="col-3"></div>
                <div class="col-9 text-danger">
                @foreach($errors->get("description") as $error)
                    {{$error}}
                @endforeach
                </div>
                @endif
            </div>

            <div class="form-group container-fluid p-2">
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    <input class="w-75" type="file" name="image" id="image">
                </div>
                @if(!empty($errors->get("image")))
                <div class="col-3"></div>
                <div class="col-9 text-danger">
                @foreach($errors->get("image") as $error)
                    {{$error}}
                @endforeach
                </div>
                @endif
            </div>
            
            <div class="form-group container-fluid px-0 py-1 mb-2">
                <div class="col-sm-3"></div>        
                <div class="col-sm-offset-4 col-sm-9">
                    <button type="submit" class="btn btn-primary" name="addShoe">Add Shoe</button>
                </div>
            </div>
            </div>
        </form>
    </div>
@endsection
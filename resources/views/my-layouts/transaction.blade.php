@extends("my-layouts.master-in")

@section("title","Transaction")

@section("page")
    <div class="container bg-white w-75 p-0 mt-4">
        <div class="container w-100 bg-primary text-white p-2">View All Transaction</div>
        @isset($transactions)
            @foreach($transactions as $transaction)
                <div class="container mt-3">
                    <p class="d-block w-75 bg-info text-white text-center mx-auto p-1 rounded">{{$transaction->created_at}}&emsp;&emsp;Total Rp. {{$transaction->totalPrice}}</p>
                </div>
                <div class="container-fluid">    
                    @foreach($transactionItems as $transactionItem)
                        @if($transactionItem->Transaction == $transaction)
                            <img src="{{asset('images/'.$transactionItem->Shoe->image)}}" alt="{{$transactionItem->Shoe->name}}" height="120px">
                        @endif
                    @endforeach
                </div>
            @endforeach
        @endisset
        
    </div>
@endsection
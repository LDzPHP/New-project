@extends('dashboard');

@section('content')

    <div class="bg-gradient-to-r from-yellow-600 to-white">
        <form action="/sales/edit/{{$sale->id}}" method="post">
        @csrf
            <label>
                <h1 class="w-60 mx-20 bg-orange-500 p-2 m-1 rounded-md text-white">EDIT SALE</h1>
            </label>

            <div class="form mx-10 my-5">

                <label class="input w-60 mx-10 bg-orange-500 p-2 m-1 rounded-md" input type="submit">
                    Print ID: <input type="text" name="print_id" value="{{ $sale->print_id }}"
                    class="block rounded-md"><br>   
                    Print price (EUR): <input type="text" name="price" value="{{ $sale->price }}"
                    class="block rounded-md"><br>
                    Customer ID: <input type="text" name="customer_id" value="{{ $sale->customer_id }}"
                    class="block rounded-md"><br>
                    Sum in total (EUR): <input type="text" name="sum" value="{{ $sale->sum }}"
                    class="block rounded-md"><br>
                </label>
            
                <button type="bytton" class="block w-60 mx-10 bg-green-500 p-2 m-1 rounded-md text-white">
                <input type="submit" {{ route('sales.index') }}>
                </button>
            </div>
        </form>
    </div>
@endsection
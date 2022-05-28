@extends('dashboard')

@section('content')

    <div class="bg-gradient-to-r from-yellow-600 to-white">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="/sales/create" method="post">
        @csrf
        <label>
            <h1 class="w-60 mx-20 bg-green-500 p-2 m-1 rounded-md text-white">NEW SALE</h1>
            </label>

            <div class="form mx-10 my-5">
                <label class="input w-60 mx-10 bg-green-500 p-2 m-1 rounded-md" input type="submit">

                    Print ID: <input type="text" name="print_id" value="{{ old('print_id') }}"
                    class="block rounded-md text-white"><br>
                    Prind price: <input type="text" name="price" value="{{ old('price') }}"
                    class="block rounded-md text-white"><br>
                    Customer ID: <input type="text" name="customer_id" value="{{ old('customer_id') }}"
                    class="block rounded-md text-white"><br>

                    Sum: <input type="text" name="sum" value="{{ old('sum') }}"><br>
                </label>
                       
                <button type="button" class="block w-60 mx-10 bg-green-500 p-2 m-1 rounded-md text-white">
                <input type="submit" {{ route('sales.index') }}>
                </button>
            </div>
        </form>
    </div>
@endsection
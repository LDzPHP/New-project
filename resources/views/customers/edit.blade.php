@extends('dashboard')

@section('content')
    {{--@include('partials.form')--}}
    <div class="bg-gradient-to-r from-yellow-200 toyellow-300">
    <form action="/customers/edit/{{$customer->id}}" method="post">
    @csrf
        <label>
        <h1 class="w-60 mx-20 bg-orange-500 p-2 m-1 rounded-md text-white">EDIT CUSTOMER</h1>
        </label>

        <div class="mx-10 my-5">

            <label class="input w-60 mx-10 bg-orange-500 p-2 m-1 rounded-md" 
            input type="submit">

            Name: <input type="text" name="name" value="{{ $customer->name }}" 
                class="block rounded-md"><br>
            E-mail: <input type="text" name="email" value="{{ $customer->email }}" 
                class="block rounded-md"><br>
            </label>
        
            <button type="bytton" class="block w-60 mx-10 bg-green-500 p-2 m-1 rounded-md text-white">
            <input type="submit" {{ route('customers.index') }}>
            </button>
        </div>
    </form>
    </div>
@endsection
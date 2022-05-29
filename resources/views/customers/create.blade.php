@extends('dashboard')

@section('content')
    <div class="bg-gradient-to-r from-yellow-200 to-white max-w-fit rounded-md mx-10">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/customers/create" method="post">
            @csrf
            <label>
            <h1 class="w-60 mx-20 bg-green-500 p-2 m-1 rounded-md text-white opacity-80">NEW CUSTOMER</h1>
            </label>

            <div class="form mx-10 my-5">
                <label class="input w-60 mx-10 bg-green-500 p-2 m-1 rounded-md opacity-80" input type="submit">
                
                Name: <input type="text" name="name" value="{{ old('name') }}" 
                class="block rounded-md"><br>
                E-mail: <input type="text" name="email" value="{{ old('email') }}" 
                class="block rounded-md"><br>
                </label>
            
                <button type="button" class="block w-60 mx-10 bg-green-500 p-2 m-1 rounded-md text-white">
                <input type="submit" {{ route('customers.index') }}>
                </button>
            </div>
        </form>
    </div>
@endsection
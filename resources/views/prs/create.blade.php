@extends('dashboard')

@section('content')
    <div class="bg-gradient-to-r from-yellow-400 to-white max-w-fit rounded-md mx-10">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/prs/create" method="post">
            @csrf
            <label>
            <h1 class="w-60 mx-20 bg-green-500 p-2 m-1 rounded-md text-white opacity-80">NEW PRINT</h1>
            </label>

            <div class="form mx-10 my-5">
                <label class="input w-60 mx-10 bg-green-500 p-2 m-1 rounded-md opacity-80" input type="submit">

                    Print ID: <input type="text" name="pr_id" value="{{ old('pr_id') }}" 
                    class="block rounded-md"><br>            
                    Print price (EUR): <input type="text" name="pr_price" value="{{ old('pr_price') }}" 
                    class="block rounded-md"><br>
                    Print description: <input type="text" name="description" value="{{ old('description') }}"
                    class="block rounded-md"><br>
                    </label>

                    <button type="button" class="block w-60 mx-10 bg-green-500 p-2 m-1 rounded-md text-white">
                    <input type="submit" {{ route('prs.index') }}>
                    </button>
                </label>
            </div>
        </form>
    </div>
@endsection
@extends('dashboard');

@section('content')
    {{--@include('partials.form')--}}
     <div class="bg-gradient-to-r from-yellow-400 to-white">
        <form action="/prs/edit/{{$pr->id}}" method="post">
        @csrf
                <label>
                        <h1 class="w-60 mx-20 bg-orange-500 p-2 m-1 rounded-md text-white">EDIT PRINT</h1>
                </label>

                <div class="form mx-10 my-5">

                        <label class="input w-60 mx-10 bg-orange-500 p-2 m-1 rounded-md" input type="submit">
                        Print ID: <input type="text" name="pr_id" value="{{ $pr->pr_id }}"
                        class="block rounded-md"><br>
                        Print price (EUR): <input type="text" name="pr_price" value="{{ $pr->pr_price }}"
                        class="block rounded-md"><br>
                        Print description: <input type="text" name="description" value="{{ $pr->description }}" 
                        class="block rounded-md"><br>
                        </label>

                        <button type="bytton" class="block w-60 mx-10 bg-green-500 p-2 m-1 rounded-md text-white">
                        <input type="submit" {{ route('prs.index') }}>
                        </button>
                </div>
        </form>
    </div>
@endsection

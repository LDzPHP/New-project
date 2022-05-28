@extends('dashboard')

@section('content')
    <div class="mx-12">
        <div class="create-button-container">
            <a class="bg-green-500 text-white p-2 m-2 rounded-md"
            href="{{ route('sales.create') }}"> 
                Create sale
            </a>
        </div>

        <table class="bg-gradient-to-r from-yellow-600 to-white my-5">
            <thead class="text-red-500">
                <th class="p-2">Print ID</th>
                <th class="p-2">Print price</th>
                <th class="p-2">Customer id</th>
                <th class="p-2">Sum spent</th>
                <th class="p-2">Actions</th>
            </thead>

            <tbody>
            @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale->print_id }}</td>
                    <td>{{ $sale->price }}</td>
                    <td>{{ $sale->customer_id }}</td>
                    <td>{{ $sale->sum }}</td>

                    <td>
                        <a type="button" class="bg-blue-500 p-2 m-1 rounded-md text-white"
                        href="{{ route('sales.show', ['sale' => $sale->id]) }}"> 
                            Show 
                        </a>
                        <a type="button" class="bg-orange-500 p-2 m-1 rounded-md text-white" 
                        href="{{ route('sales.edit', ['sale' => $sale->id]) }}"> 
                            Edit 
                        </a>
                        <a type="button"class="bg-red-500 p-2 m-1 rounded-md text-white"
                        href="{{ route('sales.delete', ['sale' => $sale->id]) }}"> 
                            Delete
                        <a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
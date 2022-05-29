@extends('dashboard')

@section('content')
    <div class="mx-12">
        <div class="create-button-container">
            <a class="bg-green-500 text-white px-12 py-8 rounded-md opacity-70" 
            href="{{ route('customers.create') }}"> 
                Create customer
            </a>
        </div>

        <table class="bg-gradient-to-r from-yellow-200 to-white my-10 rounded-md min-w-70%">
            <thead class="text-purple-800">
                <th class="p-2">ID</th>
                <th class="p-2">Name</th>
                <th class="p-2">E-mail</th>
                <th class="p-2">Actions</th>
            </thead>

            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        
                        <td>
                            <a type="button" class="bg-blue-500 p-5 m-1 rounded-full text-white opacity-70" 
                            href="{{ route('customers.show', ['customer' => $customer->id]) }}"> 
                                Show 
                            </a>
                            <a type="button" class="bg-orange-500 p-5 m-1 rounded-full text-white opacity-70" 
                            href="{{ route('customers.edit', ['customer' => $customer->id]) }}"> 
                                Edit 
                            </a>
                            <a type="button"class="bg-red-500 p-5 m-1 rounded-full text-white  opacity-70" 
                            href="{{ route('customers.delete', ['customer' => $customer->id]) }}">
                                Delete 
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
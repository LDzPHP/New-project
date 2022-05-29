@extends('dashboard')

@section('content')
    <div class="mx-12">
        <div class="create-button-container">
            <a class="bg-green-500 text-white px-12 py-8 rounded-md opacity-70" 
            href="{{ route('prs.create') }}"> 
                Create print
            </a>
        </div>

        <table class="bg-gradient-to-r from-yellow-400 to-white my-10 rounded-md">
            <thead class="text-purple-800">
                <th class="p-2">Print ID</th>
                <th class="p-2">Print price</th>
                <th class="p-2">Print description</th>
                <th class="p-2">Actions</th>
            </thead>

        <tbody>
            @foreach($prs as $pr)
                <tr>
                    <td>{{ $pr->id }}</td>
                    <td>{{ $pr->pr_price }}</td>
                    <td>{{ $pr->description }}</td>

                    <td>
                        <a type="button" class="bg-blue-500 p-5 m-1 rounded-full text-white opacity-70" 
                        href="{{ route('prs.show', ['pr' => $pr->id]) }}"> 
                                Show 
                        </a>
                        <a type="button" class="bg-orange-500 p-5 m-1 rounded-full text-white opacity-70" 
                        href="{{ route('prs.edit', ['pr' => $pr->id]) }}"> 
                                Edit 
                        </a>
                        <a type="button"class="bg-red-500 p-5 m-1 rounded-full text-white opacity-70" 
                        href="{{ route('prs.delete', ['pr' => $pr->id]) }}">
                                Delete 
                        </a>
                    </td>
                </tr>
            @endforeach
        <tbody>
    </table>
</div>
@endsection